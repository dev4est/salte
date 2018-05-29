<?php
/* Smarty version 3.1.32, created on 2018-05-11 16:55:09
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af5a0bdf12b81_66214155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aafceffea0e0e8866ef371b698e562ab7001832' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/item.tpl',
      1 => 1526046722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af5a0bdf12b81_66214155 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
