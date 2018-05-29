<?php
/* Smarty version 3.1.32, created on 2018-05-10 15:05:30
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af4358aa9e820_33836424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b285781464d6ec05bf212bac5156b15101ca9e6b' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/message.tpl',
      1 => 1525953913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4358aa9e820_33836424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('left_bar', "messages/item_block.tpl" ,false ,2);?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">Line content divider<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <ul class="media-list chat-stacked content-group">

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
            <li class="media">
                <div class="media-left"><img src="assets/images/demo/users/face10.jpg" class="img-circle img-md" alt=""></div>
                <div class="media-body">
                    <div class="media-heading">
                        <a href="#" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['m']->value->author;?>
</a>
                        <span class="media-annotation pull-right"><?php echo $_smarty_tpl->tpl_vars['m']->value->create_data;?>
 <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                    </div>
                     <?php echo $_smarty_tpl->tpl_vars['m']->value->text;?>

                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="media">
                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                <div class="media-body media-middle">
                    <i class="icon-menu"></i>
                </div>
            </li>
        </ul>

        <textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

        <div class="row">
            <div class="col-xs-6">
                <ul class="icons-list icons-list-extended mt-10">
                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
                </ul>
            </div>

            <div class="col-xs-6 text-right">
                <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
            </div>
        </div>
    </div>
</div><?php }
}
