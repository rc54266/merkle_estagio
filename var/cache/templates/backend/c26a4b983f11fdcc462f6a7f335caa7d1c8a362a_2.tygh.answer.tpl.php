<?php
/* Smarty version 4.1.0, created on 2023-03-27 12:18:45
  from 'C:\laragon\www\cscart\design\backend\templates\addons\incidents\views\incident\answer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64215f755fb1f3_56501445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c26a4b983f11fdcc462f6a7f335caa7d1c8a362a' => 
    array (
      0 => 'C:\\laragon\\www\\cscart\\design\\backend\\templates\\addons\\incidents\\views\\incident\\answer.tpl',
      1 => 1679908722,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64215f755fb1f3_56501445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/incidents/style.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['incident_details']->value['operator_id'] != null&$_smarty_tpl->tpl_vars['auth']->value['user_id'] == 1) {?>
    <form method="post" action="<?php echo htmlspecialchars(fn_url("incident.unsign"), ENT_QUOTES, 'UTF-8');?>
" name="unsign">
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
        <div class="buttons-container">
            <input type="submit" value="Unsign">
        </div>
    </form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] == 1) {?>
    <form method="post" action="<?php echo htmlspecialchars(fn_url("incident.delete"), ENT_QUOTES, 'UTF-8');?>
" name="delete">
        <input type="hidden" name="incident_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['incident_details']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <div class="buttons-container">
            <input type="submit" onclick="return confirm('Are you sure?')" value="Delete">
        </div>
    </form>
<?php }?>



<form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="operators">
    <select name="operators" id="oper">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operators']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['operators']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</form>





<?php if ($_smarty_tpl->tpl_vars['incident_details']->value['operator_id'] == null) {?>
    <form method="post" action="<?php echo htmlspecialchars(fn_url("incident.asign"), ENT_QUOTES, 'UTF-8');?>
" name="asign">
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
        <div class="buttons-container">
            <input type="submit" value="Asign">
        </div>
    </form>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['incident_details']->value['operator_id'] != null) {?>

    <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] == 1) {?>
        <?php $_smarty_tpl->_assignInScope('is_open', "close");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['incident_details']->value['status_id'] == 2) {?>
        <?php $_smarty_tpl->_assignInScope('is_open', "open");?>
    <?php }?>

    <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_open']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="dispatch" value="incident.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_open']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="incident_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['incident_details']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <div class="buttons-container">
            <input type="submit" value="<?php echo htmlspecialchars(ucfirst($_smarty_tpl->tpl_vars['is_open']->value), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </form>

<?php }?>

<h1 class="ty-mainbox-title ty-vendor-communication-post__title">
    Incident # <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['incident_details']->value['incident_id'], ENT_QUOTES, 'UTF-8');?>

</h1>

<div class="container">
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Created by:</label>
        </div>
        <div class="col-8">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_firstname']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'firstname') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Created at:</label>
        </div>
        <div class="col-8">
            <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Subject:</label>
        </div>
        <div class="col-8">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incident_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <strong><?php if ($_smarty_tpl->tpl_vars['key']->value == 'subject') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?></strong>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="content">Message:</label>
        </div>
        <div class="col-8">
            <?php
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
        </div>
    </div>
    <br>
    <br>

    <div class="row-fluid ">
        <div class="col-4 ">
            <label for="subject">Comments:</label>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_answer']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] == $_smarty_tpl->tpl_vars['value']->value['user_id']) {?>
                <div class="col-8 position_right">
                <?php } else { ?>
                    <div class="col-8">
                    <?php }?>
                    <label for="firstname"><strong> Name: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</strong> || Time: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['update_time'], ENT_QUOTES, 'UTF-8');?>

                    </label>
                    <label for="comment">Message: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment'], ENT_QUOTES, 'UTF-8');?>
 </label>
                    <br>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>



        <?php if ($_smarty_tpl->tpl_vars['incident_details']->value['operator_id'] != null) {?>

            <div class="cm-tabs-content">


                <form method="post" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="answer_incident">
                    <input type="hidden" name="dispatch" value="incident.answer" />
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
                    <div id="content_detailed" class="form-horizontal form-edit cm-processed-form cm-check-changes">
                        <h3 class="subheader   hand" data-toggle="collapse" data-target="#acc_information">
                            Answer Incident
                        </h3>
                    </div>
                    <div class="fixed-bottom-wrapper" id="new_message_form_1">
                        <div class="cm-ajax add_message_form cm-processed-form cm-check-changes" name="add_message_form_1">
                            <div id="new_message_1" class="add_message_form--wrapper">
                                <textarea id="thread_message_1" name="comment" class="cm-focus add_message_form--textarea"
                                    rows="5" autofocus="" placeholder="Type a message..."
                                    data-ca-vendor-communication="threadMessage" required></textarea>
                                <div class="buttons-container">
                                    <input class="btn btn btn-primary btn-send cm-post pull-right" type="submit"
                                        value="Answer">
                                </div>
                                <div class="buttons-container">
                                    <input type="button" value="Go back!" onclick="history.back()">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </form>
<?php }
}
}
