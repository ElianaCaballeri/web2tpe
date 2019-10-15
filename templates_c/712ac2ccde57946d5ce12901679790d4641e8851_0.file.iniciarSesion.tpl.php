<?php
/* Smarty version 3.1.33, created on 2019-10-10 14:00:47
  from 'C:\xampp\htdocs\web2\web2tpemodificar\templates\iniciarSesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f1d6f3df642_78211457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712ac2ccde57946d5ce12901679790d4641e8851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpemodificar\\templates\\iniciarSesion.tpl',
      1 => 1570562030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9f1d6f3df642_78211457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <form class="formulario" action="verificar" method="POST">
    <div class="form-group ">
      <label>Usuario</label>
      <input type="text" class="form-control"  name="usuario"  placeholder="usuario">
    
    </div>
    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" class="form-control" name="contraseña"  placeholder="Password">
    </div>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 Ingrese los datos nuevamente
      </div>
    <?php }?>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
