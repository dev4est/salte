<?php
/* Smarty version 3.1.32, created on 2018-05-03 16:32:37
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/security.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aeb0f75f05263_63138688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a2dda56b3544e9b7cad7bfe0a61a8ae5cc4c95d' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/security.tpl',
      1 => 1525354356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile/nav_bar.tpl' => 1,
  ),
),false)) {
function content_5aeb0f75f05263_63138688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('nav_bar', 2);
$_smarty_tpl->_subTemplateRender("file:profile/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel panel-flat">

    <div class="panel-body">
<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h2>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="message_error">
        <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>Введите имя
        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>Введите email
        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_password') {?>Введите пароль
        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_exists') {?>Пользователь с таким email уже зарегистрирован
        <?php } else {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
    </div>
<?php }?>

        <form class="form form-horizontal" method="post">
            <div class="form-group">
                <div class="col-lg-10">
                    <input data-format=".+" data-notice="Введите имя" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" maxlength="255" type="text" class="form-control"/>
                </div>
            </div>

    <label>Email</label>
    <input data-format="email" data-notice="Введите email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="email" maxlength="255" type="text"/>

    <label><a href='#' onclick="$('#password').show();return false;">Изменить пароль</a></label>
    <input id="password" value="" name="password" type="password" style="display:none;"/>
    <input type="submit" class="button" value="Сохранить">
</form>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <p></p>
    <h2>Ваши заказы</h2>
    <ul id="orders_history">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <li>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
 <a href='order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
'>Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>оплачен,<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->status == 0) {?>ждет обработки<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status == 1) {?>в обработке<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status == 2) {?>выполнен<?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>
    </div>
</div><?php }
}
