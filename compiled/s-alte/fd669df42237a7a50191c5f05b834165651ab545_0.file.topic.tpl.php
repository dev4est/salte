<?php
/* Smarty version 3.1.32, created on 2018-06-04 14:26:08
  from '/Users/user/Documents/project/salte/design/s-alte/html/topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1521d0130275_92809229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd669df42237a7a50191c5f05b834165651ab545' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/topic.tpl',
      1 => 1528111312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ui/ui_comment.tpl' => 1,
    'file:topic/timer.tpl' => 1,
    'file:topic/add_timer.tpl' => 1,
    'file:topic/files.tpl' => 1,
    'file:topic/users_list.tpl' => 1,
  ),
),false)) {
function content_5b1521d0130275_92809229 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Detailed task -->
<div class="row">
    <div class="col-lg-8">

        <!-- Task overview -->
        <div class="panel panel-flat">
            <div class="panel-heading mt-5">
                <h5 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value->name;?>
<a
                            class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
               <?php echo $_smarty_tpl->tpl_vars['topic']->value->text;?>

                <?php if ($_smarty_tpl->tpl_vars['topic']->value->files) {?>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topic']->value->files, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value->type == 'jpg' || $_smarty_tpl->tpl_vars['i']->value->type == 'png' || $_smarty_tpl->tpl_vars['i']->value->type == 'gif') {?>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->topics_dir;
echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
" alt="">
                                <div class="caption-overflow">
														<span>
															<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->topics_dir;
echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
" class="btn bg-success-300 btn-xs btn-icon"><i class="icon-zoomin3"></i></a>
															<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->topics_dir;
echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
" class="btn bg-success-300 btn-xs btn-icon"><i class="icon-download"></i></a>
														</span>
                                </div>
                            </div>

                            <div class="caption text-center">
                                <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>

                            </div>
                        </div>
                    </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
            </div>

            <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline list-inline-condensed heading-text">
                        <li><span class="status-mark border-blue position-left"></span> Статус:</li>
                        <li class="dropdown">
                            <a href="#" class="text-default text-semibold dropdown-toggle" data-toggle="dropdown">Відкрита
                                <span class="caret"></span></a>
                                                   </li>
                    </ul>
                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rule' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->rules,'topic_delete' ))) {?>
                        <li><a href="#" class="text-default"><i class="icon-trash"></i></a></li>
                        <?php }?>
                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rule' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->rules,'topic_edit' ))) {?>
                            <li><a href="/topic/edit/<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
" class="text-default"><i class="icon-pencil7"></i></a></li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /task overview -->


        <!-- Comments -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title text-semiold"><i class="icon-bubbles4 position-left"></i> Коментарі до теми<a
                            class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <a href="/topic/<?php echo $_smarty_tpl->tpl_vars['topic']->value->id;?>
#comments" class="btn bg-success btn-xs btn-icon"><i class="icon-plus2"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="media-list content-group-lg stack-media-on-mobile">
                <?php $_smarty_tpl->_subTemplateRender("file:ui/ui_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), 0, false);
?>
                </div>
            </div>

        <!-- /comments -->
        </div>

    </div>

    <div class="col-lg-4">
        <div class="row" id="timer_widget">
            <?php if ($_smarty_tpl->tpl_vars['topic']->value->timer) {?>
                <!-- Timer -->
                <?php $_smarty_tpl->_subTemplateRender("file:topic/timer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rule' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->rules,'votes' ))) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:topic/add_timer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <!-- /timer -->
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['topic']->value->files) {?>
             <!-- Attached files -->
                <?php $_smarty_tpl->_subTemplateRender('file:topic/files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <!-- /attached files -->


            <!-- Assigned users -->
            <?php if ($_smarty_tpl->tpl_vars['users_topic']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:topic/users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <!-- /assigned users -->

        </div>
    </div>
</div>
<!-- /detailed task -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/topic/comment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/topic/calendar.js"><?php echo '</script'; ?>
><?php }
}
