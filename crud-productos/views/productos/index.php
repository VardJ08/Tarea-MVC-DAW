<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
</head>
<body>

<h1>Inventario de Productos</h1>
<p> Inventario de productos de tienda de CCTV</p>
<a href="index.php?controller=producto&action=create">Agregar Producto</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio ($)</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php while ($row = $productos->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['precio'] ?></td>
        <td><?= $row['stock'] ?></td>
        <td>
            <a href="index.php?controller=producto&action=show&id=<?= $row['id'] ?>">Ver Detalle</a> |
            <a href="index.php?controller=producto&action=edit&id=<?= $row['id'] ?>">Editar</a> |
            <a href="index.php?controller=producto&action=delete&id=<?= $row['id'] ?>">Eliminar</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
