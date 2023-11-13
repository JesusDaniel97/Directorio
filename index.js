let iniciar;
document.getElementById("iniciar").addEventListener("click",Moverse);
document.getElementById("Sesion").addEventListener("click",ValidarDatos);
document.getElementById("Registrarse").addEventListener("click", function() {
     alert("Registrado correctamente!");

function Moverse(){
     document.getElementById("Login").style.bottom="300px";
     document.getElementById("Login").style.opacity=".80";
     document.getElementById("registro").style.opacity=".01"
     
}

function ValidarDatos(){
     let usuario = document.forms["login"]["name"].value;
     let contrasenia = document.forms["login"]["contrasenia"].value

     if(usuario != "DavidCamacho" || contrasenia != 14789){
          window.alert("contraseña incorrecta ");
     }
}
                                                        
