<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }
// 1. Se modo for 'add' (adicionar) e preço_cart >= 30 
// 2. mostrar notificacao
// (substituir o 30 por valor da setting)
    if ($mode == 'add' && $_SESSION["cart"]["original_subtotal"] >=60) 
    {
        fn_set_notification('N', __('notice'), "O valor foi ultrapassado");
        }
    

