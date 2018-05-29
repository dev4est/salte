<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:48:11
  from '/Users/user/Documents/project/salte/design/s-alte/html/community.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b08141ba02d97_35233121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41d57028f83f89c7e35bb6929394628d709d6f0' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/community.tpl',
      1 => 1527256089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:community/nav_bar.tpl' => 1,
    'file:community/topics.tpl' => 1,
  ),
),false)) {
function content_5b08141ba02d97_35233121 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['community']->value->name;?>
</h2>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a href="/community/edit/1">Редагувати</a></li>
                <li>|</li><li><a href="community/create/1">Створити спільноту</a></li>
            </ul>
        </div>

        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
    <div class="panel-body">
    <?php echo $_smarty_tpl->tpl_vars['community']->value->body;?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:community/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="tabbable">
    <div class="tab-content">
        <div class="tab-pane fade active in" id="topic">
            <?php $_smarty_tpl->_subTemplateRender('file:community/topics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topics'=>$_smarty_tpl->tpl_vars['topics']->value), 0, false);
?>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-body">
                            <div class="media" style="min-height: 50px;">
                                <div class="media-left">
                                    <a href="#" data-popup="lightbox">
                                        <?php if ($_smarty_tpl->tpl_vars['u']->value->image) {?>
                                            <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->image;?>
" class="img-circle img-lg" alt="">
                                        <?php } else { ?>
                                            <img src="design/s-alte/assets/images/placeholder.jpg" class="img-circle img-lg" alt="">
                                        <?php }?>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <h6 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
</h6>
                                    <span class="text-muted">Учасник</span>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><i class="icon-menu9"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-comment-discussion pull-right"></i>
                                                        Написати</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="tab-pane fade" id="messages">

            <div class="panel panel-flat addTopic">
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
