<?php
/* Smarty version 3.1.32, created on 2018-05-15 17:55:18
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/user_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afaf4d6a3b058_57519703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953e881dd305f1865ece3dfce263b54ea6da937a' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/user_modal.tpl',
      1 => 1526396090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afaf4d6a3b058_57519703 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_small" class="modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>

                <br />
            </div>

            <div class="modal-body">
                <ul class="media-list">
                    <li class="media-header">Список учасників переписки</li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                    <li class="media">
                        <div class="media-left media-middle">
                            <?php if ($_smarty_tpl->tpl_vars['u']->value->image) {?>
                                <a href="#" alt="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
">
                                    <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['u']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->image;?>
"
                                         class="img-sm img-circle"  alt="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
"></a>
                            <?php } else { ?>
                                <a href="#" alt="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
">
                                    <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg"
                                         class="img-circle img-xs" alt="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
" title="<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
"></a>
                            <?php }?>
                        </div>

                        <div class="media-body">
                            <div class="media-heading text-semibold"><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
</div>
                            <span class="text-muted">Учасник</span>
                        </div>

                        <div class="media-right media-middle">
                            <ul class="icons-list text-nowrap">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </ul>
            </div>

            <div class="modal-footer">
                <br />
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
