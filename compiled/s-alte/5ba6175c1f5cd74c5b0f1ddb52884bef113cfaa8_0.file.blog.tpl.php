<?php
/* Smarty version 3.1.32, created on 2018-05-02 16:17:35
  from '/Users/user/Documents/project/salte/design/s-alte/html/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9ba6fb61fb8_83864985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba6175c1f5cd74c5b0f1ddb52884bef113cfaa8' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/blog.tpl',
      1 => 1523704223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 2,
  ),
),false)) {
function content_5ae9ba6fb61fb8_83864985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('canonical', "/blog" ,false ,2);?>

<!-- Заголовок /-->
<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h1>

<?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Статьи /-->
<ul id="blog">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
	<li>
		<h3><a data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" href="blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date ));?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</p>
	</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<!-- Статьи #End /-->    

<?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php }
}
