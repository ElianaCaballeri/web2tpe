document.addEventListener("DOMContentLoaded",function(){
"use strict"

let app = new Vue({
    el: "#listaComentarios",
    data: {
        titulo: "Lista de Comentarios",
        comentarios: [],
        esAdmin:0
    },
    methods:{
        eliminarComentario: function(event,id_comentario){
            fetch('api/comentarios/' + id_comentario,{
                "method":"DELETE",
            })
            .then(response=>response.json())
            .then(json=>{
                obtenerComentarios();
                alert("El comentario fue borrado exitosamente!")
            })
            .catch(error=>console.log(error));
        }
    }
});

function obtenerComentarios(){
    let id=document.querySelector("#id_producto").value;
    let esAdmin=document.querySelector("#esAdmin").value;
    fetch('api/comentarios?id_producto='+id)
    .then(response=>response.json())
    .then(comentarios=>{
        console.log(comentarios)
        app.comentarios=comentarios
        app.esAdmin = esAdmin
    })
    .catch(error=>console.log(error))
}

function agregarComentario (){
    let comentario={
        "descripcion": document.querySelector("#descripcion").value,
        "puntaje": document.querySelector("#puntaje").value,
        "id_producto": document.querySelector("#id_producto").value,
        "id_usuario": document.querySelector("#id_usuario").value
    }
    
    fetch('api/comentarios',{
        "method":"POST",
        "headers":{"Content-Type":"application/json"},
        "body":JSON.stringify(comentario)
    })
    .then(response=>response.json())
    .then(coment=>{
        console.log(coment);
        //obtenerComentarios();
    });
}

let agregar=document.querySelector("#btn-agregar");
if (agregar!=null){
    agregar.addEventListener("click", agregarComentario);
}

obtenerComentarios();

});