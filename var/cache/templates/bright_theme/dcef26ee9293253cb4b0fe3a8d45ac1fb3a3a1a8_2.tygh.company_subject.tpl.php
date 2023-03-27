<?php
/* Smarty version 4.1.0, created on 2023-03-14 18:07:56
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\company_subject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64108dcc513513_02769468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcef26ee9293253cb4b0fe3a8d45ac1fb3a3a1a8' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\company_subject.tpl',
      1 => 1663685393,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64108dcc513513_02769468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_allowed_for("MULTIVENDOR")) {?>
    <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['company_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],60,"...",true), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } elseif (fn_allowed_for("ULTIMATE")) {?>
    <span>
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],60,"...",true), ENT_QUOTES, 'UTF-8');?>

    </span>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/company_subject.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/company_subject.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")) {?>
    <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['logos']['theme']['company_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],60,"...",true), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } elseif (fn_allowed_for("ULTIMATE")) {?>
    <span>
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['company']->value['company'],60,"...",true), ENT_QUOTES, 'UTF-8');?>

    </span>
<?php }
}
}
}
