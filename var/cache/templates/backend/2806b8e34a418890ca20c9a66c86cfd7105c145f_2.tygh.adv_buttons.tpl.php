<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:45:26
  from 'C:\laragon\www\cscart\design\backend\templates\views\snippets\components\adv_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ad9657cca5_36689585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2806b8e34a418890ca20c9a66c86cfd7105c145f' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\snippets\\components\\adv_buttons.tpl',
      1 => 1663685101,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6408ad9657cca5_36689585 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet'));
if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->_assignInScope('return_url_escape', rawurlencode($_smarty_tpl->tpl_vars['return_url']->value));?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_prefixVariable1,'link_text'=>(($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0, false);
}
}
}
