<?php
/* Smarty version 4.1.0, created on 2023-03-14 18:45:15
  from 'C:\laragon\www\cscart\design\backend\templates\views\addons\components\addons\addon_license_required.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6410968b34e527_68116053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08df82d761d8314ed653039f9202c806ce68315' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_license_required.tpl',
      1 => 1663685094,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410968b34e527_68116053 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
if (fn_allowed_for("MULTIVENDOR") && fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required") ,false ,2);
} elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required") ,false ,2);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required") ,false ,2);
}
}
}
