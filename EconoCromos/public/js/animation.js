function aparecerLogin(e){
    e.preventDefault();
    $('#obscurecer').fadeIn(100, mostrarLogin);
}
function aparecerForm(e){
    e.preventDefault();
    $('#login').fadeOut(100);
    $('#registrar').fadeIn(300);
    $('#obscurecer').click (desaparecerForm)
}

function aparecerCromo(e){
    e.preventDefault(); 
    $('#obscurecer').fadeIn(100, mostrarcromo)
}
function desapareceRegistro(){
    $('#obscurecer').fadeOut();

}
function desaparecerLogin(){
    $('#login').fadeOut(300, desapareceRegistro);
}
function mostrarLogin(){
    $('#login').fadeIn();
    $('#obscurecer').click (desaparecerLogin)
}

function desaparecerForm(){
    $('#registrar').fadeOut(300, desapareceRegistro);
}

function mostrarcromo(){
    $('#cromo').fadeIn(300);
    $('#obscurecer').click (desaparecerCromo)
}
function desaparecerCromo(){
    $('#cromo').fadeOut(300);
    $('#obscurecer').fadeOut();
}
function mostrarLoginRegistro(){
    $('#activarLogin').click(aparecerLogin);
    $('#activarRegistro').click(aparecerForm);
    $('#activarCromo').click(aparecerCromo);
}
$(document).ready (mostrarLoginRegistro)