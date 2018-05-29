<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:44:58
  from '/Users/user/Documents/project/salte/design/s-alte/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b08135a63d596_31785969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8202a0ccb385a950be2da6042ffc6447afeccc' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/index.tpl',
      1 => 1527255897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b08135a63d596_31785969 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;
echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>

        <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/a8d7da/css/bootstrap.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/css/site.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/css/core.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/css/icons/icomoon/styles.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/css/components.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/css/colors.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/e5eea13b/jquery.js"><?php echo '</script'; ?>
>
    <style></style>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/67cf9a9b/yii.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/core/libraries/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/core/libraries/jquery_ui/widgets.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/core/libraries/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/loaders/blockui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/visualization/d3/d3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/uploaders/dropzone.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/forms/selects/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/forms/styling/uniform.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/forms/styling/switchery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/core/app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/pages/general_widgets_content.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/pages/uploader_dropzone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/forms/tags/tagsinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"><?php echo '</script'; ?>
>

    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    

        <?php if ($_SESSION['admin'] == 'admin') {?>
            <?php }?>

        <?php echo '<script'; ?>
 type="text/javascript" src="js/ctrlnavigate.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="js/baloon/js/baloon.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css"/>
</head>
<body class="layout-boxed navbar-bottom  pace-done">
<!-- Main navbar -->

<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">


            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
                </li>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id == 1) {?>
                        <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['page']->value->id == $_smarty_tpl->tpl_vars['p']->value->id) {?>active<?php }?>">
                            <a class="nav-link" data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
">
                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                        </li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>


            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a href="/messages">
                        <i class="icon-bubbles4"></i>
                        <span class="visible-xs-inline-block position-right">Messages</span>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Messages
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-compose"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            <li class="media">
                                <div class="media-left">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->image) {?>
                                    <?php } else { ?>
                                    <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    <?php }?>
                                    <span class="badge bg-danger-400 media-badge">5</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">James Alexander</span>
                                        <span class="media-annotation pull-right">04:58</span>
                                    </a>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>


                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="" data-original-title="All messages"><i
                                        class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->image) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" class="img-circle img-sm" alt="">
                            <?php } else { ?>
                                <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                            <?php }?>

                            <span> <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <!--<li><a href="#"><i class="icon-user-plus"></i>Профіль</a></li>

                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Повідомлення</a></li>-->
                            <li><a href="/"><i class="icon-cog5"></i>Налаштування</a></li>
                            <li class="divider"></li>

                            <li class="list-bt"><a href="user/logout">
                                    <i class="icon-switch2"></i> Вихід
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php } else { ?>
                    <li><a class="nav-link" id="register" href="user/register">Регистрация</a></li>
                    <li><a class="nav-link" id="login" href="user/login">Вход</a></li>
                <?php }?>

                <li class="right odd">

                    <!--   <a class="dropdown-toggle right" >

                           <span class="head-icon head-users"></span>
                           <span class="headmenu-label">Вихід</span>
                       </a>-->

                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->
<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-wide"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
        <div class="breadcrumb-boxed">

            <ul class="breadcrumb"><li><a href="/">Головна</a></li>
                <?php if ($_smarty_tpl->tpl_vars['page']->value->name) {?>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</li>
                <?php } else { ?>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
</li>
                <?php }?>

            </ul>
        </div>
    </div>


</div>

<!-- Page container -->
<div class="page-container" style="min-height:348px">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default">
            <div class="thumbnail">
                <div class="category-title logo">
                    <a href="/"><img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.png"
                                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"
                                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" width="150"/></a>
                </div><!---->


                <!--   <div class="caption text-center">
                                                     <h6 class="text-semibold no-margin">Олег                                    <small class="display-block">Учасник</small></h6>
                       <ul class="icons-list mt-15">
                            <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                            <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                            <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>-->
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['left_bar']->value) {?>
                <?php $_smarty_tpl->_assignInScope('left_bar', 'left_bar.tpl');?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['left_bar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    <!-- /main navigation -->
        </div>
        <!-- /main sidebar -->



                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>



        <!--<div class="pages-default-index">
            <h1>pages/page/index</h1>
            <p>
                This is the view content for action "index".
                The action belongs to the controller "frontend\modules\pages\controllers\PageController"
                in the "pages" module.
            </p>
            <p>
                You may customize this page by editing the following file:<br>
                <code>/var/www/s-alte.com.ua/frontend/modules/pages/views/page/index.php</code>
            </p>
        </div>-->
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">© My Company 2018</p>
    </div>
</footer>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_logs'][0], array( array(),$_smarty_tpl ) );?>


</body>



<?php }
}
