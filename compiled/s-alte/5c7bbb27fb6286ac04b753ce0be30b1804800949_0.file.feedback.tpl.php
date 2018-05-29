<?php
/* Smarty version 3.1.32, created on 2018-05-02 15:46:10
  from '/Users/user/Documents/project/salte/design/s-alte/html/feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9b312eacc14_37441552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7bbb27fb6286ac04b753ce0be30b1804800949' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/feedback.tpl',
      1 => 1524239406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9b312eacc14_37441552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Documents/project/salte/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?><div class="row">
<div class="col-lg-12">
    <div class="panel panel-flat">
        <div class="panel-body">

                        <?php $_smarty_tpl->_assignInScope('canonical', "/".((string)$_smarty_tpl->tpl_vars['page']->value->url) ,false ,2);?>

            <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h2>

            <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>



            <?php if ($_smarty_tpl->tpl_vars['message_sent']->value) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
, ваше сообщение отправлено.
            <?php } else { ?>
                <form class="form feedback_form" method="post">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="message_error">
                            <p class="help-block help-block-error">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                Неверно введена капча
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                Введите имя
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                Введите email
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_text') {?>
                                Введите сообщение
                            <?php }?></p>
                        </div>
                    <?php }?>
                    <div class="form-group field-contactform-name <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>required has-error<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?><p class="help-block help-block-error">Необхідно заповнити "Ім'я".</p><?php }?>
                        <label class="control-label" for="contactform-name">Ім'я</label>
                        <input data-format=".+" class="form-control" data-notice="Введіть Ім'я" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" maxlength="255"
                               type="text"/>

                    </div>
                    <div class="form-group field-contactform-name <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>required has-error<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                        <p class="help-block help-block-error">Необхідно заповнити "Email".</p>
                        <?php }?>
                        <label class="control-label" for="contactform-name">Email</label>
                        <input data-format="email" data-notice="Введіть email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="email"
                               maxlength="255" type="text" class="form-control"/>

                    </div>
                    <div class="form-group field-contactform-name <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>required has-error<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_text') {?><p class="help-block help-block-error">Необхідно заповнити "Текст повідомлення".</p><?php }?>
                        <label class="control-label" for="contactform-name">Текст повідомлення</label>
                        <textarea data-format=".+" data-notice="Введите сообщение" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                  name="message" class="form-control"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>

                    </div>
                    <div class="form-group field-contactform-name">
                        <div class="captcha">
                            <img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
"/>
                            <input class="form-control" id="comment_captcha" type="text" name="captcha_code" value=""
                               data-format="\d\d\d\d" data-notice="Введите капчу" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="feedback" name="contact-button">Надіслати</button>
                    </div>

                </form>
            <?php }?>
        </div>
    </div>
</div>
</div>

<style>
   #comment_captcha {
        width: 300px;
        float: right;
    }
</style><?php }
}
