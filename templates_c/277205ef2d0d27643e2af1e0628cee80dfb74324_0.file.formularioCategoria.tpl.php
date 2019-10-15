<?php
/* Smarty version 3.1.33, created on 2019-10-10 14:05:13
  from 'C:\xampp\htdocs\web2\web2tpemodificar\templates\formularioCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f1e79066222_38582283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277205ef2d0d27643e2af1e0628cee80dfb74324' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpemodificar\\templates\\formularioCategoria.tpl',
      1 => 1570561927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9f1e79066222_38582283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['nombreUsuario']->value)) {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <div class="container">
            
            <form action="editarCategoria" method="POST">
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>ID</label>
                            <input name="id_categoria" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_tipo;?>
">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea name="descripcion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
" rows="3"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</textarea>
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
