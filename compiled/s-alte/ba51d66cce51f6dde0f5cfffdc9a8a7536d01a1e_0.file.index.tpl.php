<?php
/* Smarty version 3.1.32, created on 2018-05-02 16:07:20
  from '/Users/user/Documents/project/salte/design/s-alte/html/profile/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9b8084facc9_95567976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba51d66cce51f6dde0f5cfffdc9a8a7536d01a1e' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/profile/index.tpl',
      1 => 1525266437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile/nav_bar.tpl' => 1,
  ),
),false)) {
function content_5ae9b8084facc9_95567976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('nav_bar', 1);
$_smarty_tpl->_subTemplateRender("file:profile/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel panel-flat">

    <div class="panel-body">
        <fieldset>
            <legend class="text-semibold"></legend>

        </fieldset>
        <fieldset>
            <div class="form-group">
                <label class="col-lg-3 control-label">Ім'я</label>
                <div class="col-lg-9">
                    <div class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
</div>

                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="text-semibold">Зміна зображення аватару</legend>

        </fieldset>

        <div tabindex="500" class="btn btn-primary btn-lg btn-file"><i class="icon-file-plus"></i>
                <span class="hidden-xs">Змінити зображення</span>
            <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary btn-lg" data-remove-class="btn btn-default btn-lg" id="1525266240027">
        </div>
    </div>
</div><?php }
}
