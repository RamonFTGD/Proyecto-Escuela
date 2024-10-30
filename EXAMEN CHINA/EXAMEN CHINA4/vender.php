<?php
    include "functions.php";
    session_start();

    // Verificar si el usuario tiene el rol de administrador
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        // Redirigir a otra página o mostrar mensaje de error si no es administrador
        echo "Acceso denegado. Solo los administradores pueden vender productos.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Productos - Papelería Horizon</title>
    <link rel="stylesheet" href="css/estilosMobile.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="papeleria.php"><img src="imagenes/HorizonMobileDevices.png" alt="Papelería Horizon"></a>
    </div>
    <nav>
        <ul>
            <li><a href="papeleria.php">Papelería</a></li>
            <li><a href="productos.php">Catálogo de Productos</a></li>
            <li><a href="vender.php">Vender</a></li>
            <li><a href="index.php">Volver al Inicio</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="sell-section">
        <h2>Vender tu Producto</h2>
        <p>Completa el formulario para poner a la venta tu producto de papelería.</p>
        <form action="procesar_venta.php" method="POST" class="sell-form">
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Ejemplo: Lápices de Madera" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describe el producto (ej: set de 12 lápices de madera, HB)" required></textarea>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="lapices">Lápices</option>
                <option value="lapiceras">Lapiceras</option>
                <option value="colores">Colores</option>
                <option value="sacapuntas">Sacapuntas</option>
                <option value="borradores">Borradores</option>
                <option value="pegamento">Pegamento</option>
                <option value="tijeras">Tijeras</option>
                <option value="cartuchera">Cartuchera</option>
                <option value="memoria_usb">Memoria USB</option>
            </select>

            <label for="precio">Precio (USD):</label>
            <input type="number" id="precio" name="precio" placeholder="Ejemplo: 5.00" step="0.01" required>

            <label for="cantidad">Cantidad Disponible:</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="Ejemplo: 20" required>

            <label for="imagen">Imagen del Producto:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>

            <button type="submit">Publicar Producto</button>
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2024 Daniel y Ramon. Todos los derechos reservados.</p>
</footer>
</body>
</html>
