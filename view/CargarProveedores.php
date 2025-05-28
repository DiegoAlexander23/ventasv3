<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Porveedores</h1>
        <hr>
        <a href="index.php?accion=guardarproveedor">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ruc</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($proveedores as $pro){
                ?>
                <tr>
                    <td><?=$pro->gerIdProveedor()?></td>
                    <td><?=$pro->getNombre()?></td>
                    <td><?=$pro->getRuc()?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>