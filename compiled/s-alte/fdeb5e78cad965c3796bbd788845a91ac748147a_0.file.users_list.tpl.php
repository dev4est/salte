<?php
/* Smarty version 3.1.32, created on 2018-05-23 13:17:42
  from '/Users/user/Documents/project/salte/design/s-alte/html/topic/users_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b053fc6c8a758_77349633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdeb5e78cad965c3796bbd788845a91ac748147a' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/topic/users_list.tpl',
      1 => 1527070661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b053fc6c8a758_77349633 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-users position-left"></i> Учасники обговорення<a
                    class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
    </div>

    <div class="panel-body">
        <ul class="media-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_topic']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['u']->value->surname) {?>
            <li class="media">
                <div class="media-left">
                    <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['u']->value->user_id;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['u']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->image;?>
" class="img-sm img-circle" alt="">
                    </a>
                </div>

                <div class="media-body media-middle text-semibold">
                    <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['u']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
</a>
                    <div class="media-annotation"></div>
                </div>

                <div class="media-right media-middle">
                    <ul class="icons-list text-nowrap">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-more2"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="/chat/new/<?php echo $_smarty_tpl->tpl_vars['u']->value->user_id;?>
"><i class="icon-comment-discussion pull-right"></i>Написати</a></li>
                                <!--<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
                                <li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a>
                                </li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div><?php }
}
