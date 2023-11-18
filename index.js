/*Mostrar FORMULARIO*/
function user() {
    var crear = document.getElementById("crear");
    crear.hidden = false;
    var iniciar = document.getElementById("iniciar");
    iniciar.hidden = false;
    var hi = document.getElementById("formulario");
    hi.hidden = false;
}

/*Mostrar registro*/
function crear() {
  var no = document.getElementById("formulario")
  no.hidden = false;
  var go = document.getElementById("reg");
  go.hidden = false;
  var doee= document.getElementById("sec");
  doee.hidden = true;
}

/*Mostrar inicio*/
function iniciar() {
  var gon = document.getElementById("formulario");
  gon.hidden = false;
  var es = document.getElementById("reg");
  es.hidden = true;
  var pre = document.getElementById("sec");
  pre.hidden = false;
}

/*Cerrar formulario*/
function cerr() {
  var go = document.getElementById("formulario");
  go.hidden = true;
  var crear = document.getElementById("crear");
  crear.hidden = true;
  var iniciar = document.getElementById("iniciar");
  iniciar.hidden = true;
}

/*Mostrar menu*/
function inicio() {
    var menu = document.getElementById("extras");
    menu.hidden = false;
}
/*Ocultar menu*/
function entrar() {
  var menu = document.getElementById("extras");
  menu.hidden = true;

}

/*Mostrar sobre Nosotros*/
function supo() {
  var parabrir = document.getElementById("nosotros");
  var prs = document.getElementById("ocultar");
  var so = document.getElementById("mostra");
  so.hidden = true;
  parabrir.hidden = false;
  prs.hidden = false;
}

/*Boton de ocultar sobre Nosotros*/
function ocultar() {
  var par = document.getElementById("nosotros");
  var ps = document.getElementById("mostra");
  var os = document.getElementById("ocultar");
  par.hidden = true;
  ps.hidden = false;
  os.hidden = true;
}
/*Boton de mostrar sobre Nosotros*/

function mostra() {
  var par = document.getElementById("nosotros");
  var ps = document.getElementById("mostra");
  var os = document.getElementById("ocultar");
  par.hidden = false;
  ps.hidden = true;
  os.hidden = false;
}



//Añadido recientemente





/*Cambio de texto*/
/*Cambia el rol de cada uno por su el nombre dandole una tonalidad de color azul*/
function adm(id) {
  id.innerHTML = "WNieve";
  id.style.color = "blue";
}
function fund(id) {
  id.innerHTML = "Emanuel Gutierrez";
  id.style.color = "blue";
}
/*Mantiene un color verde de los encargados de la pagina al mantener el cursor fuera de el*/
function dod(id) {
  id.innerHTML = "ADMIN";
  id.style.color = "green";
}
function doc(id) {
  id.innerHTML = "FUNDADOR";
  id.style.color = "green";
}
/*Cambia el texto del Fundador y Admin por sus numeros telefonicos*/
function te(id) {
  id.innerHTML = "+54 9 2616 24-0806";
  id.style.color = "red";

}
function t(id) {
  id.innerHTML = "+54 9 2616 41-2805";
  id.style.color = "red";
}
