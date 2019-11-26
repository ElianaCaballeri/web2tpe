<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{$basehref}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Natural food store</title>
</head>
<body>
      <div class="imagenPortada"><img class="portada" src="img/portada-alimentos.jpg" alt="portada de alimentos saludables"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav auto">
              <li class="nav-item active col-md-3">
                <a class="nav-link" id="" href="home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active col-md-3">
                <a class="nav-link" id="" href="categorias">Categorias <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active col-md-3">
                <a class="nav-link" id="" href="productos">Productos</a> <span class="sr-only">(current)</span></a>
              </li>
              {if ($esAdmin)}
                <li class="nav-item active col-md-3">
                  <a class="nav-link" id="" href="usuarios">Usuarios</a> <span class="sr-only">(current)</span></a>
                </li>
              {/if}
              {if !isset ($nombreUsuario)} 
                <li class="nav-item active col-md-3">
                  <a class="nav-link" id="" href="login">Iniciar Sesion</a> <span class="sr-only">(current)</span></a>
                </li>
              {/if}
              {if !isset ($nombreUsuario)} 
                <li class="nav-item active col-md-3">
                  <a class="nav-link" id="" href="registrarLogin">Registrarse</a> <span class="sr-only">(current)</span></a>
                </li>
              {/if}
              {if isset ($nombreUsuario)}
                <li class="navbar-nav ml-auto col-md-3">
                  <span class="navbar-text">{$nombreUsuario}</span>
                  <a class="nav-item nav-link" href="salir">Salir</a>
                </li>
              {/if}

            </ul>
          </div>
        </nav>
      </div>