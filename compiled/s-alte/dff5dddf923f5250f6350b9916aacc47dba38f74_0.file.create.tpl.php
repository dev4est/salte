<?php
/* Smarty version 3.1.32, created on 2018-05-23 19:39:42
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b05994e295825_95047322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff5dddf923f5250f6350b9916aacc47dba38f74' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/create.tpl',
      1 => 1527093574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b05994e295825_95047322 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
    <div class="panel-heading">
        <div class="media-body">
            <h6 class="media-heading">Створити нову переписку</h6>
            <a href="#" class="heading-text"><i class="icon-arrow-left22"></i> Назад</a>
        </div>
        <div class="heading-elements">
            <span class="label bg-success heading-text"> active</span>
        </div>
        <div class="heading-elements">
            <ul class="list-inline list-inline-condensed no-margin">

                <!--<li><span class="btn bg-teal-400 btn-xs">+26</span></li>-->
            </ul>
        </div>
    </div>
    <hr style="margin: 0;">
    <div class="panel-body">
        <ul class="media-list chat-stacked content-group chat">

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                <li class="media">
                    <div class="media-left">
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->image) {?>
                            <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['m']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value->image;?>
" class="img-sm img-circle" alt="">
                        <?php } else { ?>
                            <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg"
                                 class="img-circle img-md" alt="">
                        <?php }?>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['m']->value->author;?>
</a>
                            <span class="media-annotation pull-right"><?php echo $_smarty_tpl->tpl_vars['m']->value->create_data;?>
 <a href="#"><i
                                            class="icon-alarm position-right text-muted"></i></a></span>
                        </div>
                        <?php echo $_smarty_tpl->tpl_vars['m']->value->text;?>

                    </div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
        <form id="messages_form" method="post">
        <textarea name="message" class="form-control content-group" rows="3" cols="1" id="message"
                  placeholder="Enter your message..."></textarea>

            <div class="row">
                <div class="col-xs-6">
                    <ul class="icons-list icons-list-extended mt-10">
                        <li><a href="#" data-popup="tooltip" title="" data-container="body"
                               data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
                        <li><a href="#" data-popup="tooltip" title="" data-container="body"
                               data-original-title="Send video"><i class="icon-file-video"></i></a></li>
                        <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i
                                        class="icon-file-plus"></i></a></li>
                    </ul>
                    <input type="file" id="multiFiles" name="files[]" multiple="multiple"/>
                </div>
                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-info btn-labeled-right">Відправити <b><i
                                    class="icon-circle-right2"></i></b></button>
                </div>
        </form>
    </div>
</div>
</div><?php }
}
