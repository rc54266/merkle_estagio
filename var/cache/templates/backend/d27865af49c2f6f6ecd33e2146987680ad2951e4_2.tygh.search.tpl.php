<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:44:52
  from 'C:\laragon\www\cscart\design\backend\templates\buttons\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ad741e3665_34047187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27865af49c2f6f6ecd33e2146987680ad2951e4' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\buttons\\search.tpl',
      1 => 1663685092,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6408ad741e3665_34047187 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_button'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("admin_search_button"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value), 0, false);
}
}
