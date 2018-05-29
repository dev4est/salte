<?php
/* Smarty version 3.1.32, created on 2018-05-25 16:48:11
  from '/Users/user/Documents/project/salte/design/s-alte/html/community/topics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b08141bb98878_78888050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76cdc9d59c9c976c2ef05381320698ec3a972e7' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/community/topics.tpl',
      1 => 1527256089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b08141bb98878_78888050 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-group panel-group-control panel-group-control-right">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>

        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#question-<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
">
                        <i class="icon-help position-left text-slate"></i> <?php echo $_smarty_tpl->tpl_vars['t']->value->name;?>

                    </a>
                </h6>
            </div>

            <div id="question-<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" class="panel-collapse collapse">
                <div class="panel-body">
                      <p><?php echo $_smarty_tpl->tpl_vars['t']->value->text;?>
</p>
                </div>

                <div class="panel-footer panel-footer-transparent"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                    <div class="heading-elements">
                        <span class="text-muted heading-text"><?php echo $_smarty_tpl->tpl_vars['t']->value->date;?>
</span>

                        <ul class="list-inline list-inline-condensed heading-text pull-right">
                            <li><a href="/topic/<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" class="btn bg-success btn-labeled-right">Детальніше</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
