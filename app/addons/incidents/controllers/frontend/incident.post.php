<?php

use Tygh\Storage;
use Tygh\Tools\ImageHelper;
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

$view = Tygh::$app['view'];
$user_id = $_SESSION['auth']['user_id'];


if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if ($mode === 'view') {

        $incident_id = $_POST['incident_id'];
        $comment = $_POST['comment'];
        
        if (empty($comment))
            {
                fn_set_notification('E', __('error'), 'error');
                    return;
            }
        

            $data = [
                'comment'   => $comment,
                'incident_id'   => $incident_id,
                'user_id'   => $user_id,
            ];

            db_query("INSERT INTO ?:incidents_comments ?e", $data);
            //Redirecionar para a página com sucesso
            fn_set_notification('N', __('Notice'),'Comment created successfully');
            fn_redirect(Registry::get('config.current_url'));
    }
    if ( $mode === 'filter' && defined('AJAX_REQUEST')) {
        $incidents = db_get_hash_single_array(
            'SELECT status_id, status_name
            FROM cscart_incident_status
            WHERE status_id IN(?n)',
            ['status_id','status_name'],
            $_POST['status']
        );
        $view->assign([ 
            'incidents' => $incidents,
        ]); 
        Tygh::$app['view']->display('addons/incidents/views/incident/myincident.tpl');
    }
    if ($mode === 'create') {
        // validações dos campos || Verificar se estão a ser enviados ||
        // Se os dados estiverem vazios dar erro
        //Incersões na Base de dados 
        //Redirecionar para a página com sucesso
            $subject = $_POST['subject'];
            $content = $_POST['content'];    
           // $file = $_POST['file'];
            $allowTypes = array('jpg','png','jpeg','pdf', null);  
            if (empty($subject)
            && empty($content)
            ) {
                fn_set_notification('E', __('error'),'error');
                    return;
            }
           // $ext = fn_get_file_ext($file);
            //if (!in_array($ext, $allowTypes)) {
              //  fn_set_notification('E', __('error'), 'Invalid Extension. Permited ext: JPG, PNG, JPEG, PDF');

                //    return;
            //}
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
        fn_set_notification('N', __('Notice'),'Incident created successfully');
        fn_redirect('incident.myincident');
    }
}

if ($_SERVER['REQUEST_METHOD'] == "GET")
{
    //Buscar dados à tabela
    if ($mode === 'myincident') {
        $condition = '';
        if (isset($_GET['status'])) {
            $condition .= db_quote(' AND s.status_id IN(?n)', $_GET['status']);
        }
        
        $incidents = db_get_array(
            'SELECT *
            FROM ?:incident_status as s
            INNER JOIN ?:incidents as i ON s.status_id=i.status_id 
            LEFT JOIN ?:users AS users ON users.user_id = i.operator_id
            WHERE i.user_id = ?i ?p',
            $user_id,
            $condition
        );

        $incident_status = db_get_hash_single_array(
            'SELECT status_id, status_name
            FROM cscart_incident_status',
            ['status_id','status_name']
        );

        $incident_category = db_get_hash_single_array(
            'SELECT category_id, category_name
            FROM cscart_incident_category',
            ['category_id', 'category_name']
        );
        
        //Mandar dados para a vista
        $view->assign([
            'incidents' => $incidents,
            'incident_status' => $incident_status,
            'incident_category' => $incident_category,
        ]); 
    } 

    if ($mode === 'view' ) {
        $incident_id = $_GET['incident_id'];


       // && !empty($incident_id)
        $incident_details = db_get_row(
            'SELECT *
            FROM ?:incidents
            WHERE incident_id = ?s', $incident_id
        );

        $incident_firstname = db_get_row(
            'SELECT user_id, firstname
            FROM cscart_users
           WHERE user_id = ?s', $user_id
        );

        $comment_answer = db_get_array(
            'SELECT comments.comment, comments.update_time, users.firstname, users.user_id
            FROM ?:incidents_comments AS comments
            INNER JOIN ?:users AS users ON users.user_id = comments.user_id
            WHERE incident_id = ?s', $incident_id
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
           ' , $incident_id
        ); 

        

        $view->assign([
            'incident_details' => $incident_details,
            'incident_firstname' => $incident_firstname,
            'incident_firstname_comment' => $incident_firstname_comment,
            'incident_firstname' => $incident_firstname,
            'comment_answer' => $comment_answer,


        ]);


    }
    
  //  if ( $mode === 'create_categories') {
    //    $categoriesname = db_get_array(
      //      'SELECT * FROM ?:incident_category'
        //);

        //$view->assign([
         //   'categoriesname' => $categoriesname,
        //]); 
    //}
}