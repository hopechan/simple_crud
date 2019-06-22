window.addEventListener('load', recargar);

function recargar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
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

function accion() {
    var id = document.getElementById('id').value;
    let nombre = document.getElementById('txtNombre').value;
    let apellido = document.getElementById('txtApellido').value;
    var peticion = new XMLHttpRequest();
    if (nombre == '' || apellido == '') {
        alert('estan vacios >:v');
        return;
    }
    peticion.onreadystatechange = function () { 
        if (this.readyState == 4) {
            document.getElementById('cuerpo').innerHTML = this.responseText;
            recargar();
            limpiar();
            document.getElementById('btn').value = 'Ingresar';
            document.getElementById('btn').innerHTML = "Agregar";
        }
     };
     var datos = `nombre=${nombre}&apellido=${apellido}`;
     if (this.value == 'editar') {
        datos += `&id=${id}`;
     }
     console.log(datos);
     
     peticion.open('POST', `usuarios/${this.value}`);
     peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
     peticion.send(datos);
}

function actualizar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (this.readyState == 4) {
            document.getElementById('frm').innerHTML = this.responseText;
            recargar();
        }
     };
     peticion.open('GET', `usuarios/getById/${this.value}`);
     peticion.send();
}

function eliminar() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (this.readyState == 4) {
            recargar();
        }
     };
     peticion.open('GET', `usuarios/delete/${this.value}`);
     peticion.send();
}

function limpiar() {
    document.getElementById('txtNombre').value = '';
    document.getElementById('txtApellido').value = '';
}