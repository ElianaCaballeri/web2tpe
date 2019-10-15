{include 'templates/header.tpl'}

<h1>{$producto->nombre}</h1>
<p>Descripcion: {$producto->descripcion}</p>
<p>Precio: {$producto->precio}</p>
<p>Stock: {$producto->stock}</p>
<p>Categoria del producto: {$producto->categoria}</p>




{include 'templates/footer.tpl'}