<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:46:11
  from 'C:\laragon\www\cscart\design\backend\templates\views\notification_settings\components\receivers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408adc314af82_63972276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06ec85a7c0580db8a36afb82b45bc09f5cd001b8' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\notification_settings\\components\\receivers.tpl',
      1 => 1663685097,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/notification_settings/components/receivers/".((string)$_smarty_tpl->tpl_vars[\'condition\']->value->getMethod()).".tpl' => 1,
  ),
),false)) {
function content_6408adc314af82_63972276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('receivers'));
?>
<div class="notification-group__existing-receivers">
    <?php if ($_smarty_tpl->tpl_vars['show_heading']->value) {?>
        <strong><?php echo $_smarty_tpl->__("receivers");?>
:</strong>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['receivers']->value, 'condition', false, 'id');
$_smarty_tpl->tpl_vars['condition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['condition']->value) {
$_smarty_tpl->tpl_vars['condition']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "receiver_value", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"notification_settings:receiver_value"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"notification_settings:receiver_value"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers/".((string)$_smarty_tpl->tpl_vars['condition']->value->getMethod()).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['id']->value]), 0, true);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"notification_settings:receiver_value"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <span class="notification-group-existing-receivers__item"><?php echo trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'receiver_value'));?>
</span>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
