<?php
/* Smarty version 3.1.33, created on 2019-10-05 00:09:58
  from 'C:\xampp\htdocs\web2\web2tpe\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97c3364a5284_46623971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4208ce4d8aff57bca379d853a8cbf3cca21202bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\formulario.tpl',
      1 => 1570226963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d97c3364a5284_46623971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form  class="formularioEnvio" action= "editarProducto" method="POST">
  <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" id="nombre">
  </div>
   <label >ID</label>
    <input type="text" name="id_producto"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" id="id_producto">
  </div>
  <div class="form-group">
    <label>Descripción</label>
    <textarea name="descripcion"class="form-control" id="descripcion"value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
" rows="3"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Precio</label>
    <input type="number" name="precio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" id="precio">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Stock</label>
    <input type="number"name="stock" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
" id="stock">
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
" <?php if (($_smarty_tpl->tpl_vars['categoria']->value->id_tipo == $_smarty_tpl->tpl_vars['producto']->value->id_tipo_fk)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <button type="submit"  class="btn btn-primary">Actualizar</button>
  </form>
  <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
