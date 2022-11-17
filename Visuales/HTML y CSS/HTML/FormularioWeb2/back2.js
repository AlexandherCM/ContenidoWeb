function limpiar(){
    document.getElementById('El-Formulario').reset();
    alert("Datos vacíos");
}

console.log("Hola bro \n");

$('#btn-envio').on('click', function(){
    if($('#edad').val() < 18){
        alert("No puede mandar el formulario un menor de edad");
    }else{
        $.ajax({
            type: "POST",
            url: 'http://lindo-y-querido.com/',
            data: $('#form').serialize(),
            dataType: 'json'
          });
    }
});

var usuario1 = {
    Nombre : "Alexandher",
    Apellido :"Cordoba",
    Edad: 19,
    Canción_Favorita: "Me enamore de una mujer casada"
}

var contenedor = [1,2,3,4]

console.log(contenedor[1]);
console.log(usuario1["Nombre"]);
console.log(usuario1["Apellido"]);
console.log(usuario1["Edad"]);
console.log(usuario1["Canción_Favorita"]);


/* $('#envio').on('submit', function(){
    if($('#edad').val() < 18){
        alert('¡No puede enviar sus datos un menor de edad! >:(');
    }
    else if($('#edad').val() >= 100){
        alert('¡El campo edad no permite un dato igual o mayor a 100 años! >:(');
    }else{
        $.ajax({
          type: "POST",
          url: 'http://lindo-y-querido.com/',
          data: $('#El-Formulario').serialize(),
          dataType: 'json'
        });
        alert('¡Datos enviados satisfactoriamente a http://lindo-y-querido.com/! :)');
    }
}); */

/* function condiciones(){
    var respuesta = parseInt(document.getElementById('edad').value);

    if(respuesta < 18){
        alert("!No puede enviar sus datos un menor de edad¡ >:(")
    }else if(respuesta >= 100){
        alert("!El campo edad no permite un numero mayor a 100 años¡ >:(")
    }else{
        alert("!formulario enviado satisfactoriamente¡ :)")
    }
}  */

/* $('#envio').on('click', function(){
    if($('#edad').val() < 18){
        alert('¡No puede enviar sus datos un menor de edad! >:(');
    }
    else if($('#edad').val() == 100){
        alert('¡El dato de 100 años no es permitido! >:(');
    }else{
        $.ajax({
          type: "POST",
          url: 'http://lindo-y-querido.com/',
          data: $('#El-Formulario').serialize(),
          dataType: 'json'
        });
        alert('¡Datos enviados satisfactoriamente a http://lindo-y-querido.com/! :)');
    }
}); */




