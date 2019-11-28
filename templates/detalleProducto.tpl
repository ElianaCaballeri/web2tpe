{include 'templates/header.tpl'}

<input id="id_producto" type="hidden" class="form-control" value="{$producto->id_producto}">
<input id="id_usuario" type="hidden" class="form-control" value="{$id_usuario}">
<input id="esAdmin" type="hidden" class="form-control" value="{$esAdmin}">

<h1>{$producto->nombre}</h1>
<p>Descripcion: {$producto->descripcion}</p>
<p>Precio: {$producto->precio}</p>
<p>Stock: {$producto->stock}</p>
<p>Categoria del producto: {$producto->categoria}</p>

{if !empty($imagenes)}
    {foreach from=$imagenes item=imagen}
        <div><img src= "{$imagen->ruta}"></div>
        {if ($esAdmin)}
        <a href="eliminarImagen/{$imagen->id_imagen}">Borrar imagen</a>
        {/if}
    {/foreach}
{else}
    <p>Este producto no tiene imagen</p>
{/if}

<div id="comentario">
    {include 'templates/vue/listaComentarios.tpl'}
</div>


{if isset($nombreUsuario)}
<form class="formulario">
    <div class="col">
        <div class="form-group">
            <label>Comentario</label>
            <textarea name="comentario" id="descripcion" class="form-control" rows="3"></textarea>
        </div>
    </div>
    <select name="puntaje" class="custom-select" id="puntaje">
        <option selected>Calificacion: </option>
        <option value="1"> 1 - Malo </option>
        <option value="2"> 2 - Regular </option>
        <option value="3"> 3 - Bueno </option>
        <option value="4"> 4 - Muy Bueno </option>
        <option value="5"> 5 - Excelente </option>
    </select>
    <button type="submit" id="btn-agregar" class="btn btn-primary">Comentar</button>
</form>
{/if}

<script src="js/comentario.js"></script>

{include 'templates/footer.tpl'}