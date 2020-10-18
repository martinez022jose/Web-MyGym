var botonEnviarFormulario = document.getElementById("buttonEnviar");
var resFormulario = document.querySelector('section form .resFormulario');



botonEnviarFormulario.addEventListener('click',validarEnvioMail);

function validarEnvioMail(){
    const nombre = document.getElementById("nombre").value;
    const  apellido = document.getElementById("apellido").value;
    const  email = document.getElementById("email").value;
    const  mensaje = document.getElementById("mensaje").value;
    const  datosAEnviar='nombre='+nombre+'&apellido='+apellido+'&email='+email+'&mensaje='+mensaje;
    resFormulario.innerHTML = '';
    var xhttp = new XMLHttpRequest();

    xhttp.open("POST","validacionMail.php",true);
    xhttp.onreadystatechange = function(){
        if(xhttp.status == 200 && xhttp.readyState == 4){
            var mensaje = xhttp.responseText;
            resFormulario.innerHTML += mensaje
        }
    }

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(datosAEnviar);
    

}