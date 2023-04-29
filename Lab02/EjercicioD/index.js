const a=document.getElementById("nota1");
const b=document.getElementById("nota2");
const c=document.getElementById("nota3");
const resultado=document.getElementById("resultado");

function promedio(){
    let nota1=parseFloat(a.value);
    let nota2=parseFloat(b.value);
    let nota3=parseFloat(c.value);
    let promedio=(nota1+nota2+nota3)/3;
    if (promedio>=4) {
        resultado.innerText="APROBADO!!!";
    } else {
        resultado.innerText="DESAPROBADO!!";
        
    }
}