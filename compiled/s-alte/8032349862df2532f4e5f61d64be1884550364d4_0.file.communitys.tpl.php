<?php
/* Smarty version 3.1.32, created on 2018-04-29 18:44:37
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/communitys.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae5e8653c9051_87304290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8032349862df2532f4e5f61d64be1884550364d4' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/communitys.tpl',
      1 => 1525016106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile/nav_bar.tpl' => 1,
    'file:pagination.tpl' => 2,
  ),
),false)) {
function content_5ae5e8653c9051_87304290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('nav_bar', 3);
$_smarty_tpl->_subTemplateRender("file:profile/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <!--Каталог товаров-->
    <?php if ($_smarty_tpl->tpl_vars['communitys']->value) {?>

                

        <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!-- Список товаров-->


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['communitys']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="col-lg-12">
                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                    <div class="panel-body">
                        <div class="col-lg-2">
                            <div class="thumb" style="width: 100%;">
                                <!-- Фото товара -->
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
                                    <a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="files/community/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
                                <?php } else { ?>
                                    <a href="/community/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" data-toggle="modal"> <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/profilethumb.png" class="img-responsive img-rounded" alt="">
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="blog-preview">
                                <div class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                    <div class="media-body">
                                        <h5 class="text-semibold no-margin">
                                            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="text-default"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</strong></a></h5>
                                    </div>


                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>

                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline list-inline-separate heading-text">
                                <!---<li><i class="icon-users position-left"></i> 11</li>--->
                            </ul>

                            <a href="/community/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="heading-text pull-right">Детальніше <i class="icon-arrow-right14 position-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Товар (The End)-->
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!-- Список товаров (The End)-->

    <?php } else { ?>
        Товары не найдены
    <?php }?>
    <!--Каталог товаров (The End)-->
</div><?php }
}
