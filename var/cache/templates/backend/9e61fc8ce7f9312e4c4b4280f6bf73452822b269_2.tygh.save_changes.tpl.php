<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:47:33
  from 'C:\laragon\www\cscart\design\backend\templates\buttons\save_changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ae150694d1_45273041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e61fc8ce7f9312e4c4b4280f6bf73452822b269' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\buttons\\save_changes.tpl',
      1 => 1663685092,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6408ae150694d1_45273041 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
