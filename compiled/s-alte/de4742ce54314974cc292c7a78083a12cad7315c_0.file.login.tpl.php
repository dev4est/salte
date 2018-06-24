<?php
/* Smarty version 3.1.32, created on 2018-06-06 11:38:33
  from '/Users/user/Documents/project/salte/design/s-alte/html/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b179d89a613b1_26815329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de4742ce54314974cc292c7a78083a12cad7315c' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/login.tpl',
      1 => 1528274302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b179d89a613b1_26815329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('wrapper', 'home_login.tpl' ,false ,2);
$_smarty_tpl->_assignInScope('canonical', "/user/login" ,false ,2);?>

<?php $_smarty_tpl->_assignInScope('meta_title', "Вход" ,false ,2);?>

<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Simple login form -->
		<form method="post" action="/user/login">
			<div class="panel panel-body login-form">
				<div class="text-center">
					<a href="/"><img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo.png"
									 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"
									 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" width="150"/></a>
					<br /><br />
				</div>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value == 'login_incorrect') {?>Невірний логін або пароль
                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_disabled') {?>Ваш аккаунт ще не активований.
                        <?php } else {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
					</span>
                <?php }?>
				<div class="form-group has-feedback has-feedback-left">

					<input type="text" class="form-control" placeholder="Ведіть email" name="email" data-format="email" data-notice="Введите email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="255">
					<div class="form-control-feedback">
						<i class="icon-user text-muted"></i>
					</div>
				</div>

				<div class="form-group has-feedback has-feedback-left">
					<input class="form-control" placeholder="Ведіть пароль" type="password" name="password" data-format=".+" data-notice="Введите пароль" value="">
					<div class="form-control-feedback">
						<i class="icon-lock2 text-muted"></i>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" name="login" class="btn btn-primary btn-block" value=" ">Вхід <i class="icon-circle-right2 position-right"></i></button>
				</div>

				<div class="text-center">
					Пароль (<a href="user/password_remind">нагадати</a>)
				</div>
			</div>
		</form>
		<!-- /simple login form -->
	</div>
	<!-- /content area -->

</div>
<?php }
}
