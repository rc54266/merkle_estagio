<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:46:11
  from 'C:\laragon\www\cscart\design\backend\templates\views\notification_settings\components\receivers_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408adc3495653_18249143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28eb3f3f0f7ebae3f01f5c227fe51acfbba014fe' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\notification_settings\\components\\receivers_picker.tpl',
      1 => 1663685097,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408adc3495653_18249143 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search'));
$_smarty_tpl->_assignInScope('is_disabled', (($tmp = $_smarty_tpl->tpl_vars['is_disabled']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->__("type_to_search"));?>

<div class="notification-group-editor__input-group">
    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="notification-group-editor__label"
    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</label>

    <select multiple
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select notification-group-editor__picker"
            data-ca-notification-receivers-editor-picker
            data-ca-notification-receivers-editor-receiver-search-method="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-escape-html="false"
            <?php if ($_smarty_tpl->tpl_vars['load_items_url']->value) {?>
                data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['load_items_url']->value), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-ajax-delay="250"
            <?php }?>
            data-ca-object-picker-autofocus="false"
            data-ca-object-picker-autoopen="false"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-allow-clear="<?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>false<?php } else { ?>true<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_new_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['template_result_selector']->value) {?>
                data-ca-object-picker-template-result-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>
                disabled
            <?php }?>
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
" selected><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
}
