<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:19:05
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\vendor_communication\hooks\profiles\my_account_menu.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b579e8e6a6_51951828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04cffe6ad0868c448b18054a118010143e3a009' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1663685393,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408b579e8e6a6_51951828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.messages','vendor_communication.messages'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('communication_type_active', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('communication_type_active', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars(fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
}
}
}
