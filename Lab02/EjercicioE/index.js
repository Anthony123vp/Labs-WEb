const numero1=document.getElementById("numero1");
const numero2=document.getElementById("numero2");
const numero3=document.getElementById("numero3");
const resultado=document.getElementById("resultado");
function mayor(){
    let a=parseFloat(numero1.value);
    let b=parseFloat(numero2.value);
    let c=parseFloat(numero3.value  );
    let numeromayor;
    if (a>b) {
        numeromayor=a;
    } else {
        numeromayor=b;
    }

    if(c>numeromayor){
        numeromayor=c;
    }
    resultado.innerText=numeromayor;
}