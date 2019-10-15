<?php
/* Smarty version 3.1.33, created on 2019-10-04 23:26:33
  from 'C:\xampp\htdocs\web2\web2tpe\templates\detalleCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d97b9091e4508_54855096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d1b19dee6d7abcee4dfdeb1d21407ee208f71a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\detalleCategoria.tpl',
      1 => 1570224389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d97b9091e4508_54855096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;
echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h1>
<p>Descripción: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</p>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</li>

    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
