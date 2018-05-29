<?php
/* Smarty version 3.1.32, created on 2018-05-11 09:51:54
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af53d8a911033_20855012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494c77a9be2823ba37057422071eaed8a3823ec0' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/filter.tpl',
      1 => 1526021409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af53d8a911033_20855012 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
<div class="sidebar-category">
    <div class="category-content no-padding">
        <ul class="navigation navigation-alt navigation-accordion no-padding-bottom">
            <li><a href="/profile/messages?new=1" <?php if ($_GET['new']) {?>class="active"<?php }?>><span class="status-mark border-success position-left"></span> Нові <?php if ($_smarty_tpl->tpl_vars['count_new']->value) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['count_new']->value;?>
</span> <?php }?></a></li>
            <li><a href="/profile/messages?old=1" <?php if ($_GET['old']) {?>class="active"<?php }?>><span class="status-mark border-primary position-left"></span> Прочитані</a></li>
            <li><a href="/profile/messages?all=1" <?php if ($_GET['all']) {?>class="active"<?php }?>><span class="status-mark border-primary position-left"></span> Всі</a></li>
        </ul>
    </div>
</div>
</div><?php }
}
