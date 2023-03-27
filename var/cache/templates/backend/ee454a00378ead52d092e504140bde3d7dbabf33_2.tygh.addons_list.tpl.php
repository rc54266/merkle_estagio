<?php
/* Smarty version 4.1.0, created on 2023-03-14 18:45:14
  from 'C:\laragon\www\cscart\design\backend\templates\views\addons\components\addons_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6410968a6512d0_09718152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee454a00378ead52d092e504140bde3d7dbabf33' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons_list.tpl',
      1 => 1663685094,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_full_info.tpl' => 1,
    'tygh:views/addons/components/addons/addon_favorite.tpl' => 1,
    'tygh:views/addons/components/addons/addon_icon.tpl' => 1,
    'tygh:views/addons/components/manage/addon_description.tpl' => 1,
    'tygh:views/addons/components/manage/addon_install_datetime.tpl' => 1,
    'tygh:views/addons/components/addons/addon_supplier.tpl' => 1,
    'tygh:views/addons/components/addons/addon_status.tpl' => 1,
    'tygh:views/addons/components/addons/addon_actions.tpl' => 1,
  ),
),false)) {
function content_6410968a6512d0_09718152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('favorites','name','installed_date','developer','status','no_data'));
if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
    <div class="table-responsive-wrapper" id="addon_table">
        <table class="table table-addons table-middle cm-filter-table ty-table--sorter
            table-responsive table-responsive-w-titles"
            data-ca-sortable="true"
            data-ca-sort-list="[[1, 0]]"
            data-ca-input-id="elm_addon"
            data-ca-clear-id="elm_addon_clear"
            data-ca-empty-id="elm_addon_no_items"
            data-ca-filter-table-is-logical-and="true"
        >
            <thead>
                <tr>
                    <th width="1%" class="left mobile-hide">
                    </th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-star-empty",'title'=>$_smarty_tpl->__("favorites")),$_smarty_tpl);?>

                    </th>
                    <th class="sorter-false" width="8%"></th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="3%" title="<?php echo $_smarty_tpl->__("installed_date");?>
">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-calendar muted"),$_smarty_tpl);?>

                    </th>
                    <th class="cm-tablesorter" data-ca-sortable-column="true" width="18%"><?php echo $_smarty_tpl->__("developer");?>
</th>
                    <th class="sorter-false" width="7%"></th>
                    <th class="cm-tablesorter right" data-ca-sortable-column="true" width="20%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
            </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_list']->value, 'a', false, 'key');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_full_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['a']->value), 0, true);
?>

            <?php $_smarty_tpl->_assignInScope('addon_filter_source_suffix', $_smarty_tpl->tpl_vars['a']->value['is_core_addon'] ? "built_in" : "third_party");?>

            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-row-item
                filter_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['status'], ENT_QUOTES, 'UTF-8');?>
 filter_source_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_filter_source_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-supplier="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
"
                data-category="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['category'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td class="left mobile-hide">
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('result_ids'=>"addon_table",'detailed'=>false), 0, true);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['a']->value,'href'=>true,'show_description'=>true), 0, true);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addon_description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addon_install_datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <td>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_supplier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <td class="nowrap">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
                <td class="nowrap right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </td>
            <!--addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <!--addon_table--></div>
<?php } else { ?>
    <p id="elm_addon_no_items" class="no-items <?php if ($_smarty_tpl->tpl_vars['addon_list']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }
}
}
