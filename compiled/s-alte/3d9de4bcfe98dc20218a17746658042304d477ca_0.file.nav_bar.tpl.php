<?php
/* Smarty version 3.1.32, created on 2018-05-10 11:53:03
  from '/Users/user/Documents/project/salte/design/s-alte/html/community/nav_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af4086f988602_86916081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9de4bcfe98dc20218a17746658042304d477ca' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/community/nav_bar.tpl',
      1 => 1525942381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4086f988602_86916081 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-default navbar-component navbar-xs">
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
        <ul class="nav navbar-right navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 1) {?>class="active"<?php }?>>
                <a href="/" alt="Персональні данні" title="Персональні данні"><i class="icon-menu7 position-left"></i> Новые</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 2) {?>class="active"<?php }?>><a href="/profile/security" alt="Безпека" title="Безпека"><i class="icon-key position-left"></i></a></li>
        </ul>

    </div>
</div>
<?php }
}
