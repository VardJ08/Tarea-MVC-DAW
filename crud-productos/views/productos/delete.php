<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Producto</title>
</head>
<body>

<h1>Confirmar Eliminación</h1>

<p>¿Seguro que deseas eliminar el producto <strong><?= $producto['nombre'] ?></strong>?</p>

<a href="index.php?controller=producto&action=destroy&id=<?= $producto['id'] ?>">✅ Sí, eliminar</a>
|
<a href="index.php?controller=producto&action=index">❌ Cancelar</a>

</body>
</html>
