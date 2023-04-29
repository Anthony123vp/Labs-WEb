const txtnombre = document.getElementById("nombre");
const txtemail = document.getElementById("email");
const resultado1= document.getElementById("resultado1");
const resultado2= document.getElementById("resultado2");

function EnviarDatos(){
    nombre=txtnombre.value;
    email=txtemail.value;
    resultado1.innerText = "Nombre: "+nombre;
    resultado2.innerText = "Email: "+email;
}