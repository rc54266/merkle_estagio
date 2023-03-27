<?php

use Tygh\Registry;
use Tygh\Settings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
// fn + id addon + id hook
// fn_id_addon_id_hook()
function fn_hello_world_set_return_url(& $redirect_url)
{
    $settings = Registry::get('addons.hello_world');
    //$redirect_url = index.php;

    if (AREA === 'C' && !empty($settings['changeurl'] )) {
        $redirect_url = $settings['changeurl'];
        fn_log_event('users', 'failed_login', [
            'user' => 'O utilizador foi redirecionado para o'.$redirect_url
        ]);
    }

    fn_set_notification('E', __('error'), __('addon_id_goes_here'));
}

/*function fn_hello_world_readonly(& $read_only)
{
    
    hooktemplate

    
    if (AREA === 'C' &&) {
        $('.ty-readonly .ty-input-text').attr('readonly', true);
    }
}
*/