<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:12:52
  from 'C:\laragon\www\cscart\design\themes\responsive\mail\templates\addons\incidents\coments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b404691998_72653365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4549394bcb23a3bcf91c4e1c5b4fd5812383a065' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\mail\\templates\\addons\\incidents\\coments.tpl',
      1 => 1678291955,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/letter_header.tpl' => 1,
    'tygh:common/letter_footer.tpl' => 1,
  ),
),false)) {
function content_6408b404691998_72653365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Este contem o seguinte url : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->tpl_vars['body']->value;?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
