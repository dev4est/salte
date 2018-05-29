<?php
/* Smarty version 3.1.32, created on 2018-05-02 14:06:12
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/nav_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae99ba41e4581_50937685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd15b321ac4393594d7e76ce42e92ebccfdd03a5' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/nav_bar.tpl',
      1 => 1525259157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae99ba41e4581_50937685 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-default navbar-component navbar-xs">
    <ul class="nav navbar-nav visible-xs-block">
        <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-filter">
        <ul class="nav navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 5) {?>class="active"<?php }?>><a href="/profile/news"><i class="icon-stack-text position-left"></i> Оновлення</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 4) {?>class="active"<?php }?>><a href="/profile/messages"><i class="icon-envelop3 position-left"></i> Особисті повідомлення</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 3) {?>class="active"<?php }?>><a href="/profile/community" ><i class="icon-collaboration position-left"></i>Ваші спільноти</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 1) {?>class="active"<?php }?>>
                <a href="/" alt="Персональні данні" title="Персональні данні"><i class="icon-stack-text position-left"></i></a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['nav_bar']->value == 2) {?>class="active"<?php }?>><a href="/profile/security" alt="Безпека" title="Безпека"><i class="icon-key position-left"></i></a></li>
        </ul>

    </div>
</div><?php }
}
