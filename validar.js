let iniciar;
document.getElementById("iniciar").addEventListener("click",Moverse);
document.getElementById("Registrarse").addEventListener("click", function() {
     alert("Registrado correctamente!");
   });
function Moverse(){
     document.getElementById("Login").style.bottom="300px";
     document.getElementById("Login").style.opacity=".80";
     document.getElementById("registro").style.opacity=".01";
}

