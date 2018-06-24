<?php
/* Smarty version 3.1.32, created on 2018-06-15 18:58:40
  from '/Users/user/Documents/project/salte/design/s-alte/html/left_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b23e230586505_44198690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fdc97361e4dd3a15de4058d0f6e59aa2c4f9971' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/left_bar.tpl',
      1 => 1529078317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23e230586505_44198690 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
    
    <div class="list-group no-border">
        <a href="/profile/" class="list-group-item"><i class="icon-user"></i> Мій профіль</a>
        <a href="/profile/news" class="list-group-item"><i class="icon-stack-text position-left"></i> Оновлення</a>
        <a href="/profile/messages" class="list-group-item"><i class="icon-envelop3 position-left"></i> Особисті повідомлення</a>
        <a href="/profile/community" class="list-group-item"><i class="icon-collaboration position-left"></i>Мої спільноти <span class="badge bg-success pull-right">29</span></a>
        <div class="list-group-divider"></div>
        <a href="/profile/security" class="list-group-item"> <i class="icon-key position-left"></i> Налаштування</a>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['topics']->value) {?>
<div class="panel panel-flat">
    <div class="panel-body">
        <a href="/topic/add/<?php echo $_smarty_tpl->tpl_vars['community']->value->id;?>
" class="btn bg-success-400 btn-block" style="background-color: #1c983e;">Cтворити тему <i class="icon-comment position-right"></i></a>
    </div>
</div>
<?php }
}
}
