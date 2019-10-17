{include 'templates/header.tpl'}
<h1> {$titulo} </h1>
  <ul>
    {foreach from=$productos item=producto}
            <li>
            <a href="detalleProducto/{$producto->id_producto}">{$producto->nombre}</a>({$producto->categoria})
            {if isset($nombreUsuario)} 
              <a href="editarProducto/{$producto->id_producto}" name="editar">Editar</a>
              <a href="eliminarProducto/{$producto->id_producto}" name="borrar">Borrar</a>
            {/if}
            </li>
    {/foreach}
  </ul>


{if isset($nombreUsuario)} 
  <form  class="formulario"action="nuevoProducto" method="POST">
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" name="nombre"class="form-control" id="nombre">
    </div>
    <div class="form-group">
      <label>Descripción</label>
      <textarea name="descripcion"class="form-control" id="descripcion" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Precio</label>
      <input type="number" name="precio" class="form-control" id="precio">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Stock</label>
      <input type="number"name="stock" class="form-control" id="stock">
    </div>
    <div class="form-group">
      <label>Categoria</label>
      <select name="categoria"class="form-control" id="categoria">
      {foreach from=$categorias item=categoria}
        <option value="{$categoria->id_tipo}">{$categoria->nombre}</option>
      {/foreach}
      </select>
    </div>
    <button type="submit" class="btn btn-primary" id="insertar">Agregar</button>
  </form>
{/if}
{include 'templates/footer.tpl'}



