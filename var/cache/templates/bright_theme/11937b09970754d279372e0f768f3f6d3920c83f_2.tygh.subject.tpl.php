<?php
/* Smarty version 4.1.0, created on 2023-03-14 18:07:56
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\components\subject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64108dcc2ea076_54635674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11937b09970754d279372e0f768f3f6d3920c83f' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\subject.tpl',
      1 => 1663685393,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/product_subject.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/order_subject.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/company_subject.tpl' => 2,
  ),
),false)) {
function content_64108dcc2ea076_54635674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('object_type', $_smarty_tpl->tpl_vars['thread']->value['object_type']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['thread']->value['object']);?>

<?php if (!$_smarty_tpl->tpl_vars['object']->value['object_id']) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['subject'], ENT_QUOTES, 'UTF-8');?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/product_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/order_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order'=>$_smarty_tpl->tpl_vars['object']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/company_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/subject.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/subject.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('object_type', $_smarty_tpl->tpl_vars['thread']->value['object_type']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['thread']->value['object']);?>

<?php if (!$_smarty_tpl->tpl_vars['object']->value['object_id']) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['subject'], ENT_QUOTES, 'UTF-8');?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/product_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0, true);
} elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/order_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order'=>$_smarty_tpl->tpl_vars['object']->value), 0, true);
} elseif ($_smarty_tpl->tpl_vars['object_type']->value === (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/company_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0, true);
}
}
}
}
