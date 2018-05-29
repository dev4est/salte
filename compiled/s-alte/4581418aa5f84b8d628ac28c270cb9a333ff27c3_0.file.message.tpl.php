<?php
/* Smarty version 3.1.32, created on 2018-05-16 11:11:47
  from '/Users/user/Documents/project/salte/design/s-alte/html/messages/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afbe7c336d222_72376941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4581418aa5f84b8d628ac28c270cb9a333ff27c3' => 
    array (
      0 => '/Users/user/Documents/project/salte/design/s-alte/html/messages/message.tpl',
      1 => 1526458296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages/user_modal.tpl' => 1,
  ),
),false)) {
function content_5afbe7c336d222_72376941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('page_name', 'qwdwqd' ,false ,2);?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <a href="#" class="media-left">
            <?php if ($_smarty_tpl->tpl_vars['subject']->value->image) {?>
                <img src="files/community/<?php echo $_smarty_tpl->tpl_vars['subject']->value->image;?>
" class="img-circle img-lg" alt="">
            <?php } else { ?>
                <span class="btn bg-teal-400 btn-rounded btn-icon btn-xlg"> <span class="letter-icon">A</span> </span>
            <?php }?>

        </a>
        <div class="media-body">
            <h6 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['subject']->value->text;?>
</h6>
            <a href="#" class="heading-text"><i class="icon-arrow-left22"></i> Назад</a>
        </div>
        <div class="heading-elements">
            <span class="label bg-success heading-text"><?php echo count($_smarty_tpl->tpl_vars['users']->value);?>
 active</span>
            <ul class="icons-list">
                <li><a href="#" data-toggle="modal" data-target="#modal_small"><i class="icon-users4"></i></a></li>
            </ul>

            <?php $_smarty_tpl->_subTemplateRender("file:messages/user_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="heading-elements">
            <ul class="list-inline list-inline-condensed no-margin">

                <!--<li><span class="btn bg-teal-400 btn-xs">+26</span></li>-->
            </ul>
        </div>
    </div>
    <hr style="margin: 0;">
    <div class="panel-body">
        <ul class="media-list chat-stacked content-group chat">

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                <li class="media">
                    <div class="media-left">
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->image) {?>
                            <img src="files/profile/users/<?php echo $_smarty_tpl->tpl_vars['m']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value->image;?>
" class="img-sm img-circle" alt="">
                        <?php } else { ?>
                            <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/assets/images/placeholder.jpg"
                                 class="img-circle img-md" alt="">
                        <?php }?>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <a href="#" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['m']->value->author;?>
</a>
                            <span class="media-annotation pull-right"><?php echo $_smarty_tpl->tpl_vars['m']->value->create_data;?>
 <a href="#"><i
                                            class="icon-alarm position-right text-muted"></i></a></span>
                        </div>
                        <?php echo $_smarty_tpl->tpl_vars['m']->value->text;?>

                    </div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </ul>
        <form id="messages_form" method="post">
        <textarea name="message" class="form-control content-group" rows="3" cols="1" id="message"
                  placeholder="Enter your message..."></textarea>

        <div class="row">
            <div class="col-xs-6">
                <ul class="icons-list icons-list-extended mt-10">
                    <li><a href="#" data-popup="tooltip" title="" data-container="body"
                           data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
                    <li><a href="#" data-popup="tooltip" title="" data-container="body"
                           data-original-title="Send video"><i class="icon-file-video"></i></a></li>
                    <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i
                                    class="icon-file-plus"></i></a></li>
                </ul>
                <input type="file" id="multiFiles" name="files[]" multiple="multiple"/>
            </div>
            <div class="col-xs-6 text-right">
                <button type="submit" class="btn btn-info btn-labeled-right">Відправити <b><i
                                class="icon-circle-right2"></i></b></button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Сам код нашего чата -->
<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function () {
        $(".chat").scrollTop($(".chat").get(0).scrollHeight);
        $("#messages_form").submit(Send); // вешаем на форму с именем и сообщением событие которое срабатывает когда нажата кнопка "Отправить" или "Enter"
        $("#pac_text").focus(); // по поле ввода сообщения ставим фокус
         setInterval("Load();", 4000); // создаём таймер который будет вызывать загрузку сообщений каждые 2 секунды (2000 миллисекунд)
    });
    var last_message_id = <?php echo $_smarty_tpl->tpl_vars['messages_id']->value;?>
; // номер последнего сообщения, что получил пользователь
    var load_in_process = false; // можем ли мы выполнять сейчас загрузку сообщений. Сначала стоит false, что значит - да, можем

    // Функция для отправки сообщения
    function Send() {
        // Выполняем запрос к серверу с помощью jquery ajax: $.post(адрес, {параметры запроса}, функция которая вызывается по завершению запроса)
        $.post("/messages/add",
            {
                id:<?php echo $_smarty_tpl->tpl_vars['subject']->value->id;?>
,
                text: $("#message").val() //  сам текст сообщения
            },
            function (result) {
               console.log(result);
               // last_message_id = result;
                load();
            }); // по завершению отправки вызываем функцию загрузки новых сообщений Load()

        $("#message").val(""); // очистим поле ввода сообщения
        $("#message").focus(); // и поставим на него фокус

        return false; // очень важно из Send() вернуть false. Если этого не сделать то произойдёт отправка нашей формы, те страница перезагрузится
    }
    // Функция для загрузки сообщений
    function Load() {
        // Проверяем можем ли мы загружать сообщения. Это сделано для того, чтобы мы не начали загрузку заново, если старая загрузка ещё не закончилась.
        if (!load_in_process) {
            load_in_process = true; // загрузка началась
            // отсылаем запрос серверу, который вернёт нам javascript
            $.post("/messages/load",
                {
                    id: <?php echo $_smarty_tpl->tpl_vars['subject']->value->id;?>
, // указываем на то что это загрузка сообщений
                    last: last_message_id, // передаём номер последнего сообщения который получил пользователь в прошлую загрузку
                    rand: (new Date()).getTime()
                },
                function (result) { // в эту функцию в качестве параметра передаётся javascript код, который мы должны выполнить
                    $(".chat").append(result.text);
                    console.log(result.id);
                    if(last_message_id != result.id){
                        last_message_id = result.id;
                        if(result.id>0){
                            $(".chat").scrollTop($(".chat").get(0).scrollHeight);
                        }
                    }
                     // прокручиваем сообщения вниз
                    load_in_process = false; // говорим что загрузка закончилась, можем теперь начать новую загрузку
                });
        }
    }
    $(document).ready(function (e) {
        $('#messages_form').on('submit', function () {
            var form_data = new FormData();
            var ins = document.getElementById('multiFiles').files.length;
            for (var x = 0; x < ins; x++) {
                form_data.append("files[]", document.getElementById('multiFiles').files[x]);
            }
            $.ajax({
                url: 'uploads.php', // point to server-side PHP script
                dataType: 'text', // what to expect back from the PHP script
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    $('#msg').html(response); // display success response from the PHP script
                },
                error: function (response) {
                    $('#msg').html(response); // display error response from the PHP script
                }
            });
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
