<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:44:51
  from 'C:\laragon\www\cscart\design\backend\templates\views\companies\components\company_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ad735e5148_31631563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd786c9f70ee0f94fbdb01053e70a8743576ff388' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\companies\\components\\company_name.tpl',
      1 => 1663685096,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408ad735e5148_31631563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:company_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:company_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && ($_smarty_tpl->tpl_vars['object']->value['company_id'] || $_smarty_tpl->tpl_vars['object']->value['company_name'])) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->_assignInScope('_company_name', fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_hidden_input']->value) {?>
        <input type="hidden" id="company_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="company_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
            <small class="muted"><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
        <?php } else { ?>
            <p class="muted"><small><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['object']->value['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
        <?php }?>
    <?php }
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:company_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
