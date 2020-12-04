// Variables globales
var xhr;

// Control de eventos
document.addEventListener("readystatechange", cargarEventos, false);

function cargarEventos(evento) {
	if (document.readyState == "interactive") {
		document.getElementById("boton").addEventListener("click", enviar, false);
	}
}
function enviar(evento) {
	evento.target.disabled = true;
	xhr = new XMLHttpRequest();
	xhr.addEventListener("readystatechange", gestionarRespuesta, false);
        xhr.open("POST", "http://localhost/04_post_send/01_Ajax_llamada.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("edad="+document.getElementById("edad").value);
}
function gestionarRespuesta(evento) {
//alert(evento.target.readyState + " - " + evento.target.status);
	if (evento.target.readyState == 4 && evento.target.status == 200) {
//		document.getElementById("encabezado").innerHTML = evento.target.getAllResponseHeaders();
		document.getElementById("datos").innerHTML = evento.target.responseText;
		document.getElementById("boton").disabled = false;
	}
}
