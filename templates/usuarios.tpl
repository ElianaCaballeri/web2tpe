{include 'templates/header.tpl'}
<h1> {$titulo} </h1>
  <ul>
    {foreach from=$usuarios item=usuario}
            <li>{$usuario->username}
                {if ($esAdmin)} 
                <a href="editarPermiso/{$usuario->id_usuario}" name="editar">Otorgar permiso</a>
                <a href="eliminarUsuario/{$usuario->id_usuario}" name="borrar">Borrar</a>
                {/if}
            </li>
    {/foreach}
  </ul>
  
  {include 'templates/footer.tpl'}