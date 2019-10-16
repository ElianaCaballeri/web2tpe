{include 'templates/header.tpl'}
  <h1>{$titulo}</h1>
  <form class="formulario" action="verificar" method="POST">
    <div class="form-group ">
      <label>Usuario</label>
      <input type="text" class="form-control"  name="usuario"  placeholder="usuario">
    
    </div>
    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" class="form-control" name="contraseña"  placeholder="Password">
    </div>
    {if $error}
      <div class="alert alert-danger" role="alert">
        {$error}
      </div>
    {/if}

    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
{include 'templates/footer.tpl'}