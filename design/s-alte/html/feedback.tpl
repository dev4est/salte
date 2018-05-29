{* Страница с формой обратной связи *}
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-flat">
        <div class="panel-body">

            {* Канонический адрес страницы *}
            {$canonical="/{$page->url}" scope=parent}

            <h2>{$page->name|escape}</h2>

            {$page->body}


            {if $message_sent}
                {$name|escape}, ваше сообщение отправлено.
            {else}
                <form class="form feedback_form" method="post">
                    {if $error}
                        <div class="message_error">
                            <p class="help-block help-block-error">
                            {if $error=='captcha'}
                                Неверно введена капча
                            {elseif $error=='empty_name'}
                                Введите имя
                            {elseif $error=='empty_email'}
                                Введите email
                            {elseif $error=='empty_text'}
                                Введите сообщение
                            {/if}</p>
                        </div>
                    {/if}
                    <div class="form-group field-contactform-name {if $error}required has-error{/if}">
                        {if $error=='empty_name'}<p class="help-block help-block-error">Необхідно заповнити "Ім'я".</p>{/if}
                        <label class="control-label" for="contactform-name">Ім'я</label>
                        <input data-format=".+" class="form-control" data-notice="Введіть Ім'я" value="{$name|escape}" name="name" maxlength="255"
                               type="text"/>

                    </div>
                    <div class="form-group field-contactform-name {if $error}required has-error{/if}">
                        {if $error=='empty_email'}
                        <p class="help-block help-block-error">Необхідно заповнити "Email".</p>
                        {/if}
                        <label class="control-label" for="contactform-name">Email</label>
                        <input data-format="email" data-notice="Введіть email" value="{$email|escape}" name="email"
                               maxlength="255" type="text" class="form-control"/>

                    </div>
                    <div class="form-group field-contactform-name {if $error}required has-error{/if}">
                        {if $error=='empty_text'}<p class="help-block help-block-error">Необхідно заповнити "Текст повідомлення".</p>{/if}
                        <label class="control-label" for="contactform-name">Текст повідомлення</label>
                        <textarea data-format=".+" data-notice="Введите сообщение" value="{$message|escape}"
                                  name="message" class="form-control">{$message|escape}</textarea>

                    </div>
                    <div class="form-group field-contactform-name">
                        <div class="captcha">
                            <img src="captcha/image.php?{math equation='rand(10,10000)'}"/>
                            <input class="form-control" id="comment_captcha" type="text" name="captcha_code" value=""
                               data-format="\d\d\d\d" data-notice="Введите капчу" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="feedback" name="contact-button">Надіслати</button>
                    </div>

                </form>
            {/if}
        </div>
    </div>
</div>
</div>

<style>
   #comment_captcha {
        width: 300px;
        float: right;
    }
</style>