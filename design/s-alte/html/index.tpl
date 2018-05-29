<!DOCTYPE html>
{*
	Общий вид страницы
	Этот шаблон отвечает за общий вид страниц без центрального блока.
*}
<html>
<head>
    <base href="{$config->root_url}/"/>
    <title>{$meta_title|escape}</title>

    {* Метатеги *}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="{$meta_description|escape}"/>
    <meta name="keywords" content="{$meta_keywords|escape}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {* Канонический адрес страницы *}
    {if isset($canonical)}
        <link rel="canonical" href="{$config->root_url}{$canonical}"/>{/if}

    {* Стили *}
    <link href="design/{$settings->theme|escape}/assets/a8d7da/css/bootstrap.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/assets/css/site.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/assets/css/core.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/assets/css/icons/icomoon/styles.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/assets/css/components.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/assets/css/colors.css" rel="stylesheet">
    <script src="design/{$settings->theme|escape}/assets/e5eea13b/jquery.js"></script>
    <style></style>
    <script src="design/{$settings->theme|escape}/assets/67cf9a9b/yii.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/core/libraries/jquery.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/core/libraries/jquery_ui/widgets.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/core/libraries/bootstrap.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/uploaders/dropzone.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/core/app.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/pages/general_widgets_content.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/pages/uploader_dropzone.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/forms/tags/tagsinput.min.js"></script>
    <script src="design/{$settings->theme|escape}/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>

    <link href="design/{$settings->theme|escape}/images/favicon.ico" rel="icon" type="image/x-icon"/>
    <link href="design/{$settings->theme|escape}/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    {* JQuery *}


    {* Всплывающие подсказки для администратора *}
    {if $smarty.session.admin == 'admin'}
        {*  <script src="js/admintooltip/admintooltip.js" type="text/javascript"></script>
         <link href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css"/>*}
    {/if}

    {* Ctrl-навигация на соседние товары *}
    <script type="text/javascript" src="js/ctrlnavigate.js"></script>

    {* js-проверка форм *}
    <script src="js/baloon/js/baloon.js" type="text/javascript"></script>
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

                {foreach $pages as $p}
                    {* Выводим только страницы из первого меню *}
                    {if $p->menu_id == 1}
                        <li class="nav-item {if $page && $page->id == $p->id}active{/if}">
                            <a class="nav-link" data-page="{$p->id}" href="{$p->url}">
                               <span>{$p->name|escape}</span></a>
                        </li>
                    {/if}
                {/foreach}
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
                                    {if $user->image}
                                    {else}
                                    <img src="design/{$settings->theme|escape}/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    {/if}
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
                {if $user}
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            {if $user->image}
                                <img src="{$config->profile_users_images_dir}{$user->id}/{$user->image}" class="img-circle img-sm" alt="">
                            {else}
                                <img src="design/{$settings->theme|escape}/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                            {/if}

                            <span> {$user->name}</span>
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

                {else}
                    <li><a class="nav-link" id="register" href="user/register">Регистрация</a></li>
                    <li><a class="nav-link" id="login" href="user/login">Вход</a></li>
                {/if}

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
                {if $page->name}
                    <li class="active">{$page->name}</li>
                {else}
                    <li class="active">{$page_name}</li>
                {/if}

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
                    <a href="/"><img src="design/{$settings->theme|escape}/images/logo.png"
                                     title="{$settings->site_name|escape}"
                                     alt="{$settings->site_name|escape}" width="150"/></a>
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
            {if !$left_bar}
                {$left_bar='left_bar.tpl'}
            {/if}
            {include file=$left_bar}

                    <!-- /main navigation -->
        </div>
        <!-- /main sidebar -->



                {$content}


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

    {get_logs}

</body>



