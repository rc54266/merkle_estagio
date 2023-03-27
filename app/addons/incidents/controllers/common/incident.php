<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$view = Tygh::$app['view'];

if ($mode === 'create') {

    $teste = 'sou admin';
    if (AREA == 'C') {
        $teste = 'sou consumidor';
    }

    $view->assign([
        'teste'  => $teste
    ]);
}


