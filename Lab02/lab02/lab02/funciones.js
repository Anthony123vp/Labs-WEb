function informar() {
    document.getElementById('mensaje').innerText = "Comuníquese al 333 4444";
}

function validar() {
    var formulario = document.getElementById('formLogin');
    var user = document.getElementById('usuario').value;
    var pass = document.getElementById('pass').value;
    
    switch (user.toUpperCase()) {
        case 'VISITANTE':
            if (pass != '4567') {
                alert('Contraseña incorrecta');
                return false;
            }
            else {
                // Se establece el atributo "action" del formulario
                // para que se dirija a la página menu1.html
                formulario.setAttribute('action','menu1.html');
                return true;
            }
            break;
        case 'COMPRADOR':
            if (pass != '5678') {
                alert('Contraseña incorrecta');
                return false;
            }
            else {
                // Se establece el atributo "action" del formulario
                // para que se dirija a la página menu2.html
                formulario.setAttribute('action','menu2.html');
                return true;
            }
            break;
        default:
            alert('Usuario no tiene acceso o no está registrado');
            return false();
    }

}