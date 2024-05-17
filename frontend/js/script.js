// Interação Modal-Login-Cadastro
// Get the modal
var modalLogin = document.getElementById('id01');
var modalCad = document.getElementById('id02');
function abreFechaCad(){
    modalLogin.style.display = "none";
    modalCad.style.display = "block";
}
function abreFechaLogin(){
    modalLogin.style.display = "block";
    modalCad.style.display = "none";
}
// Interação Agendamento
let ctnAgendar = document.getElementById('agendamento')
let ctnAlterar = document.getElementById('alterar-agenda')
let ctnRelatar = document.getElementById('relatorio')
function agendar(){
    ctnAgendar.style.display = "block"
    ctnAlterar.style.display = "none"
    ctnRelatar.style.display = "none"
}
function alterar(){
    ctnAgendar.style.display = "none"
    ctnAlterar.style.display = "block"
    ctnRelatar.style.display = "none"
}
function gerar(){
    ctnAgendar.style.display = "none"
    ctnAlterar.style.display = "none"
    ctnRelatar.style.display = "block"
}