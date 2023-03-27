<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:16:44
  from 'C:\laragon\www\cscart\design\backend\templates\buttons\save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a6dc3473c9_48400665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c6f973204be59cc6c4e7ea04001ae893ce0ae6' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1663685092,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6408a6dc3473c9_48400665 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0, false);
}
}
