<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:19:05
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\views\block_manager\render\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b579007933_71047005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb88159364a03fcdc8c0f4ef8a9a874b066181e0' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1663685390,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/block.tpl' => 1,
  ),
),false)) {
function content_6408b579007933_71047005 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>ty-float-left<?php }?>">
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class'] || $_smarty_tpl->tpl_vars['content_alignment']->value == 'RIGHT' || $_smarty_tpl->tpl_vars['content_alignment']->value == 'LEFT') {?>
            </div>
        <?php }?>
    <?php }
}
}
}
