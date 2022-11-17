var contenedor = [];

$('#btn-1').on('click',function(){

    var nombre = $('#nombre').val();
    var paterno = $('#A-paterno').val();
    var materno = $('#A-materno').val();
    var numero = $('#num-person').val();
    var correo = $('#correo').val();

    var cliente = {
        "Nombre del cliente": nombre,
        "Apellido paterno": paterno,
        "Apellido materno": materno,
        "Numero de personas reservadas":numero,
        "Correo del cliente": correo
    };

    alert("Usuario " + nombre + " Registrado en consola satisfactoriamente ;3" + cliente);
    contenedor.push(nombre);
    contenedor.push(paterno);
    contenedor.push(materno);
    contenedor.push(numero);
    contenedor.push(correo);

    console.log(cliente);
    console.log("\n");
    console.log(contenedor);
})

$('#btn-2').on('click',function(){
    var comida = parseInt($('#comida').val());
    var bebida = parseInt($('#bebida').val());

    if(contenedor.length == 0){
        alert("No se ha registrado ningún platillo :¨(");
    }else if(contenedor.length == 5){
        alert("Tu cuenta final es de " + (comida + bebida) + " pesos ;3");
    }
})

$('#btn-3').on('click',function(){

    if(contenedor.length == 0){
        alert("No se ha realizado ningún registro de reserva :¨(");

    }else if (contenedor.length == 5){
        function random(min, max) {
            return Math.floor((Math.random() * (max - min + 1)) + min);
        }
    
        var codigo = random(1,99);
        var codigo2 = random(1,99);
    
        alert("Tu codigo de registro es: " + "superFood" + codigo + codigo2);
    }
})




