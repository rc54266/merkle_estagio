<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:39:18
  from 'C:\laragon\www\cscart\design\backend\templates\views\notification_settings\components\navigation_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ac264be3b2_72239067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92a307793a3452ea375980c801bc69d1e7669bdd' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\notification_settings\\components\\navigation_section.tpl',
      1 => 1663685097,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408ac264be3b2_72239067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('customer_notifications','admin_notifications','vendor_notifications','code_snippets','documents'));
?>
<div class="sidebar-row">
    <ul class="nav nav-list">
        <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value == "customer_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_prefixVariable3), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("customer_notifications");?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value == "admin_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::ADMIN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_prefixVariable4), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("admin_notifications");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value == "vendor_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_prefixVariable5), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_notifications");?>
</a></li>
        <?php }?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"notification_settings:dynamic_menu_user_types"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"notification_settings:dynamic_menu_user_types"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"notification_settings:dynamic_menu_user_types"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates'] == "new")) {?>
            <?php if (fn_check_view_permissions("email_templates.snippets","GET")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value == "code_snippets") {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("email_templates.snippets"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("code_snippets");?>
</a></li>
            <?php }?>
            <?php if (fn_check_view_permissions("documents.manage","GET")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value == "documents") {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("documents.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("documents");?>
</a></li>
            <?php }?>
        <?php }?>
    </ul>
</div>
<hr>
<?php }
}
