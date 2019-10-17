{include 'templates/header.tpl'}
    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categorias item=categoria}
        <li>
        
            <a href="detalleCategoria/{$categoria->id_tipo}">{$categoria->nombre}</a>
            
            {if isset($nombreUsuario)} 
                <a href="editarCategoria/{$categoria->id_tipo}">Editar</a>
                <a href="eliminarCategoria/{$categoria->id_tipo}">Eliminar</a>
            {/if}
        </li>
        {/foreach}
    </ul>

    {if isset($nombreUsuario)} 
        <div class="container">
            <form action="nuevaCategoria" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea name="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    {/if}

{include 'templates/footer.tpl'}