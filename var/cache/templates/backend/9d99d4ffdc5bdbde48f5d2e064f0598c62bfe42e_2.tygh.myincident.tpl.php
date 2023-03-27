<?php
/* Smarty version 4.1.0, created on 2023-03-23 18:35:25
  from 'C:\laragon\www\cscart\design\backend\templates\addons\incidents\views\incident\myincident.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_641c71bd3e8036_92803781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d99d4ffdc5bdbde48f5d2e064f0598c62bfe42e' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\incidents\\views\\incident\\myincident.tpl',
      1 => 1673969636,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_641c71bd3e8036_92803781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
\Tygh\Languages\Helper::preloadLangVars(array('order_status','storefront_search_button','text_no_incidents'));
?>
<div class="table-responsive-wrapper longtap-selection">

    <div class="table-responsive-wrapper longtap-selection">
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
        <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                <tr>
                    
                    <th width="11%" class="nowrap">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents">ID</a>
                    </th>
                    <th width="35%">
                        <a class="cm-ajax th-text-overflow th-text-overflow--desc " href=""
                            data-ca-target-id="pagination_contents">Subject</a>
                    </th>
                                        <th width="35%">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents">Date</a>
                    </th>
                    <th width="15%" class="cm-ajax th-text-overflow">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents"
                            title="Status">Status</a>
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incidents']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                    <tr class="cm-row-status-a cm-longtap-target cm-hide-inputs" data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item" data-ca-id="1" id="uid_SEaVaWtKtJmHp865">
                                                <td width="11%" data-th="ID" class="table__first-column"><a
                                href="<?php echo htmlspecialchars(fn_url("incident.answer?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
" class="row-status">
                                <strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>
</strong>
                            </a>
                        </td>
                        <td width="35%" class="row-status wrap" data-th="Subject"><a
                                href="<?php echo htmlspecialchars(fn_url("incident.answer?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            </a>
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['subject'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </td>
                                                <td width="35%" class="row-status" data-th="Phone">
                            <a href="<?php echo htmlspecialchars(fn_url("incident.answer?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><bdi></bdi></a>
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['created'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </td>
                        <td width="15%" class="row-status" data-th="Phone">
                            <a href="<?php echo htmlspecialchars(fn_url("incident.answer?incident_id=".((string)$_smarty_tpl->tpl_vars['o']->value['incident_id'])), ENT_QUOTES, 'UTF-8');?>
"><bdi></bdi></a>
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
</strong>
                        </td>
                    </tr>

                <?php
}
if ($_smarty_tpl->tpl_vars['o']->do_else) {
?>
                    <tr class="ty-table__no-items">
                        <td colspan="7">
                            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_incidents");?>
</p>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

</div><?php }
}
