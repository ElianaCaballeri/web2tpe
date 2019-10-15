<?php
/* Smarty version 3.1.33, created on 2019-10-08 21:17:33
  from 'C:\xampp\htdocs\web2\web2tpe\templates\iniciarSesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ce0cd022c41_81714665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872cc0983c79066a513a12c975be6aed24883fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\iniciarSesion.tpl',
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
function content_5d9ce0cd022c41_81714665 (Smarty_Internal_Template $_smarty_tpl) {
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
