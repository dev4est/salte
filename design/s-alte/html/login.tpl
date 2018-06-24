{* Страница входа пользователя *}
{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'home_login.tpl' scope=parent}
{* Канонический адрес страницы *}
{$canonical="/user/login" scope=parent}

{$meta_title = "Вход" scope=parent}

<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Simple login form -->
		<form method="post" action="/user/login">
			<div class="panel panel-body login-form">
				<div class="text-center">
					<a href="/"><img src="design/{$settings->theme|escape}/images/logo.png"
									 title="{$settings->site_name|escape}"
									 alt="{$settings->site_name|escape}" width="150"/></a>
					<br /><br />
				</div>
                {if $error}
				<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i>
                    {if $error == 'login_incorrect'}Невірний логін або пароль
                        {elseif $error == 'user_disabled'}Ваш аккаунт ще не активований.
                        {else}{$error}{/if}
					</span>
                {/if}
				<div class="form-group has-feedback has-feedback-left">

					<input type="text" class="form-control" placeholder="Ведіть email" name="email" data-format="email" data-notice="Введите email" value="{$email|escape}" maxlength="255">
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
