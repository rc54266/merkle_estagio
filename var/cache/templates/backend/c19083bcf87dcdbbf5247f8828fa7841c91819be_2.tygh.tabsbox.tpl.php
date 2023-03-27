<?php
/* Smarty version 4.1.0, created on 2023-03-08 18:16:02
  from 'C:\laragon\www\cscart\design\backend\templates\common\tabsbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6408a6b2a14407_23446875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19083bcf87dcdbbf5247f8828fa7841c91819be' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\common\\tabsbox.tpl',
      1 => 1663685093,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6408a6b2a14407_23446875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.empty_tabs.php','function'=>'smarty_modifier_empty_tabs',),2=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),3=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', $_REQUEST['selected_section']);
}?>

<?php $_smarty_tpl->_assignInScope('empty_tab_ids', smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value));?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>

<?php $_smarty_tpl->_assignInScope('with_conf', false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tab_items", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ((!$_smarty_tpl->tpl_vars['tabs_section']->value || $_smarty_tpl->tpl_vars['tabs_section']->value == $_smarty_tpl->tpl_vars['tab']->value['section']) && ($_smarty_tpl->tpl_vars['tab']->value['hidden'] || !smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value))) {?>
        <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden'] == smarty_modifier_enum("YesNo::YES")) {?>hidden <?php }
if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php if ($_smarty_tpl->tpl_vars['tab']->value['ajax_onclick']) {?> cm-ajax-onclick<?php }
}
if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['tab']->value['properties']) {?>extra-tab<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {
echo $_smarty_tpl->tpl_vars['active_tab_extra']->value;
}?>

            <?php if ($_smarty_tpl->tpl_vars['tab']->value['properties']) {?>
                <?php $_smarty_tpl->_assignInScope('with_conf', true);?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'title'=>$_smarty_tpl->tpl_vars['tab']->value['properties']['title'],'target_id'=>"content_properties_".((string)$_smarty_tpl->tpl_vars['key']->value).((string)$_smarty_tpl->tpl_vars['id_suffix']->value),'href'=>$_smarty_tpl->tpl_vars['tab']->value['properties']['href']), true);?>

            <?php }?>

            <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> tabs <?php if ($_smarty_tpl->tpl_vars['with_conf']->value) {?>tabs-with-conf<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_tabs']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tab_items');?>

    </ul>
</div>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
