const a=document.getElementById("numero1");
const b=document.getElementById("numero2");
const resultado=document.getElementById("resultado");
const resultado2=document.getElementById("resultado2");


function hallar(){
        let numero1=parseFloat(a.value);
        let numero2=parseFloat(b.value);
        let suma;let diferencia;let producto;let division;
        if (numero1>numero2) {
            suma=numero1+numero2;
            diferencia=numero1-numero2;
            resultado.innerText="La suma es: "+suma;
            resultado2.innerText="La diferencia es: "+diferencia;
        }else{
                producto=numero1*numero2;
                division=numero1/numero2;
                resultado.innerText="El producto: "+producto;
                resultado2.innerText="La division es: "+division;  
        }
    
}