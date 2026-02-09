<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
</head>
<body>

<h1>Detalle del Producto</h1>

<p><strong>ID:</strong> <?= $producto['id'] ?></p>
<p><strong>Nombre:</strong> <?= $producto['nombre'] ?></p>
<p><strong>Descripción:</strong> <?= $producto['descripcion'] ?></p>
<p><strong>Precio:</strong> <?= $producto['precio'] ?></p>
<p><strong>Stock:</strong> <?= $producto['stock'] ?></p>

<br>
<a href="index.php?controller=producto&action=index">⬅ Volver al listado</a>

</body>
</html>
