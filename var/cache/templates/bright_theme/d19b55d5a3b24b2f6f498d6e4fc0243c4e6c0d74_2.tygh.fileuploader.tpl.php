<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:48
  from 'C:\laragon\www\cscart\design\themes\responsive\templates\common\fileuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f551cb9e573_57560748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19b55d5a3b24b2f6f498d6e4fc0243c4e6c0d74' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\responsive\\templates\\common\\fileuploader.tpl',
      1 => 1663685389,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/update_cart.tpl' => 2,
  ),
),false)) {
function content_640f551cb9e573_57560748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','save','upload_another_file','upload_file','or','specify_url','file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','save','upload_another_file','upload_file','or','specify_url'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable1);?>

<div class="ty-fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'image_id');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_id']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <div class="ty-fileuploader__file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['location'] == "cart") {?>
                        <?php $_smarty_tpl->_assignInScope('delete_link', "checkout.delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart");?>
                        <?php $_smarty_tpl->_assignInScope('download_link', "checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value));?>
                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" /></a><br />
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploaded_files"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?>
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required'] == "Y" && smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) == 1)) {
ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value != 'Y') {
echo "Tygh.fileuploader.toggle_links('";
echo (string)$_smarty_tpl->tpl_vars['id_var_name']->value;
echo "', 'show');";
}
$_prefixVariable2=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."_".((string)$_smarty_tpl->tpl_vars['image']->value['file']),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable2." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="ty-fileuploader__filename ty-filename-link upload-filename"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </p>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploader"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value != 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable3=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable3." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename"></span>
                <?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>
                    <br />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0, false);
?>
                <?php }?>
            </p>
        </div>

        <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value != "Y" && $_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local"><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><!--fileuploader-->
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable4);?>

<div class="ty-fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'image_id');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_id']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <div class="ty-fileuploader__file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['location'] == "cart") {?>
                        <?php $_smarty_tpl->_assignInScope('delete_link', "checkout.delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart");?>
                        <?php $_smarty_tpl->_assignInScope('download_link', "checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value));?>
                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" /></a><br />
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploaded_files"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?>
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required'] == "Y" && smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) == 1)) {
ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value != 'Y') {
echo "Tygh.fileuploader.toggle_links('";
echo (string)$_smarty_tpl->tpl_vars['id_var_name']->value;
echo "', 'show');";
}
$_prefixVariable5=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."_".((string)$_smarty_tpl->tpl_vars['image']->value['file']),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable5." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="ty-fileuploader__filename ty-filename-link upload-filename"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </p>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploader"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value != 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable6=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable6." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');")),$_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename"></span>
                <?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>
                    <br />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0, true);
?>
                <?php }?>
            </p>
        </div>

        <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value != "Y" && $_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local"><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value == 'cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><!--fileuploader-->
<?php }
}
}
