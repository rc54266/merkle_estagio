<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:26
  from 'C:\laragon\www\cscart\design\backend\templates\addons\vendor_communication\hooks\companies\tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f5506b61246_15600165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd595215600020a36f8d12a5fe3b1fd35ef4731ea' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\companies\\tools_list.post.tpl',
      1 => 1663685091,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
  ),
),false)) {
function content_640f5506b61246_15600165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
    <?php $_smarty_tpl->_assignInScope('divider', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('divider', false);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true,'divider'=>$_smarty_tpl->tpl_vars['divider']->value), 0, false);
}
}
