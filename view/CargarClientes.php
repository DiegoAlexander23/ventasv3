<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Clientes</h1>
        <hr>
        <a href="index.php?accion=guardarcliente">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>dni</th>
                    <th>celular</th>
                    <th>direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once './controller/ClienteController.php';
                    foreach($clientes as $cliente){
                ?>
                <tr>
                    <td><?=$cliente->getIdCliente();?></td>
                    <td><?=$cliente->getNombre();?></td>
                    <td><?=$cliente->getApellidos();?></td>
                    <td><?=$cliente->getDni();?></td>
                    <td><?=$cliente->getCelular();?></td>
                    <td><?=$cliente->getDireccion();?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>