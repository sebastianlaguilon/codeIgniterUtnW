<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <h1>Listado de Productos</h1>

    <a href="<?= base_url('pelicula/new'); ?>">Crear</a>

    <table>

    <tr>
        <th>
            ID
        </th>
        <th>
            Titulo
        </th>
        <th>
            descripcion
        </th>
        <th>
            Opciones
        </th>
    </tr>

        <?php foreach ($productos as $key => $p) : ?>
            <tr>
            <td><?= $p['id'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href=<?= base_url('producto/show/'); ?><?= $p['id'] ?> >Show</a>
                    <a href="/pelicula/edit/<?= $p['id'] ?>" >Edit</a>
                    <a href="/pelicula/remove/<?= $p['id'] ?>" >Eliminar</a>      
                </td>
            </tr>
        <?php endforeach ?>

    </table>

</body>

</html>