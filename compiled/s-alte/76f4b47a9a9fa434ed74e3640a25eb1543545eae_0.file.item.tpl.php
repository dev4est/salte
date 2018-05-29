<?php
/* Smarty version 3.1.32, created on 2018-05-25 01:36:18
  from '/Users/user/Documents/project/salte/design/s-alte/html/comment/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b073e62abe9f3_55044457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f4b47a9a9fa434ed74e3640a25eb1543545eae' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/comment/item.tpl',
      1 => 1527201242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b073e62abe9f3_55044457 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="media">
            <div class="media-left">
                <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['comment']->value->user_id;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['comment']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['comment']->value->image;?>
" class="img-sm img-circle" alt="">
                </a>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <a href="#" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['comment']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->surname;?>
</a>
                    <span class="media-annotation dotted"><?php echo $_smarty_tpl->tpl_vars['comment']->value->date;?>
</span>
                </div>

                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->text;?>
</p>
            </div>
        </div><?php }
}
