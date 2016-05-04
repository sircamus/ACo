

function validateForm()
{
  var nombreC=document.getElementById("nombre").className;
  var nombreV=document.getElementById("nombre").value;
  var emailC=document.getElementById("email").className;
  var emailV=document.getElementById("email").value;
  var asuntoC=document.getElementById("asunto").className;
  var asuntoV=document.getElementById("asunto").value;
  var mensajeC=document.getElementById("mensaje").className;
  var mensajeV=document.getElementById("mensaje").value;

  if (nombreC != "sm-form-control required error" && nombreV !== "" &&
    emailC != "required email sm-form-control error" && emailV !== "" &&
    asuntoC != "required sm-form-control error" && asuntoV !== "" &&
    mensajeC != "required sm-form-control error" && mensajeV !== "" ){

    alert("¡Mensaje enviado! Pronto nos comunicaremos contigo");
  location.reload();
}

}

