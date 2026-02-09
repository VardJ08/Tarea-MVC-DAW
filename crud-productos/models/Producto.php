<?php
// models/Producto.php

class Producto {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // LISTAR PRODUCTOS
    public function all() {
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        return $this->conexion->query($sql);
    }

    // OBTENER UN PRODUCTO POR ID
    public function find($id) {
        $sql = "SELECT * FROM productos WHERE id = $id";
        return $this->conexion->query($sql)->fetch_assoc();
    }

    // CREAR PRODUCTO
    public function create($data) {
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $precio = $data['precio'];
        $stock = $data['stock'];

        $sql = "INSERT INTO productos (nombre, descripcion, precio, stock)
                VALUES ('$nombre', '$descripcion', $precio, $stock)";

        return $this->conexion->query($sql);
    }

    // ACTUALIZAR PRODUCTO
    public function update($id, $data) {
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $precio = $data['precio'];
        $stock = $data['stock'];

        $sql = "UPDATE productos 
                SET nombre='$nombre', descripcion='$descripcion', precio=$precio, stock=$stock
                WHERE id=$id";

        return $this->conexion->query($sql);
    }

    // ELIMINAR PRODUCTO
    public function delete($id) {
        $sql = "DELETE FROM productos WHERE id = $id";
        return $this->conexion->query($sql);
    }
}
