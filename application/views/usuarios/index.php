<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Usuarios</title>
</head>
<body>
    <h1><?= $titulo ?></h1>
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
    <script src="<?= base_url('assets/js/script.js')?>"></script>
</body>
</html>