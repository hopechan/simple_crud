window.addEventListener('load', recargar);

function recargar() {
    var peticion = new XMLHttpRequest();
    console.log('entra a la funcion');
    peticion.onreadystatechange = function () { 
        console.log('se hace la peticion');
        if (this.readyState == 4) {
            document.getElementById('cuerpo').innerHTML = this.responseText;
            asignarEventos();
        }
     };
     peticion.open('GET', 'usuarios/recargar');
     peticion.send();
}
//controladores de eventos
function asignarEventos() {
    document.getElementById('btn').addEventListener('click', accion);
    var btnEdit = document.getElementsByClassName('btnEditar');
    var btnElim = document.getElementsByClassName('btnEliminar');

    for (let i = 0; i < btnEdit.length; i++) {
        btnEdit[i].addEventListener('click', actualizar);
        btnElim[i].addEventListener('click', eliminar);
    }
}

function accion(params) {
    console.log('boton agregar');
    let nombre = document.getElementById('txtNombre').value;
    let apellido = document.getElementById('txtApellido').value;
    var peticion = new XMLHttpRequest();
    if (nombre == '' && apellido == '') {
        alert('estan vacios >:v');
        return;
    }
    console.log('entra a la funcion');
    peticion.onreadystatechange = function () { 
        console.log('se hace la peticion');
        if (this.readyState == 4) {
            document.getElementById('cuerpo').innerHTML = this.responseText;
            recargar();
            limpiar();
        }
     };
     peticion.open('POST', 'usuarios/ingresar');
     peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
     peticion.send(`nombre=${nombre}&apellido=${apellido}`);
     console.log('se envio datos :v')
}

function actualizar(params) {
    alert('boton actualizar');
}

function eliminar(params) {
    alert('boton eliminar');
}

function limpiar() {
    document.getElementById('txtNombre').value = '';
    document.getElementById('txtApellido').value = '';
}