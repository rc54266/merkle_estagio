<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:19:01
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\gift_certificates\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b575a6cf70_06524774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ce91423460b9ec852a7045c6ef32af1799cce4' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\gift_certificates\\hooks\\index\\styles.post.tpl',
      1 => 1663685394,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408b575a6cf70_06524774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/gift_certificates/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/gift_certificates/responsive.less"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/gift_certificates/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/gift_certificates/responsive.less"),$_smarty_tpl);
}
}
}
