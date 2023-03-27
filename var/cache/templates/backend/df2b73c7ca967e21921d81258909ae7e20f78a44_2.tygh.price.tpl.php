<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:16:02
  from 'C:\laragon\www\cscart\design\backend\templates\common\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a6b2773343_41758410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2b73c7ca967e21921d81258909ae7e20f78a44' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\common\\price.tpl',
      1 => 1663685092,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a6b2773343_41758410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.format_price.php','function'=>'smarty_modifier_format_price',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "currencies", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency'] == "use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value != $_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"></span><?php }?>)<?php }
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == "input") {?>
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-numeric <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
" <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {?>data-p-sign="s"<?php }?> data-a-dec="." data-a-sep="," <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>data-ct-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'currencies');?>

<?php }
}
}
