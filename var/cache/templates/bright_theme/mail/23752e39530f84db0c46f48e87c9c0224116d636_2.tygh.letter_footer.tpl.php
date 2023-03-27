<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:10:54
  from 'C:\laragon\www\cscart\design\themes\responsive\mail\templates\common\letter_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b38eba76f3_03337042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23752e39530f84db0c46f48e87c9c0224116d636' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\mail\\templates\\common\\letter_footer.tpl',
      1 => 1678291714,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408b38eba76f3_03337042 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('affiliate_text_letter_footer','customer_text_letter_footer'));
?>
<p>
<?php if ($_smarty_tpl->tpl_vars['user_type']->value == 'P' || $_smarty_tpl->tpl_vars['user_data']->value['user_type'] == 'P') {?>
    <?php echo $_smarty_tpl->__("affiliate_text_letter_footer");?>

<?php } else { ?>
    <?php echo $_smarty_tpl->__("customer_text_letter_footer");?>

<?php }?>
</p>
</body>
</html><?php }
}
