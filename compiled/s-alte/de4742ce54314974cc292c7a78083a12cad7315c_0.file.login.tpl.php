<?php
/* Smarty version 3.1.32, created on 2018-05-02 12:32:00
  from '/Users/user/Documents/project/salte/design/s-alte/html/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae985908d4314_26559871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de4742ce54314974cc292c7a78083a12cad7315c' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/login.tpl',
      1 => 1523704223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae985908d4314_26559871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('canonical', "/user/login" ,false ,2);?>

<?php $_smarty_tpl->_assignInScope('meta_title', "Вход" ,false ,2);?>
   
<h1>Вход</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<div class="message_error">
	<?php if ($_smarty_tpl->tpl_vars['error']->value == 'login_incorrect') {?>Неверный логин или пароль
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_disabled') {?>Ваш аккаунт еще не активирован.
	<?php } else {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
</div>
<?php }?>

<form class="form login_form" method="post">
	<label>Email</label>
	<input type="text" name="email" data-format="email" data-notice="Введите email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="255" />

    <label>Пароль (<a href="user/password_remind">напомнить</a>)</label>
    <input type="password" name="password" data-format=".+" data-notice="Введите пароль" value="" />

	<input type="submit" class="button" name="login" value="Войти">
</form><?php }
}
