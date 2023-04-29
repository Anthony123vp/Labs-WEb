const edad=document.getElementById("txtEdad");
const names=document.getElementById("txtName");
const email=document.getElementById("txtEmail");
const direction=document.getElementById("txtDirection");

function Submit(){
    let edadF=edad.value;
    if(edadF<18){
        alert("Solo se admiten usuarios mayores de edad");
        return false;
    }
    return true;
}

function Limpiar(){
    edad.value="";
    names.value="";
    email.value="";
    direction.value="";

}