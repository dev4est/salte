<?php
/* Smarty version 3.1.32, created on 2018-04-25 16:03:41
  from '/Users/user/Documents/project/salte/design/s-alte/html/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae07cada57f11_32824290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd253b72b3e0877c42c91131315003576ca136f41' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/page.tpl',
      1 => 1524237242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae07cada57f11_32824290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-flat">
    <div class="panel-body">
                <?php $_smarty_tpl->_assignInScope('canonical', "/".((string)$_smarty_tpl->tpl_vars['page']->value->url) ,false ,2);?>

        <!-- Заголовок страницы -->
        <h2 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h2>

        <!-- Тело страницы -->
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
</div>
<?php }
}
