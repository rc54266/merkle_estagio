<?php
/* Smarty version 4.1.0, created on 2023-03-13 19:53:57
  from 'C:\laragon\www\cscart\design\themes\bright_theme\templates\addons\incidents\views\incident\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640f55255cd388_43172897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b390ebc223f96035de84f5f2a57add2f93f93f57' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\themes\\bright_theme\\templates\\addons\\incidents\\views\\incident\\view.tpl',
      1 => 1676303635,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f55255cd388_43172897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/incidents/style.less"),$_smarty_tpl);?>

<head>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <div class="table-responsive margin-bottom-2x">
                    <table class="table margin-bottom-none">
                        <thead>
                            <tr>
                                <th>Incident</th>
                                <th>Title</th>
                                <th>Date Submitted</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Id: # <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                        <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'incident_id') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </td>
                                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'subject') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </td>
                                <td><span class="text-primary"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                            <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'created') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></td>
                                <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] == 1) {?>
                                    <td><span class="text-primary">Open</span></td>
                                <?php } else { ?>
                                    <td><span class="text-warning">Close</span></td>
                                <?php }?>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4> Incident: </h4>
                <div class="comment">

                    <div class="comment-body">
                        <p class="comment-text"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'content') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </p>
                        <div class="comment-footer"></div>
                    </div>
                </div>
                <h4> Comments: </h4>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_answer']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] == $_smarty_tpl->tpl_vars['value']->value['user_id']) {?>
                        <div class="comment1">
                            <div class="comment-author-ava">Me:</div>
                            <div class="comment-body1">
                            <?php } else { ?>
                                <div class="comment">
                                    <div class="comment-author-ava">Operator:</div>
                                    <div class="comment-body">
                                    <?php }?>
                                    <p class="comment-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</p>
                                    <div class="comment-footer"><span class="comment-meta"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['update_time'], ENT_QUOTES, 'UTF-8');?>
</span></div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] != 2) {?>
                            <h5 class="mb-30 padding-top-1x">Leave Comment</h5>
                            <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="answer_incident">
                                <input type="hidden" name="dispatch" value="incident.view" />
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'incident_id') {?><input type="hidden" name="incident_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="form-group">
                                    <textarea class="form-control form-control-rounded" id="review_text" name="comment"
                                        rows="8" placeholder="Write your comment here..." required=""></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-outline-primary" type="submit">Answer</button>
                                </div>
                                <div class="text-left">
                                    <input type="button" value="Go back!" onclick="history.back()">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php }?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/incidents/views/incident/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/incidents/views/incident/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/incidents/style.less"),$_smarty_tpl);?>

<head>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <div class="table-responsive margin-bottom-2x">
                    <table class="table margin-bottom-none">
                        <thead>
                            <tr>
                                <th>Incident</th>
                                <th>Title</th>
                                <th>Date Submitted</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Id: # <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                        <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'incident_id') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </td>
                                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'subject') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </td>
                                <td><span class="text-primary"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                            <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'created') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></td>
                                <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] == 1) {?>
                                    <td><span class="text-primary">Open</span></td>
                                <?php } else { ?>
                                    <td><span class="text-warning">Close</span></td>
                                <?php }?>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4> Incident: </h4>
                <div class="comment">

                    <div class="comment-body">
                        <p class="comment-text"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'content') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </p>
                        <div class="comment-footer"></div>
                    </div>
                </div>
                <h4> Comments: </h4>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_answer']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] == $_smarty_tpl->tpl_vars['value']->value['user_id']) {?>
                        <div class="comment1">
                            <div class="comment-author-ava">Me:</div>
                            <div class="comment-body1">
                            <?php } else { ?>
                                <div class="comment">
                                    <div class="comment-author-ava">Operator:</div>
                                    <div class="comment-body">
                                    <?php }?>
                                    <p class="comment-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</p>
                                    <div class="comment-footer"><span class="comment-meta"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['update_time'], ENT_QUOTES, 'UTF-8');?>
</span></div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] != 2) {?>
                            <h5 class="mb-30 padding-top-1x">Leave Comment</h5>
                            <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="answer_incident">
                                <input type="hidden" name="dispatch" value="incident.view" />
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'incident_id') {?><input type="hidden" name="incident_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="form-group">
                                    <textarea class="form-control form-control-rounded" id="review_text" name="comment"
                                        rows="8" placeholder="Write your comment here..." required=""></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-outline-primary" type="submit">Answer</button>
                                </div>
                                <div class="text-left">
                                    <input type="button" value="Go back!" onclick="history.back()">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php }?>
</div><?php }
}
}
