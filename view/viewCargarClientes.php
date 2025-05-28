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
                    require './controller/ClienteController.php';
                    foreach($clientes as $cli){
                ?>
                <tr>
                    <td><?=$cli->getIdCliente()?></td>
                    <td><?=$cli->getNombre()?></td>
                    <td><?=$cli->getApellidos()?></td>
                    <td><?=$cli->getDni()?></td>
                    <td><?=$cli->getCelular()?></td>
                    <td><?=$cli->getDireccion()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>