<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>

<h1>Crear Producto</h1>

<?php if (!empty($errores)): ?>
<ul style="color:red;">
    <?php foreach ($errores as $e): ?>
        <li><?= $e ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<form method="POST" action="index.php?controller=producto&action=store">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="precio"><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="index.php?controller=producto&action=index">⬅ Volver</a>

</body>
</html>
