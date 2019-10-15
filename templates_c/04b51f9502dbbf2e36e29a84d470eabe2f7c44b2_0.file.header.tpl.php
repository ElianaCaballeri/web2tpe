<?php
/* Smarty version 3.1.33, created on 2019-10-10 14:45:18
  from 'C:\xampp\htdocs\web2\web2tpemodificar\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f27def2d1e4_77968157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b51f9502dbbf2e36e29a84d470eabe2f7c44b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpemodificar\\templates\\header.tpl',
      1 => 1570711236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f27def2d1e4_77968157 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
              <?php if (!isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
                <li class="nav-item active col-md-3">
                  <a class="nav-link" id="" href="login">Iniciar Sesion</a> <span class="sr-only">(current)</span></a>
                </li>
              <?php }?>
              <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
              <li class="navbar-nav ml-auto  col-md-3">
                <span class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
</span><a class="nav-item nav-link" href="logout">Salir</a>
              </li>
              <?php }?>
            </ul>
                  
          </div>
    </nav>
  </div><?php }
}
