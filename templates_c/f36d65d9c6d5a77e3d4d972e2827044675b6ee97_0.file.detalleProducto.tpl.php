<?php
/* Smarty version 3.1.33, created on 2019-10-10 14:04:29
  from 'C:\xampp\htdocs\web2\web2tpemodificar\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f1e4dd9a618_90221508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36d65d9c6d5a77e3d4d972e2827044675b6ee97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpemodificar\\templates\\detalleProducto.tpl',
      1 => 1570154120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9f1e4dd9a618_90221508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>
<p>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
<p>Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
<p>Stock: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</p>
<p>Categoria del producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</p>




<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
