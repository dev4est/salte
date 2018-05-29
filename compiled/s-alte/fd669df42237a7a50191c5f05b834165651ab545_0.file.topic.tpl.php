<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:25:55
  from '/Users/user/Documents/project/salte/design/s-alte/html/topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b080ee3d1cf08_73037790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd669df42237a7a50191c5f05b834165651ab545' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/topic.tpl',
      1 => 1527254743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ui/ui_comment.tpl' => 1,
    'file:topic/timer.tpl' => 1,
    'file:topic/users_list.tpl' => 1,
  ),
),false)) {
function content_5b080ee3d1cf08_73037790 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['topic']->value->end_date) {?>
                <!-- Timer -->
                <?php $_smarty_tpl->_subTemplateRender("file:topic/timer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <!-- /timer -->
            <?php }?>

             <!-- Attached files -->
            <div class="panel panel-flat">
                 <div class="panel-heading">
                     <h6 class="panel-title"><i class="icon-link position-left"></i> Долучені файли<a
                                 class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                 </div>

                 <div class="panel-body">
                     <ul class="media-list">
                         <li class="media">
                             <div class="media-left media-middle">
                                 <i class="icon-file-word icon-2x text-muted"></i>
                             </div>

                             <div class="media-body">
                                 <a href="#" class="media-heading text-semibold">Overdrew_scowled.doc</a>
                                 <ul class="list-inline list-inline-separate list-inline-condensed text-size-mini text-muted">
                                     <li>Size: 1.2Mb</li>
                                     <li><a href="#"><i class="icon-download"></i></a></li>
                                 </ul>
                             </div>
                         </li>

                         <li class="media">
                             <div class="media-left media-middle">
                                 <i class="icon-file-pdf icon-2x text-muted"></i>
                             </div>

                             <div class="media-body">
                                 <a href="#" class="media-heading text-semibold">The_less_overslept.pdf</a>
                                 <ul class="list-inline list-inline-separate list-inline-condensed text-size-mini text-muted">
                                     <li>Size: 4.3Mb</li>
                                     <li><a href="#"><i class="icon-download"></i></a></li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>            <!-- /attached files -->


            <!-- Assigned users -->
           <?php $_smarty_tpl->_subTemplateRender("file:topic/users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- /assigned users -->

        </div>
    </div>
</div>
<!-- /detailed task -->
<?php echo '<script'; ?>
 src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/topic/comment.js"><?php echo '</script'; ?>
><?php }
}
