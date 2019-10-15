<?php
/* Smarty version 3.1.33, created on 2019-10-10 14:04:23
  from 'C:\xampp\htdocs\web2\web2tpemodificar\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f1e47e19ef9_66256423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62823be278361caa758a699ccc541f80a20fdf36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpemodificar\\templates\\productos.tpl',
      1 => 1570562195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9f1e47e19ef9_66256423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li>
        <a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a>
          <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
            <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" name="editar">Editar</a>
            <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" name="borrar">Borrar</a>
          <?php }?> 
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>


  <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" id="insertar">Agregar</button>
    </form>
  <?php }?>
  


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
