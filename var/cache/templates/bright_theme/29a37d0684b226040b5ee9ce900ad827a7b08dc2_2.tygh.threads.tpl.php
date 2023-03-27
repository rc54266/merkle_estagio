<?php
/* Smarty version 4.1.0, created on 2023-03-14 18:07:54
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\threads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64108dcaaeb4b9_41746217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a37d0684b226040b5ee9ce900ad827a7b08dc2' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\threads.tpl',
      1 => 1663685393,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:addons/vendor_communication/views/vendor_communication/components/subject_image.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/subject.tpl' => 2,
  ),
),false)) {
function content_64108dcaaeb4b9_41746217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),5=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),6=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','message','vendor_communication.subject','date','vendor_communication.thread','vendor_communication.you','vendor_communication.admin','customer','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages','id','message','vendor_communication.subject','date','vendor_communication.thread','vendor_communication.you','vendor_communication.admin','customer','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_subject_image_column', false);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0, false);
?>
    <?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null) || $_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('show_subject_image_column', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div id="threads_container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <table class="ty-table ty-vendor-communication-search" id="threads_table">
        <thead>
        <tr>
            <th width="3%" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
            <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                <th width="7%">&nbsp;</th>
            <?php }?>
            <th width="12%" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="40%"><?php echo $_smarty_tpl->__("message");?>
</th>
            <th width="21%"><?php echo $_smarty_tpl->__("vendor_communication.subject");?>
</th>
            <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('has_new_message', $_smarty_tpl->tpl_vars['auth']->value['user_id'] != $_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] && $_smarty_tpl->tpl_vars['thread']->value['user_status'] == (defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null));?>

            <tr>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label"></span>
                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                    <td class="ty-vendor-communication-search__item ty-nowrap">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                    </td>
                <?php }?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                    <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                            <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                        <?php }?>
                        <strong><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</strong>
                    </a>
                </td>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                    <a class="clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>"
                        href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] == $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("customer");?>
:
                            <?php }?>
                        </strong>
                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],300,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td class="ty-vendor-communication-search__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                </td>
                <td class="ty-vendor-communication-search__item ty-nowrap">
                    <a class="<?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
                </td>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </tr>

            <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php
}
if ($_smarty_tpl->tpl_vars['thread']->do_else) {
?>
            <tr class="ty-table__no-items">
                <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!--threads_table--></table>


    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!--threads_container--></div>

<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("vendor_communication.messages");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/threads.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/threads.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
if ($_smarty_tpl->tpl_vars['search']->value['sort_order'] == "asc") {?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir",'assign'=>'sort_sign'),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_subject_image_column', false);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0, true);
?>
    <?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null) || $_smarty_tpl->tpl_vars['thread']->value['object_type'] === (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('show_subject_image_column', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div id="threads_container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <table class="ty-table ty-vendor-communication-search" id="threads_table">
        <thead>
        <tr>
            <th width="3%" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
            <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                <th width="7%">&nbsp;</th>
            <?php }?>
            <th width="12%" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="40%"><?php echo $_smarty_tpl->__("message");?>
</th>
            <th width="21%"><?php echo $_smarty_tpl->__("vendor_communication.subject");?>
</th>
            <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('has_new_message', $_smarty_tpl->tpl_vars['auth']->value['user_id'] != $_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] && $_smarty_tpl->tpl_vars['thread']->value['user_status'] == (defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null));?>

            <tr>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label"></span>
                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                    <td class="ty-vendor-communication-search__item ty-nowrap">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                    </td>
                <?php }?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                    <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                            <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                        <?php }?>
                        <strong><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</strong>
                    </a>
                </td>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                    <a class="clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>"
                        href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id'] == $_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type'] === smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("customer");?>
:
                            <?php }?>
                        </strong>
                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],300,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td class="ty-vendor-communication-search__item">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0, true);
?>
                </td>
                <td class="ty-vendor-communication-search__item ty-nowrap">
                    <a class="<?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
                </td>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </tr>

            <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php
}
if ($_smarty_tpl->tpl_vars['thread']->do_else) {
?>
            <tr class="ty-table__no-items">
                <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!--threads_table--></table>


    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!--threads_container--></div>

<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("vendor_communication.messages");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php }
}
}
