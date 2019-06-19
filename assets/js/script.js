window.addEventListener('load', recargar);

function recargar() {
    var peticion = new XMLHttpRequest();
    console.log('entra a la funcion');
    peticion.onreadystatechange = function () { 
        console.log('se hace la peticion');
        if (this.readyState == 4) {
            document.getElementById('cuerpo').innerHTML = this.responseText;
        }
     };
     peticion.open('GET', 'usuarios/recargar');
     peticion.send();
}