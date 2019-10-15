<?php
/* Smarty version 3.1.33, created on 2019-10-08 15:10:21
  from 'C:\xampp\htdocs\web2\web2tpe\templates\formularioCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9c8abddcbf52_40026067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af898e197a5c2887b4dbb5846398693f3182504b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe\\templates\\formularioCategoria.tpl',
      1 => 1570245033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9c8abddcbf52_40026067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
