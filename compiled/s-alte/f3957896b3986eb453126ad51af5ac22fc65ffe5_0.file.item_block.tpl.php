<?php
/* Smarty version 3.1.32, created on 2018-05-10 20:01:31
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/item_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af47aeb959683_70071528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3957896b3986eb453126ad51af5ac22fc65ffe5' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/item_block.tpl',
      1 => 1525971689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af47aeb959683_70071528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Documents/project/salte/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-bubbles3 position-left"></i> Всі переписки<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>

    </div>

    <ul class="media-list media-list-linked chat-stacked messages-item">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
        <li class="media block_item">
            <a href="/profile/messages/<?php echo $_smarty_tpl->tpl_vars['i']->value->subject_id;?>
" class="media-link <?php if ($_smarty_tpl->tpl_vars['i']->value->subject_id == $_smarty_tpl->tpl_vars['subject']->value->id) {?>active<?php }?>">
                <div class="media-left">
                <?php if ($_smarty_tpl->tpl_vars['i']->value->countmessage > 0) {?><span class="badge bg-danger-400 media-badge"><?php echo $_smarty_tpl->tpl_vars['i']->value->countmessage;?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value->image && ($_smarty_tpl->tpl_vars['i']->value->community_id > 0)) {?>
                    <img src="files/community/<?php echo $_smarty_tpl->tpl_vars['i']->value->image;?>
" class="img-sm img-circle" alt="">
                <?php } elseif ($_smarty_tpl->tpl_vars['i']->value->image) {?>
                    <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['i']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->image;?>
" class="img-sm img-circle" alt="">
                <?php } else { ?>
                    <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg" class="img-sm img-circle" alt="">
                <?php }?>
                </div>
                <div class="media-body">
                    <div class="media-heading"><span class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
</span>  </div>
                    <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['i']->value->surname;?>
 <?php echo mb_substr($_smarty_tpl->tpl_vars['m']->value->username,0,1);?>
.: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value->text,100);?>
</span>
                </div>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php echo '<script'; ?>
>
    var block_item = parseInt($(".messages-item .active").offset().top);
    var block_messages_item = parseInt($(".messages-item")[0].scrollHeight) + 100;
    //console.log(block_h);
    $(".messages-item").scrollTop(block_item-300);
<?php echo '</script'; ?>
><?php }
}
