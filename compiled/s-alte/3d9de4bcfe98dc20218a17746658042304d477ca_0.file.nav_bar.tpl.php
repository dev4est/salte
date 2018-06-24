<?php
/* Smarty version 3.1.32, created on 2018-06-12 14:45:47
  from '/Users/user/Documents/project/salte/design/s-alte/html/community/nav_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1fb26b12c644_44529292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9de4bcfe98dc20218a17746658042304d477ca' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/community/nav_bar.tpl',
      1 => 1528803943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1fb26b12c644_44529292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="navbar navbar-default navbar-component navbar-xs">
    <ul class="nav navbar-nav visible-xs-block">
        <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-filter">
        <ul class="nav navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 5) {?>class="active"<?php }?>><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
"><i class="icon-menu7 position-left"></i> Обговорення</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 4) {?>class="active"<?php }?>><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/messages">  <i class="icon-bubbles3 position-left"></i> Повідомлення</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 3) {?>class="active"<?php }?>><a href="/community/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
/users" ><i class="icon-menu7 position-left"></i> Учасники</a></li>
        </ul>
    </div>
</div>


<?php }
}
