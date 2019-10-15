{include 'templates/header.tpl'}
 {if isset($nombreUsuario)}
    <h1>{$titulo}</h1>
    <form  class="formularioEnvio" action= "editarProducto" method="POST">
      <div class="form-group">
        <label >Nombre</label>
        <input type="text" name="nombre"class="form-control" value="{$producto->nombre}" id="nombre">
      </div>
      <label >ID</label>
        <input type="text" name="id_producto"class="form-control" value="{$producto->id_producto}" id="id_producto">
      </div>
      <div class="form-group">
        <label>Descripción</label>
        <textarea name="descripcion"class="form-control" id="descripcion"value="{$producto->descripcion}" rows="3">{$producto->descripcion}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Precio</label>
        <input type="number" name="precio" class="form-control" value="{$producto->precio}" id="precio">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Stock</label>
        <input type="number"name="stock" class="form-control" value="{$producto->stock}" id="stock">
      </div>
      <div class="form-group">
        <label>Categoria</label>
        <select name="categoria"class="form-control" id="categoria">
        {foreach from=$categorias item=categoria}
          <option value="{$categoria->id_tipo}" {if ($categoria->id_tipo == $producto->id_tipo_fk)} selected {/if}>{$categoria->nombre}</option>
        {/foreach}
        </select>
      </div>
      <button type="submit"  class="btn btn-primary">Actualizar</button>
    </form>
  {/if}
{include 'templates/footer.tpl'}