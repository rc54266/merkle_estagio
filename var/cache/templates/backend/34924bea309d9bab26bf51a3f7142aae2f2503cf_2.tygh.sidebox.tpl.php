<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:16:44
  from 'C:\laragon\www\cscart\design\backend\templates\common\sidebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a6dc3c5ba1_94208235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34924bea309d9bab26bf51a3f7142aae2f2503cf' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\common\\sidebox.tpl',
      1 => 1663685093,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a6dc3c5ba1_94208235 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    </div>
    <hr />
<?php }
}
}
