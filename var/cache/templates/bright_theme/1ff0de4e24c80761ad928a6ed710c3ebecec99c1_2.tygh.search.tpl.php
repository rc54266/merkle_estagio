<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:41
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\store_locator\views\store_locator\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f55150d3258_80050688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff0de4e24c80761ad928a6ed710c3ebecec99c1' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\store_locator\\views\\store_locator\\search.tpl',
      1 => 1663685394,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/store_locator/components/picker/vendors.tpl' => 2,
    'tygh:addons/store_locator/components/picker/cities.tpl' => 2,
    'tygh:addons/store_locator/components/map_and_list_store.tpl' => 2,
  ),
),false)) {
function content_640f55150d3258_80050688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.stores_and_pickup_points','vendor','all','city','all','no_data','store_locator.stores_and_pickup_points','vendor','all','city','all','no_data'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps'] && $_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->_assignInScope('display_type', $_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('display_type', "ML");?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('display_type', "L");
}?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value != "L") {?>
    <?php $_smarty_tpl->_assignInScope('display_pickup_map', true);
}?>

<form action="<?php echo htmlspecialchars(fn_url("store_locator.search"), ENT_QUOTES, 'UTF-8');?>
" id="store_locator_search_form">
    <input type="hidden" name="result_ids" value="store_location_search_city,store_locator_location,store_locator_search_block_*" />
    <input type="hidden" name="full_render" value="Y" />

    <div id="store_locator_search_controls" class="store-locator__location--wrapper">
        <h2 class="store-locator__step-title"><?php echo $_smarty_tpl->__("store_locator.stores_and_pickup_points");?>
</h2>

        <?php if ($_smarty_tpl->tpl_vars['is_vendors_picker_enabled']->value) {?>
            <div class="store-locator__location store-locator__location--vendor sl-search-control">
                <label class="store-locator__select-label" for="store_locator_search_vendor"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/picker/vendors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"sl_search[company_id]",'show_advanced'=>false,'show_empty_variant'=>true,'empty_variant_text'=>$_smarty_tpl->__("all",array("skip_live_editor"=>true))), 0, false);
?>
            </div>
        <?php }?>

        <div class="store-locator__location store-locator__location--city sl-search-control" id="store_location_search_city">
            <label class="store-locator__select-label" for="store_locator_search_city"><?php echo $_smarty_tpl->__("city");?>
:</label>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/picker/cities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"sl_search[city]",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['sl_search']->value['city'] ? array($_smarty_tpl->tpl_vars['sl_search']->value['city']) : array(),'empty_variant_text'=>$_smarty_tpl->__("all",array("skip_live_editor"=>true))), 0, false);
?>
        <!--store_location_search_city--></div>
    </div>

<div id="store_locator_location">

    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
        <div class="store-locator">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/map_and_list_store.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store_locations'=>$_smarty_tpl->tpl_vars['store_locations']->value,'group_key'=>0,'store_locations_count'=>$_smarty_tpl->tpl_vars['store_locations_count']->value), 0, false);
?>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locator_location--></div>
<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup_search.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/search_pickup_points.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/map.js"),$_smarty_tpl);?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/store_locator/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/store_locator/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps'] && $_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']) {?>
        <?php $_smarty_tpl->_assignInScope('display_type', $_smarty_tpl->tpl_vars['shipping']->value['service_params']['display']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('display_type', "ML");?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('display_type', "L");
}?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value != "L") {?>
    <?php $_smarty_tpl->_assignInScope('display_pickup_map', true);
}?>

<form action="<?php echo htmlspecialchars(fn_url("store_locator.search"), ENT_QUOTES, 'UTF-8');?>
" id="store_locator_search_form">
    <input type="hidden" name="result_ids" value="store_location_search_city,store_locator_location,store_locator_search_block_*" />
    <input type="hidden" name="full_render" value="Y" />

    <div id="store_locator_search_controls" class="store-locator__location--wrapper">
        <h2 class="store-locator__step-title"><?php echo $_smarty_tpl->__("store_locator.stores_and_pickup_points");?>
</h2>

        <?php if ($_smarty_tpl->tpl_vars['is_vendors_picker_enabled']->value) {?>
            <div class="store-locator__location store-locator__location--vendor sl-search-control">
                <label class="store-locator__select-label" for="store_locator_search_vendor"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/picker/vendors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"sl_search[company_id]",'show_advanced'=>false,'show_empty_variant'=>true,'empty_variant_text'=>$_smarty_tpl->__("all",array("skip_live_editor"=>true))), 0, true);
?>
            </div>
        <?php }?>

        <div class="store-locator__location store-locator__location--city sl-search-control" id="store_location_search_city">
            <label class="store-locator__select-label" for="store_locator_search_city"><?php echo $_smarty_tpl->__("city");?>
:</label>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/picker/cities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"sl_search[city]",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['sl_search']->value['city'] ? array($_smarty_tpl->tpl_vars['sl_search']->value['city']) : array(),'empty_variant_text'=>$_smarty_tpl->__("all",array("skip_live_editor"=>true))), 0, true);
?>
        <!--store_location_search_city--></div>
    </div>

<div id="store_locator_location">

    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
        <div class="store-locator">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/map_and_list_store.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('store_locations'=>$_smarty_tpl->tpl_vars['store_locations']->value,'group_key'=>0,'store_locations_count'=>$_smarty_tpl->tpl_vars['store_locations_count']->value), 0, true);
?>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locator_location--></div>
<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup_search.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/search_pickup_points.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/map.js"),$_smarty_tpl);?>

</form>
<?php }
}
}
