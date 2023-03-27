<?php
/* Smarty version 4.1.0, created on 2023-03-23 19:52:15
  from 'C:\laragon\www\cscart\design\themes\bright_theme\templates\addons\incidents\views\incident\myincident.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_641c83bfdd4907_90102270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a835330674282d9a0af925d221786ab3beb536e7' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\bright_theme\\templates\\addons\\incidents\\views\\incident\\myincident.tpl',
      1 => 1679590333,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/pagination.tpl' => 2,
  ),
),false)) {
function content_641c83bfdd4907_90102270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('order_status','storefront_search_button','ID','Subject','Date','Status','order_status','storefront_search_button','ID','Subject','Date','Status'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="">

	<h2>My Incidents</h2>
    
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">
    <input type="hidden" name="result_ids" value="table_incident" />
    <div class="ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
                
        <?php echo smarty_function_html_checkboxes(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['incident_status']->value,'selected'=>array_keys($_smarty_tpl->tpl_vars['incident_status']->value)),$_smarty_tpl);?>

    </div>
    <div class="buttons-container ty-search-form__buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("storefront_search_button"),'but_name'=>"dispatch[incident.myincident]"), 0, false);
?>
    </div>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<table id="table_incident" class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("ID");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Subject");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Date");?>
</a></th>
			<th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Status");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo htmlspecialchars(("Assigned to"), ENT_QUOTES, 'UTF-8');?>
</a></th>
            
                   </tr>
    </thead>

    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incidents']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars(fn_url("incident.view?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
			<td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars(fn_url("incident.view?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['subject'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
			<td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['created'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
            <td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
            <td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    	
             			
        </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['o']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="7">
                <p class="ty-no-items"><?php echo htmlspecialchars(("No Incidents Found"), ENT_QUOTES, 'UTF-8');?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>






</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/incidents/views/incident/myincident.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/incidents/views/incident/myincident.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="">

	<h2>My Incidents</h2>
    
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">
    <input type="hidden" name="result_ids" value="table_incident" />
    <div class="ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
                
        <?php echo smarty_function_html_checkboxes(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['incident_status']->value,'selected'=>array_keys($_smarty_tpl->tpl_vars['incident_status']->value)),$_smarty_tpl);?>

    </div>
    <div class="buttons-container ty-search-form__buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("storefront_search_button"),'but_name'=>"dispatch[incident.myincident]"), 0, true);
?>
    </div>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<table id="table_incident" class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("ID");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Subject");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Date");?>
</a></th>
			<th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("Status");?>
</a></th>
            <th><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo htmlspecialchars(("Assigned to"), ENT_QUOTES, 'UTF-8');?>
</a></th>
            
                   </tr>
    </thead>

    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incidents']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <tr>
            <td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars(fn_url("incident.view?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
			<td class="ty-orders-search__item"><a href="<?php echo htmlspecialchars(fn_url("incident.view?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['subject'], ENT_QUOTES, 'UTF-8');?>
</strong></a></td>
			<td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['created'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
            <td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
            <td class="ty-orders-search__item"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    	
             			
        </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['o']->do_else) {
?>
        <tr class="ty-table__no-items">
            <td colspan="7">
                <p class="ty-no-items"><?php echo htmlspecialchars(("No Incidents Found"), ENT_QUOTES, 'UTF-8');?>
</p>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>






</div><?php }
}
}
