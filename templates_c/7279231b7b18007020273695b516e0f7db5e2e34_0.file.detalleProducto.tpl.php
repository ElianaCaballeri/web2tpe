<?php
/* Smarty version 3.1.33, created on 2019-10-04 03:56:56
  from 'C:\xampp\htdocs\web2\web2tpe\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96a6e88beb36_48378617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7279231b7b18007020273695b516e0f7db5e2e34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\detalleProducto.tpl',
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
function content_5d96a6e88beb36_48378617 (Smarty_Internal_Template $_smarty_tpl) {
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
