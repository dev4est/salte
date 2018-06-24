<?php
/* Smarty version 3.1.32, created on 2018-06-13 17:04:49
  from '/Users/user/Documents/project/salte/design/s-alte/html/community.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b21248169c4a0_73724165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41d57028f83f89c7e35bb6929394628d709d6f0' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/community.tpl',
      1 => 1528898686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:community/nav_bar.tpl' => 1,
    'file:community/topics.tpl' => 1,
    'file:community/add_buttom.tpl' => 1,
  ),
),false)) {
function content_5b21248169c4a0_73724165 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-8">
    <div class="row">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['community']->value->name;?>
</h2>
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
                        <?php if ($_smarty_tpl->tpl_vars['user_filters']->value) {?>
                        <div class="col-lg-12 col-md-12">
                            <div class="navbar navbar-default navbar-xs navbar-component">
                                <ul class="nav navbar-nav no-border visible-xs-block">
                                    <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
                                </ul>

                                <div class="navbar-collapse collapse" id="navbar-filter">
                                    <p class="navbar-text">Панель адміністратора:</p>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <?php if ($_smarty_tpl->tpl_vars['user_filters']->value->visible === 0) {?>
                                                    <i class="status-mark border-blue position-left" style="position:initial"></i> Нові
                                                <?php } elseif ($_smarty_tpl->tpl_vars['user_filters']->value->visible === 2) {?>
                                                    <span class="status-mark border-danger position-left" style="position:initial"></span> Заблоковані
                                                <?php } elseif ($_smarty_tpl->tpl_vars['user_filters']->value->visible === 1) {?>
                                                    <i class="status-mark border-success position-left" style="position:initial"></i> Активні
                                                <?php }?>
                                                <span class="caret"></span></a>
                                            <ul class="dropdown-menu">

                                                <li class="divider"></li>
                                                <li><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users/new"><span class="status-mark border-blue position-left"></span> Нові</a></li>
                                                <li><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users/delete"><span class="status-mark border-danger position-left"></span> Заблоковані</a></li>
                                                <li><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users"><span class="status-mark border-success position-left"></span> Активні</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                            <div class="col-lg-12 col-md-12" id="user-<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
                                <div class="panel panel-body">
                                    <div class="media" style="min-height: 50px;">
                                        <div class="media-left">
                                            <a href="#" data-popup="lightbox">
                                                <?php if ($_smarty_tpl->tpl_vars['u']->value->image) {?>
                                                    <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->image;?>
"
                                                         class="img-circle img-lg" alt="">
                                                <?php } else { ?>
                                                    <img src="design/s-alte/assets/images/placeholder.jpg"
                                                         class="img-circle img-lg" alt="">
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
                                                        <li><a href="#"><i
                                                                        class="icon-comment-discussion pull-right"></i>
                                                                Написати</a></li>
                                                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rule' ][ 0 ], array( $_smarty_tpl->tpl_vars['community']->value->rules,'user_enter' )) && $_smarty_tpl->tpl_vars['user_filters']->value->visible !== 0) {?>
                                                        <li class="divider"></li>

                                                        <li><a href="#" class="updateUser" data-session_id="<?php echo $_SESSION['id'];?>
" data-user_id="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" data-community_id="<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
">Підтвердити<i
                                                                        class="icon-checkmark3 pull-right"></i></a></li>
                                                        <?php }?>
                                                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rule' ][ 0 ], array( $_smarty_tpl->tpl_vars['community']->value->rules,'user_delete' )) && $_smarty_tpl->tpl_vars['user_filters']->value->visible !== 2) {?>
                                                        <li><a href="#" class="blockUser" data-session_id="<?php echo $_SESSION['id'];?>
" data-user_id="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" data-community_id="<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
">Блокувати<i
                                                                        class="icon-user-block pull-right"></i></a></li>
                                                        <?php }?>
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
        </div>
    </div>
</div>
<div class="col-lg-4">
        <!-- User thumbnail -->
        <div class="thumbnail">
            <div class="thumb thumb-rounded thumb-slide">
                <?php if ($_smarty_tpl->tpl_vars['community']->value->image) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->community_dir;?>
/<?php echo $_smarty_tpl->tpl_vars['community']->value->image;?>
" alt="">
                <?php } else { ?>
                    <img src="design/s-alte/assets/images/profilethumb.png" alt="">
                <?php }?>
            </div>

            <div class="caption text-center">
                <h6 class="text-semibold no-margin"><?php echo $_smarty_tpl->tpl_vars['community']->value->name;?>

                    <small class="display-block">Cпільнота</small>
                </h6>
                <div class="panel-body" id="adduser-btm">
                    <?php $_smarty_tpl->_subTemplateRender("file:community/add_buttom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
        <!-- /user thumbnail -->
    <div class="panel panel-flat">
        <div class="list-group no-border">
            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users" class="list-group-item"><i class="icon-user"></i> Учасники</a>
            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/messages" class="list-group-item"><i class="icon-bubbles3"></i> Повідомлення</a>
                       <div class="list-group-divider"></div>
            <a href="community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/events" class="list-group-item"><i class="icon-calendar3"></i> Події <span class="badge bg-teal-400 pull-right">48</span></a>
        </div>
    </div>

    <div class="panel panel-flat">
        <h4 style="margin:20px 20px 0; ">Панель адміністратора</h4>
        <div class="list-group no-border">
            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users/new" class="list-group-item"><i class="icon-user"></i> Нові Учасники</a>
            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/messages" class="list-group-item"><i class="icon-bubbles3"></i> Створити Повідомлення</a>
            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/messages" class="list-group-item"><i class="icon-bubbles3"></i> Створити тему обговорення</a>
                        <div class="list-group-divider"></div>
            <a href="community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/events" class="list-group-item"><i class="icon-calendar3"></i> Нові Події <span class="badge bg-teal-400 pull-right">48</span></a>
            <a href="community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/" class="list-group-item"><i class="icon-cog3"></i> Налаштування</a>
        </div>
    </div>

</div>

<!-- /user profile -->


    <?php echo '<script'; ?>
>
        $(".updateUser").click(function () {
            var community_id = $(this).data('community_id');
            var user_id = $(this).data('user_id');
            var session_id = $(this).data('session_id');
            $.ajax({
                url: "/community/updateuser",
                data: {community_id:community_id, user_id:user_id, session_id:session_id, visible:1},
                dataType: 'json',
                method:'post',
                success: function(data){
                    $("#user-"+user_id).remove();
                }
            });
            return false;
        });
        $(".blockUser").click(function () {
            var community_id = $(this).data('community_id');
            var user_id = $(this).data('user_id');
            var session_id = $(this).data('session_id');
            $.ajax({
                url: "/community/updateuser",
                data: {community_id:community_id, user_id:user_id, session_id:session_id, visible:2},
                dataType: 'json',
                method:'post',
                success: function(data){
                    $("#user-"+user_id).remove();
                }
            });
            return false;
        });
    <?php echo '</script'; ?>
>
<?php }
}
