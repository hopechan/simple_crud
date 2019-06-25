<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/MaterializeDesign2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="module" src="assets/js/main.js" defer></script>
    <title>Vista Usuarios</title>
</head>
<body>
    <div class="container">
        <h1><?= $titulo ?></h1>
        <div id="frm">
            <input type="hidden" name="" id="id">
            <div class="input-field col s12 l6">
                <input type="text" id="txtNombre" class="validate">
                <label for="txtNombre">Nombre</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" id="txtApellido" class="validate">
                <label for="txtApellido">Apellido</label>
            </div>
            <button id="btn" value="Ingresar" class="waves-effect waves-light btn-small">Agregar</button>
        </div>
        <br>
        <hr>
        <br><br>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </thead>
                <tbody id="cuerpo"></tbody>
            </table>
        </div>
        <!--<script src="<?= base_url('assets/js/script.js')?>"></script>-->
    </div>
</body>
</html>