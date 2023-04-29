const numero1=document.getElementById("numero1");
const numero2=document.getElementById("numero2");
const numero3=document.getElementById("numero3");
const numero4=document.getElementById("numero4");
const resultado1=document.getElementById("resultado1");
const resultado2=document.getElementById("resultado2");

function hallar(){
    resultado1.innerText="La suma es: "+ (parseFloat(numero1.value)+parseFloat(numero2.value));
    resultado2.innerText="La adiciones: "+ (numero3.value*numero4.value);
}
