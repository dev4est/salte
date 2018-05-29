<?php
/* Smarty version 3.1.32, created on 2018-05-02 15:49:18
  from '/Users/user/Documents/project/salte/design/s-alte/html/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9b3ce83d747_72898537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633706d9472634b82611182ee7204d8eac451908' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/main.tpl',
      1 => 1525265315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile/index.tpl' => 1,
  ),
),false)) {
function content_5ae9b3ce83d747_72898537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('wrapper', 'index.tpl' ,false ,2);
$_smarty_tpl->_assignInScope('canonical', '' ,false ,2);
if (!$_smarty_tpl->tpl_vars['user']->value->id > 0) {?>
<div class="panel panel-flat">
    <div class="panel-body">


        <!-- Заголовок страницы -->
        <h2 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h2>

        <!-- Тело страницы -->
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
</div>
<?php } else {
$_smarty_tpl->_subTemplateRender("file:profile/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
