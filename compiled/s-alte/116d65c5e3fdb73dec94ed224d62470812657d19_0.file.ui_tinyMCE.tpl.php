<?php
/* Smarty version 3.1.32, created on 2018-06-04 14:29:07
  from '/Users/user/Documents/project/salte/design/s-alte/html/ui/ui_tinyMCE.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b152283c31b06_38077051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116d65c5e3fdb73dec94ed224d62470812657d19' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/ui/ui_tinyMCE.tpl',
      1 => 1528111745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b152283c31b06_38077051 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea placeholder="" id="box-comment" rows="5" cols="5" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
<?php echo '<script'; ?>
 src="js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdn.tinymce.com/4/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>tinymce.init({
        selector: '#box-comment',
        height: 200,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic | alignleft aligncenter alignright alignjustify bullist removeformat',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            ]
    });

<?php echo '</script'; ?>
>



<?php }
}
