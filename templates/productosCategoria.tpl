{include 'templates/header.tpl'}
<h1>{$titulo}{$categoria}</h1>
<ul>
    {foreach from=$productosCategoria item=producto}
        <li>{$producto->nombre}</li>   
    {/foreach}
</ul>
{include 'templates/footer.tpl'}