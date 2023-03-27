<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:26
  from 'C:\laragon\www\cscart\design\backend\templates\views\storefronts\components\access_only_for_authorized_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f5506572d43_14550354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1e06e894260a3c148362d9c18c37a914a5ff36' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\access_only_for_authorized_customers.tpl',
      1 => 1663685102,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_640f5506572d43_14550354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('access_for_authorized_customers_only'));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "storefront_data[is_accessible_for_authorized_customers_only]" ?? null : $tmp));?>

<div class="control-group">
    <label for="is_accessible_for_authorized_customers_only_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
        <?php echo $_smarty_tpl->__("access_for_authorized_customers_only");?>

    </label>
    <div class="controls">
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>$_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"is_accessible_for_authorized_customers_only_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, false);
?>
    </div>
</div><?php }
}
