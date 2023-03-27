<?php
/* Smarty version 4.1.0, created on 2023-03-08 19:19:12
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\discussion\hooks\products\data_block.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408b580ebb318_41728110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f30b2e9a21d1725f5a447f52b045f4166e5b88c' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\products\\data_block.pre.tpl',
      1 => 1663685399,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
  ),
),false)) {
function content_6408b580ebb318_41728110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_rating']->value && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] == "R" || $_smarty_tpl->tpl_vars['product']->value['discussion_type'] == "B") {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {?>
            <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['product']->value['average_rating']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']) {?>
            <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['average_rating']->value > 0) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion"), 0, false);
?>
        <?php }?>

    <?php }?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/products/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_rating']->value && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] == "R" || $_smarty_tpl->tpl_vars['product']->value['discussion_type'] == "B") {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {?>
            <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['product']->value['average_rating']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']) {?>
            <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['average_rating']->value > 0) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion"), 0, true);
?>
        <?php }?>

    <?php }?>

<?php }
}
}
}
