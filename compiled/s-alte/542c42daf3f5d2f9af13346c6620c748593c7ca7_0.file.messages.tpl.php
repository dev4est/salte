<?php
/* Smarty version 3.1.32, created on 2018-05-23 19:35:30
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b059852bd65f1_25253505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '542c42daf3f5d2f9af13346c6620c748593c7ca7' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/messages.tpl',
      1 => 1527093326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile/nav_bar.tpl' => 1,
  ),
),false)) {
function content_5b059852bd65f1_25253505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Documents/project/salte/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('nav_bar', 4);
$_smarty_tpl->_subTemplateRender("file:profile/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-bubbles3 position-left"></i> Всі повідомлення<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
        <div class="heading-elements">
            <ul class="icons-list">
               <li><a href="/messages/create" title="Створити повідомлення"><i class="icon-pencil"></i> </a></li>
                            </ul>
        </div>
    </div>

    <ul class="media-list media-list-linked">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
        <li class="media" style="border-top: 1px solid #ccc;">

            <a href="/profile/messages/<?php echo $_smarty_tpl->tpl_vars['m']->value->subject_id;?>
" class="media-link">
                <div class="media-left">

                   <?php if ($_smarty_tpl->tpl_vars['m']->value->countmessage > 0) {?><span class="badge bg-danger-400 media-badge"><?php echo $_smarty_tpl->tpl_vars['m']->value->countmessage;?>
</span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['m']->value->image) {?>
                        <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg" class="img-sm img-circle" alt="">
                    <?php } else { ?>
                    <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg" class="img-sm img-circle" alt="">
                    <?php }?>
                </div>
                <div class="media-body">
                    <div class="media-heading"><span class="text-semibold"></span><span><?php echo $_smarty_tpl->tpl_vars['m']->value->title;?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->name_community) {?><span class="label label-success label-roundless pull-right"><?php echo $_smarty_tpl->tpl_vars['m']->value->name_community;?>
</span> <br /><?php }?>

                        <span class="media-annotation pull-right" style="margin-top: 8px"><?php echo $_smarty_tpl->tpl_vars['m']->value->date;?>
</span>
                    </div>
                    <span class="label border-left-success label-striped"><?php echo $_smarty_tpl->tpl_vars['m']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['m']->value->surname;?>
: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['m']->value->text,100);?>
</span>
                    <!--<span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['m']->value->username;?>
: <?php echo $_smarty_tpl->tpl_vars['m']->value->text;?>
</span>-->


                </div>

            </a>

        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
