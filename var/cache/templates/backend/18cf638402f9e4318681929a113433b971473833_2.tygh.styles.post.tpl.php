<?php
/* Smarty version 4.1.0, created on 2023-03-08 17:35:48
  from 'C:\laragon\www\cscart\design\backend\templates\addons\call_requests\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64089d4423c8c0_22999426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18cf638402f9e4318681929a113433b971473833' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\call_requests\\hooks\\index\\styles.post.tpl',
      1 => 1663685082,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64089d4423c8c0_22999426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/call_requests/styles.less"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
    <?php $_smarty_tpl->_assignInScope('statuses', fn_get_schema('call_requests','status_colors'));?>
    <?php if ($_smarty_tpl->tpl_vars['statuses']->value) {?>    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'color', false, 'status');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
            .cr-btn-status-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
 {
                .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 5%));
            }
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }
}
