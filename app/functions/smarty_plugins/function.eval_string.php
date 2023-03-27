<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

use Tygh\SmartyEngine\Security as SmartySecurity;

/**
 * Evaluates string which contains smarty syntax and falls back to custom error message instead fatal error
 *
 * Type:     function<br>
 * Name:     eval_string<br>
 * @return string
 */

function smarty_function_eval_string($params, &$smarty)
{
    try {
        $security = new SmartySecurity($smarty);
        $smarty->enableSecurity($security);

        $contents = $smarty->fetch('string:' . $params['var']);
    } catch (Exception $e) {
        $contents = $e->getMessage();
    } finally {
        $smarty->disableSecurity();
    }

    return $contents;
}
