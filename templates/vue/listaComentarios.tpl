{literal}
<section id="listaComentarios">
    <h3> {{titulo}} </h3>
    <ul>
        <li v-for="comentario in comentarios">
            <span> {{comentario.descripcion}} - {{comentario.puntaje}} - {{comentario.username}} </span>
            
            <button v-if="esAdmin" type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar comentario</button>
        </li> 
    </ul>
    <div>
    <select name="ordenar" id="orden">
        <option value="asc">Ascendente</option>
        <option value="desc">Descendente</option>
    </select>
     <button  type="button" class="btn btn-primary" id="btn-ordenar">Cambiar</button>

    </div>
    <span> El promedio es: {{promedio}}</span>
</section>
{/literal}
