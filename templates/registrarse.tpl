{include 'templates/header.tpl'}
<div class='container'>
  <form action='registrarLogueo' method='POST' class="col-md-4 offset-md-4 mt-4">
    <h1>{$titulo}</h1>
    <div class="form-group ">
        <label>Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">   
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="clave" placeholder="Password">
      </div>
      {if $error}
       <div class="alert alert-danger" role="alert">
        {$error} Ingrese los datos nuevamente
      </div>
      {/if}
      <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
</div>
{include 'templates/footer.tpl'}
