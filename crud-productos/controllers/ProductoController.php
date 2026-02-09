<?php

require_once "../models/Producto.php";

class ProductoController {

    private $producto;

    public function __construct() {
        global $conexion;
        $this->producto = new Producto($conexion);
    }

    public function index() {
        $productos = $this->producto->all();
        require_once "../views/productos/index.php";
    }

    public function show() {
        $id = $_GET['id'];
        $producto = $this->producto->find($id);
        require_once "../views/productos/show.php";
    }

    public function create() {
        $errores = [];
        require_once "../views/productos/create.php";
    }

    public function store() {
        $errores = [];

        if (strlen($_POST['nombre']) < 3) {
            $errores[] = "El nombre debe tener al menos 3 caracteres";
        }
        if ($_POST['precio'] <= 0) {
            $errores[] = "El precio debe ser mayor que 0";
        }
        if ($_POST['stock'] < 0) {
            $errores[] = "El stock no puede ser negativo";
        }

        if (!empty($errores)) {
            require_once "../views/productos/create.php";
            return;
        }

        $this->producto->create($_POST);
        header("Location: index.php?controller=producto&action=index");
    }

    public function edit() {
        $id = $_GET['id'];
        $producto = $this->producto->find($id);
        $errores = [];
        require_once "../views/productos/edit.php";
    }

    public function update() {
        $id = $_GET['id'];
        $errores = [];

        if (strlen($_POST['nombre']) < 3) {
            $errores[] = "El nombre debe tener al menos 3 caracteres";
        }
        if ($_POST['precio'] <= 0) {
            $errores[] = "El precio debe ser mayor que 0";
        }
        if ($_POST['stock'] < 0) {
            $errores[] = "El stock no puede ser negativo";
        }

        if (!empty($errores)) {
            $producto = $_POST;
            $producto['id'] = $id;
            require_once "../views/productos/edit.php";
            return;
        }

        $this->producto->update($id, $_POST);
        header("Location: index.php?controller=producto&action=index");
    }

    public function delete() {
        $id = $_GET['id'];
        $producto = $this->producto->find($id);
        require_once "../views/productos/delete.php";
    }

    public function destroy() {
        $id = $_GET['id'];
        $this->producto->delete($id);
        header("Location: index.php?controller=producto&action=index");
    }
}
