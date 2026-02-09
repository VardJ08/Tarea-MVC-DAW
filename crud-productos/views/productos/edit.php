<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>

<h1>Editar Producto</h1>

<?php if (!empty($errores)): ?>
<ul style="color:red;">
    <?php foreach ($errores as $e): ?>
        <li><?= $e ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<form method="POST" action="index.php?controller=producto&action=update&id=<?= $producto['id'] ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>"><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?= $producto['stock'] ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="index.php?controller=producto&action=index">⬅ Volver</a>

</body>
</html>
