<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:44:51
  from 'C:\laragon\www\cscart\design\backend\templates\addons\tags\hooks\pages\search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408ad73f278a5_77884065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92abb44786268f6b8c8172fd60028ffcbe5ff24f' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\tags\\hooks\\pages\\search_form.post.tpl',
      1 => 1663685090,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408ad73f278a5_77884065 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }
}
