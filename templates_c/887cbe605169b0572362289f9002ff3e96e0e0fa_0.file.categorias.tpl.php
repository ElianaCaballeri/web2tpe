<?php
/* Smarty version 3.1.33, created on 2019-10-08 21:18:04
  from 'C:\xampp\htdocs\web2\web2tpe\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ce0ec279a35_52652772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '887cbe605169b0572362289f9002ff3e96e0e0fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\categorias.tpl',
      1 => 1570561941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9ce0ec279a35_52652772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
            <li>
                <a href="detalleCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
                <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
                    <a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_tipo;?>
">Editar</a>
                    <a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_tipo;?>
">Eliminar</a>
                <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>

    <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
        <div class="container">
        
            <form action="nuevaCategoria" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea name="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
        
            </form>
        </div>
    <?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
