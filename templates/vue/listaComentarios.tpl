{literal}
<section id="listaComentarios">
    <h3> {{titulo}} </h3>
    <ul>
        <li v-for="comentario in comentarios">
            <span> {{comentario.descripcion}} - {{comentario.puntaje}} - {{comentario.username}} </span>
            
            <button v-if="esAdmin" type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar comentario</button>
        </li> 
    </ul>
    <span> El promedio es: {{promedio}}</span>
</section>
{/literal}
