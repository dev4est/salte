<?php
/* Smarty version 3.1.32, created on 2018-05-02 16:17:39
  from '/Users/user/Documents/project/salte/design/s-alte/html/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9ba7311d846_30712337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b4fecde91604c2f740406084a44fcd903dab4c' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/post.tpl',
      1 => 1523704223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9ba7311d846_30712337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Documents/project/salte/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_assignInScope('canonical', "/blog/".((string)$_smarty_tpl->tpl_vars['post']->value->url) ,false ,2);?>

<!-- Заголовок /-->
<h1 data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date ));?>
</p>

<!-- Тело поста /-->
<?php echo $_smarty_tpl->tpl_vars['post']->value->text;?>


<!-- Соседние записи /-->
<div id="back_forward">
	<?php if ($_smarty_tpl->tpl_vars['prev_post']->value) {?>
		←&nbsp;<a class="prev_page_link" href="blog/<?php echo $_smarty_tpl->tpl_vars['prev_post']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['prev_post']->value->name;?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?>
		<a class="next_page_link" href="blog/<?php echo $_smarty_tpl->tpl_vars['next_post']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['next_post']->value->name;?>
</a>&nbsp;→
	<?php }?>
</div>

<!-- Комментарии -->
<div id="comments">

	<h2>Комментарии</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
	<!-- Список с комментариями -->
	<ul class="comment_list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
		<a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
		<li>
			<!-- Имя и дата комментария-->
			<div class="comment_header">	
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</i>
				<?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?><b>ожидает модерации</b><?php }?>
			</div>
			<!-- Имя и дата комментария (The End)-->
			
			<!-- Комментарий -->
			<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

			<!-- Комментарий (The End)-->
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<!-- Список с комментариями (The End)-->
	<?php } else { ?>
	<p>
		Пока нет комментариев
	</p>
	<?php }?>
	
	<!--Форма отправления комментария-->

	<!--Подключаем js-проверку формы -->
	<?php echo '<script'; ?>
 src="/js/baloon/js/default.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/baloon/js/validate.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/baloon/js/baloon.js" language="JavaScript" type="text/javascript"><?php echo '</script'; ?>
>
	<link href="/js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	<form class="comment_form" method="post" action="">
		<h2>Написать комментарий</h2>
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
		<div class="message_error">
			<?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
			Неверно введена капча
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
			Введите имя
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_comment') {?>
			Введите комментарий
			<?php }?>
		</div>
		<?php }?>
		<textarea class="comment_textarea" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий"><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea><br />
		<div>
		<label for="comment_name">Имя</label>
		<input class="input_name" type="text" id="comment_name" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format=".+" data-notice="Введите имя"/><br />

		<input class="button" type="submit" name="comment" value="Отправить" />
		
		<label for="comment_captcha">Число</label>
		<div class="captcha"><img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
"/></div> 
		<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>
		
		</div>
	</form>
	<!--Форма отправления комментария (The End)-->
	
</div>
<!-- Комментарии (The End) --><?php }
}
