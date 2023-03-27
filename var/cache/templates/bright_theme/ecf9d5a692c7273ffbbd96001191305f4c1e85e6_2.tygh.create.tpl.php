<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:48
  from 'C:\laragon\www\cscart\design\themes\bright_theme\templates\addons\incidents\views\incident\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f551c167a37_70992140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecf9d5a692c7273ffbbd96001191305f4c1e85e6' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\bright_theme\\templates\\addons\\incidents\\views\\incident\\create.tpl',
      1 => 1677584740,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/attach_images.tpl' => 2,
  ),
),false)) {
function content_640f551c167a37_70992140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/incidents/style2.less"),$_smarty_tpl);?>



<h2> Create Ticket </h2>

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="create_incident">
    <input type="hidden" name="dispatch" value="incident.create" />
        <div class="row-fluid">
            <div class="col-4">
                <label for="subject">Title:</label>
            </div>
            <div class="col-8">
                <input type="text" name="subject" placeholder="Title" id="title" required>
            </div>
        </div>

            
    <!--    <div class="row-fluid">
            <div class="col-4">
                <label for="categories">Choose a Category</label>
            </div>
            <div class="col-8">
                <select name="cars" id="cars">
                    <option value="category_id">$category_name</option>
                </select>
            </div>
    </div> -->
        <div class="row-fluid">
            <div class="col-4">
                <label for="content">Message:</label>
            </div>
            <div class="col-8">
                <textarea name="content" placeholder="Enter your incident here..." id="msg" style="height:200px" required></textarea>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-4">
                <label for="upload">Select Image File to Upload:</label>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"product_main",'image_object_type'=>"product",'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
            
            <br>
            <br>
            <input type="submit" value="Create">
        </div>  
        </form>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/incidents/views/incident/create.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/incidents/views/incident/create.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/incidents/style2.less"),$_smarty_tpl);?>



<h2> Create Ticket </h2>

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="create_incident">
    <input type="hidden" name="dispatch" value="incident.create" />
        <div class="row-fluid">
            <div class="col-4">
                <label for="subject">Title:</label>
            </div>
            <div class="col-8">
                <input type="text" name="subject" placeholder="Title" id="title" required>
            </div>
        </div>

            
    <!--    <div class="row-fluid">
            <div class="col-4">
                <label for="categories">Choose a Category</label>
            </div>
            <div class="col-8">
                <select name="cars" id="cars">
                    <option value="category_id">$category_name</option>
                </select>
            </div>
    </div> -->
        <div class="row-fluid">
            <div class="col-4">
                <label for="content">Message:</label>
            </div>
            <div class="col-8">
                <textarea name="content" placeholder="Enter your incident here..." id="msg" style="height:200px" required></textarea>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-4">
                <label for="upload">Select Image File to Upload:</label>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"product_main",'image_object_type'=>"product",'no_detailed'=>true,'hide_titles'=>true), 0, true);
?>
            
            <br>
            <br>
            <input type="submit" value="Create">
        </div>  
        </form>
</div>

<?php }
}
}
