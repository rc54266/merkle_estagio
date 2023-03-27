<?php

use Tygh\Storage;
use Tygh\EmailSync;
use Tygh\Tools\ImageHelper;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

$view = Tygh::$app['view'];
$user_id = $_SESSION['auth']['user_id'];


if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if ($mode === 'view') {
        $condition = '';
        if (isset($_GET['status'])) {
            $condition .= db_quote(' AND s.status_id IN(?n)', $_GET['status']);
        }

        $all_incidents = db_get_array(
            'SELECT *
            FROM ?:incident_status as s
            INNER JOIN ?:incidents as i ON s.status_id=i.status_id
            LEFT JOIN ?:users AS users ON users.user_id = i.operator_id
            WHERE i.user_id != ?i ?p',
            $user_id,
            $condition
        );

        $incident_status = db_get_hash_single_array(
            'SELECT status_id, status_name
            FROM cscart_incident_status',
            ['status_id', 'status_name']
        );

        $view->assign([
            'all_incidents' => $all_incidents,
            'incident_status' => $incident_status,
        ]);
    }



    if ($mode === 'answer') {

        $incident_id = $_GET['incident_id'];

        // && !empty($incident_id)
        $incident_details = db_get_row(
            'SELECT *
             FROM ?:incidents
             WHERE incident_id = ?s',
            $incident_id
        );

        $user_email = db_get_row(
            'SELECT users.email
            FROM ?:users AS users
            WHERE user_id = ?s',
            $incident_details['user_id']
        );

        $comment_answer = db_get_array(
            'SELECT comments.comment, comments.update_time, users.firstname, users.user_id
            FROM ?:incidents_comments AS comments
            INNER JOIN ?:users AS users ON users.user_id = comments.user_id
            WHERE incident_id = ?s',
            $incident_id
        );

        $comments = db_get_array(
            'SELECT user_id
            FROM ?:incidents_comments
            WHERE incident_id = ?s',
            $incident_id
        );

        $incident_firstname = db_get_row(
            'SELECT incidents.user_id, users.firstname
            FROM ?:incidents AS incidents
            INNER JOIN ?:users AS users ON users.user_id = incidents.user_id
           '
        );


        $incident_firstname_comment = db_get_row(
            'SELECT comments.user_id, users.firstname
            FROM ?:incidents_comments AS comments
            INNER JOIN ?:users AS users ON users.user_id = comments.user_id
            WHERE comments.incident_id = ?s
           ',
            $incident_id
        );

        $operators = db_get_array(
            'SELECT users.firstname AS firstname, users.user_id as user_id
                FROM ?:users AS users
                WHERE users.user_type = "A"',
        );


        $view->assign([
            'incident_details' => $incident_details,
            'comment_answer' => $comment_answer,
            'incident_firstname' => $incident_firstname,
            'incident_firstname_comment' => $incident_firstname_comment,
            'comments' => $comments,
            'operators' => $operators,
            'user_email' => $user_email,

        ]);
    }



    if ($mode === 'myincident') {
        $condition = '';
        if (isset($_GET['status'])) {
            $condition .= db_quote(' AND s.status_id IN(?n)', $_GET['status']);
        }

        $incidents = db_get_array(
            'SELECT *
            FROM ?:incident_status as s
            INNER JOIN ?:incidents as i ON s.status_id=i.status_id 
            WHERE i.operator_id = ?s',
            $user_id,
            $condition
        );


        $incident_status = db_get_hash_single_array(
            'SELECT status_id, status_name
            FROM cscart_incident_status',
            ['status_id', 'status_name']
        );

        $view->assign([
            'incidents' => $incidents,
            'incident_status' => $incident_status
        ]);
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if ($mode === 'answer') {

        $incident_id = $_POST['incident_id'];
        $comment = $_POST['comment'];
    
        if (empty($comment)) {
            fn_set_notification('E', __('error'), 'error');
            return;
        } else {
    
            $user = db_get_row(
                'SELECT users.email AS email
                 FROM ?:incidents AS incidents
                 INNER JOIN ?:users AS users ON users.user_id = incidents.user_id
                 WHERE incidents.incident_id = ?s',
                $incident_id
            );
    
            $incident_creator = db_get_row(
                'SELECT incidents.user_id, users.firstname
                FROM ?:incidents AS incidents
                INNER JOIN ?:users AS users ON users.user_id = incidents.user_id
               '
            );
    
            $firstname = $incident_creator["firstname"];
    
            $data = [
                'comment'   => $comment,
                'incident_id'   => $incident_id,
                'user_id'   => $user_id,
            ];
    
            db_query("INSERT INTO ?:incidents_comments ?e", $data);
            //Redirecionar para a página com sucesso
            fn_set_notification('N', __('Notice'), 'Incident created successfully');
    
    
            $mailer = Tygh::$app['mailer'];
    
    
            $subj = "You got a response to your incident";
            $body = "Hello $firstname you have received a response to incident Nº $incident_id.";
    
    
            $mailer->send(array(
                'to' => $user['email'],
                'from' => 'default_company_newsletter_email',
                'data' => array(
                    'body' => $body,
                    'subject' => $subj
                ),
                'template_code' => 'comment_email_notification',
                'tpl' => 'addons/incidents/coments.tpl',
            ), 'A');
            fn_redirect('incident.view');
        }
    }


    if ($mode === 'delete') {

        $data = array(
            'user_id' => $auth['user_id']
        );
        $incident_id = $_POST['incident_id'];

        db_query(
            'DELETE FROM cscart_incidents_comments WHERE incident_id = ?s',
            $incident_id
        );

        db_query(
            'DELETE FROM cscart_incidents WHERE incident_id = ?s ',
            $incident_id,
        );
        fn_set_notification('N', __('Notice'), 'Incident was successfully deleted');

        fn_redirect('incident.view');
    }

    


    if ($mode === "asign") {
        $data = array(
            'operator_id' => $auth['user_id']
        );
        $incident_id = $_POST['incident_id'];




        db_query(
            "UPDATE ?:incidents
            SET ?u
            WHERE incident_id = ?i",
            $data,
            $incident_id
        );


        fn_set_notification('N', __('Notice'), 'Incident was successfully asigned to you');

        fn_redirect('incident.view');
    }

    if ($mode === "unsign") {
        $data = array(
            'operator_id' => null
        );
        $incident_id = $_POST['incident_id'];


        db_query(
            "UPDATE ?:incidents
            SET ?u
            WHERE incident_id = ?i",
            $data,
            $incident_id
        );


        fn_set_notification('N', __('Notice'), 'Incident was successfully unsign');

        fn_redirect('incident.view');
    }


    if ($mode === 'close') {
        $incident_id = $_POST['incident_id'];
        //e se falhar? Como sabes se falhou? ou em que situações pode causar erro?

        $status_id = 2;

        db_query(
            "UPDATE ?:incidents 
        SET status_id = ?s
        WHERE incident_id = ?s",
            $status_id,
            $incident_id
        );

        fn_set_notification('N', __('Notice'), 'Incident was close successfully');

        fn_redirect('incident.view');
    }
    if ($mode === 'open') {
        $incident_id = $_POST['incident_id'];
        //e se falhar? Como sabes se falhou? ou em que situações pode causar erro?

        $status_id = 1;

        db_query(
            "UPDATE ?:incidents 
        SET status_id = ?s
        WHERE incident_id = ?s",
            $status_id,
            $incident_id
        );

        fn_set_notification('N', __('Notice'), 'Incident was open successfully');

        fn_redirect('incident.view');
    }

    if ($mode === 'create') {
        // validações dos campos || Verificar se estão a ser enviados ||
        // Se os dados estiverem vazios dar erro
        //Incersões na Base de dados 
        //Redirecionar para a página com sucesso
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        // $file = $_POST['file'];
        $allowTypes = array('jpg', 'png', 'jpeg', 'pdf', null);
        if (
            empty($subject)
            && empty($content)
        ) {
            fn_set_notification('E', __('error'), 'error');
            return;
        }
        // Criar comentario na BD
        $status_id = 1;
        $data = [
            'subject'       => $subject,
            'content'       => $content,
            'status_id'     => $status_id,
            'user_id'       => $user_id,
        ];
        //Incersões na Base de dados 
        db_query("INSERT INTO ?:incidents ?e", $data);
        //Redirecionar para a página com sucesso
        fn_set_notification('N', __('Notice'), 'Incident created successfully');
        fn_redirect('incident.view');
    }
}
