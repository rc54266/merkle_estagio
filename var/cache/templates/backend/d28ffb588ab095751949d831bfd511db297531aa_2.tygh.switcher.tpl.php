<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:26
  from 'C:\laragon\www\cscart\design\backend\templates\common\switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f55063fe8c8_68322356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28ffb588ab095751949d831bfd511db297531aa' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\common\\switcher.tpl',
      1 => 1663685093,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f55063fe8c8_68322356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>
<div class="switch-mini ty-switch-checkbox cm-switch-checkbox list-btns <?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
     <?php if ($_smarty_tpl->tpl_vars['extra_attrs']->value) {?>
         <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['extra_attrs']->value);?>

     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
         id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
     <?php }?>
>
    <input type="checkbox"
           <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>
               checked="checked"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_name']->value) {?>
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_value']->value) {?>
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_value']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_attrs']->value) {?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value);?>

           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_class']->value) {?>
               class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_class']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_readonly']->value) {?>
               readonly
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_disabled']->value) {?>
               disabled
           <?php }?>
    />
</div>
<?php }
}
