{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}
{* Канонический адрес страницы *}
{$canonical="" scope=parent}
{* Шаблон текстовой страницы *}
{if !$user->id>0}
<div class="panel panel-flat">
    <div class="panel-body">


        <!-- Заголовок страницы -->
        <h2 data-page="{$page->id}">{$page->header|escape}</h2>

        <!-- Тело страницы -->
        {$page->body}
    </div>
</div>
{else}
{include file="profile/index.tpl"}
{/if}