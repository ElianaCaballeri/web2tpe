{include 'templates/header.tpl'}
<h1>{$titulo}{$categoria->nombre}</h1>
<p>Descripción: {$categoria->descripcion}</p>
<ul>
{foreach from=$productos item=producto}
    <li>{$producto->producto}</li>

    
{/foreach}
</ul>

{include 'templates/footer.tpl'}