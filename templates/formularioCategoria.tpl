{include 'templates/header.tpl'}
{if isset($nombreUsuario)} 
    <h1>{$titulo}</h1>
    <div class="container">
        <form action="editarCategoria" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" value="{$categoria->nombre}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>ID</label>
                        <input name="id_categoria" type="hidden" class="form-control" value="{$categoria->id_tipo}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea name="descripcion" class="form-control" value="{$categoria->descripcion}" rows="3">{$categoria->descripcion}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
{/if} 
{include 'templates/footer.tpl'}