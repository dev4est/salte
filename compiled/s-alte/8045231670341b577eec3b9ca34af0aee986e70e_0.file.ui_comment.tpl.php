<?php
/* Smarty version 3.1.32, created on 2018-05-25 15:43:08
  from '/Users/user/Documents/project/salte/design/s-alte/html/ui/ui_comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0804dc138820_20186110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8045231670341b577eec3b9ca34af0aee986e70e' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/ui/ui_comment.tpl',
      1 => 1527252185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0804dc138820_20186110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/Users/user/Documents/project/salte/compiled/s-alte/8045231670341b577eec3b9ca34af0aee986e70e_0.file.ui_comment.tpl.php',
    'uid' => '8045231670341b577eec3b9ca34af0aee986e70e',
    'call_name' => 'smarty_template_function_comments_tree_20435055375b0804dbda1f95_33722716',
  ),
));
?>
<div class="media date-step content-divider text-muted">
    <span>Saturday, Feb 12</span>
</div>
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comments']->value,'count'=>0,'level'=>1,'row'=>0), true);?>

<div class="media">
    <h6 class="text-semibold"><i class="icon-pencil7 position-left"></i> Коментування</h6>
    <div class="media-left">
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" class="img-sm img-circle" alt="">
    </div>
    <div class="media-body">
        <a name="comments"></a>
        <form class="form-comment text-right">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <input type="hidden" name="parent_id" value="0" id="parent_id">
            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
">
            <textarea class="form-control content-group" placeholder="Ваш коментар" name="text" style="width: 90%;"></textarea>
            <button type="submit" class="btn bg-success btn-labeled-right"><b><i class="icon-circle-right2"></i></b></button>
            <button type="button" class="btn bg-success btn-labeled-right"><b><i class="icon-plus22"></i></b></button>
        </form>
    </div>
</div>
<style>
    .media-hiden {
        display: none;
    }
    .list-comments {
        max-height: 500px;
        overflow-y: scroll;
    }
    .form-comment textarea{
        height: 74px;
        width: 87%;
        float: left;
    }
    .form-comment button{
        margin-bottom: 5px;
    }
    .list-comments .list-comments{
        max-height: 300px;
        overflow-y: scroll;
    }
</style><?php }
/* smarty_template_function_comments_tree_20435055375b0804dbda1f95_33722716 */
if (!function_exists('smarty_template_function_comments_tree_20435055375b0804dbda1f95_33722716')) {
function smarty_template_function_comments_tree_20435055375b0804dbda1f95_33722716(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<div class="list-comments row-<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'c', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['c']->value->id && $_smarty_tpl->tpl_vars['c']->value->user_id) {?>
                <div class="media media-<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                    <div class="media-left">
                        <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['c']->value->user_id;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['c']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" class="img-sm img-circle" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['c']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->surname;?>
</a>
                            <span class="media-annotation dotted"><?php echo $_smarty_tpl->tpl_vars['c']->value->date;?>
</span>
                        </div>

                        <p><?php echo $_smarty_tpl->tpl_vars['c']->value->text;?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['level']->value < 2) {?>
                        <ul class="list-inline list-inline-separate text-size-small">
                                                          <li><a class="recomment" href="/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
#comment-<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" data-type="1" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" data-author="<?php echo $_smarty_tpl->tpl_vars['c']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->surname;?>
">Коментувати</a></li>
                              <li><a href="#" data-type="2" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Редагувати</a></li>
                          </ul>
                        <?php } else { ?>
                            <ul class="list-inline list-inline-separate text-size-small">
                                                                <li><a class="recomment" href="/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
#comment-<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" data-type="1" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->parent_id;?>
" data-author="<?php echo $_smarty_tpl->tpl_vars['c']->value->username;?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->surname;?>
">Коментувати</a></li>
                                <li><a href="#" data-type="2" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">Редагувати</a></li>
                            </ul>
                        <?php }?>


                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['c']->value->sub_coments,'count'=>(count($_smarty_tpl->tpl_vars['c']->value->sub_coments))-1,'level'=>2,'row'=>$_smarty_tpl->tpl_vars['c']->value->id), true);?>

                        <?php if ($_smarty_tpl->tpl_vars['level']->value < 2) {?>
                            <div class="media media-hiden form-new-comment">
                                <div class="media-left">
                                    <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['c']->value->user_id;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->profile_users_images_dir;
echo $_smarty_tpl->tpl_vars['c']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" class="img-sm img-circle" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <form class="form-comment text-right">
                                        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                                        <input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" id="parent_id">
                                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
">
                                        <a name="comment-<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"></a>
                                        <textarea class="form-control content-group send-text" name="text" placeholder="Залишити коментар"></textarea>
                                        <button type="submit" class="btn bg-success btn-labeled-right"><b><i class="icon-circle-right2"></i></b></button>
                                        <button type="button" class="btn bg-success btn-labeled-right"><b><i class="icon-plus22"></i></b></button>
                                    </form>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php
}}
/*/ smarty_template_function_comments_tree_20435055375b0804dbda1f95_33722716 */
}
