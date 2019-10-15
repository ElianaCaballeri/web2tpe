<?php
/* Smarty version 3.1.33, created on 2019-10-01 22:55:53
  from 'C:\xampp\htdocs\web2\web2tpe\templates\productosCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d93bd59c22918_86241691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c351a70aef91db5158f19437bb3ba3f62d6dcf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\productosCategoria.tpl',
      1 => 1569963352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d93bd59c22918_86241691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;
echo $_smarty_tpl->tpl_vars['categoria']->value;?>
</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosCategoria']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
 <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>   
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
