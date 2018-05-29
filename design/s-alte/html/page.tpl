{* Шаблон текстовой страницы *}
<div class="panel panel-flat">
    <div class="panel-body">
        {* Канонический адрес страницы *}
        {$canonical="/{$page->url}" scope=parent}

        <!-- Заголовок страницы -->
        <h2 data-page="{$page->id}">{$page->header|escape}</h2>

        <!-- Тело страницы -->
        {$page->body}
    </div>
</div>
