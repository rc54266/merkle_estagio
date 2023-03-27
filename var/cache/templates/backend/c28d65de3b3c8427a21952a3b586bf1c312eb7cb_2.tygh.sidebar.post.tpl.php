<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:44:52
  from 'C:\laragon\www\cscart\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ad74268e63_43906438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c28d65de3b3c8427a21952a3b586bf1c312eb7cb' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1663685082,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408ad74268e63_43906438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.notes.php','function'=>'smarty_block_notes',),));
if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
