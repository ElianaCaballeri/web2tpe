{include 'templates/header.tpl'}
<div class='container'>
  <form action='editarPermiso' method='POST' class="col-md-4 offset-md-4 mt-4">
    <h1>{$titulo}</h1>
    <div class="form-group ">
        <select name="esAdmin" class="custom-select">
          <option selected>Permiso: </option>
          <option value="0"> 0  </option>
          <option value="1"> 1  </option>
        </select>
         <input type="hidden" class="form-control" name="id_usuario" value="{$usuario->id_usuario}">   
       
    </div>
    <button type="submit" class="btn btn-primary">Modificar</button>
  </form>
</div>
{include 'templates/footer.tpl'}