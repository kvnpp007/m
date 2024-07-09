<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="css/estilos.css"><!-- Estilos CSS -->
</head>
<body>
    <?php include 'includes/header.php'; ?><!-- Encabezado -->
    <main>
        <section class="producto-detalle">
            <?php
            // Lógica para mostrar detalles del producto
            if (isset($_POST["id_producto"])) {
                $id_producto = $_POST["id_producto"];
                // Buscar el producto por su ID en la base de datos o en el array de productos
                // Aquí puedes mostrar la imagen, descripción, precio, etc. del producto seleccionado
                // Ejemplo:
                echo '<h2>Detalles del Producto</h2>';
                echo '<img src="' . $productos[$id_producto - 1]["imagen"] . '" alt="' . $productos[$id_producto - 1]["nombre"] . '">';
                echo '<h3>' . $productos[$id_producto - 1]["nombre"] . '</h3>';
                echo '<p>' . $productos[$id_producto - 1]["descripcion"] . '</p>';
                echo '<p>Precio: $' . $productos[$id_producto - 1]["precio"] . '</p>';
                echo '<form action="carrito.php" method="post">';
                echo '<input type="hidden" name="id_producto" value="' . $productos[$id_producto - 1]["id"] . '">';
                echo '<label for="cantidad">Cantidad:</label>';
                echo '<input type="number" id="cantidad" name="cantidad" value="1" min="1">';
                echo '<button type="submit">Añadir al carrito</button>';
                echo '</form>';
            } else {
                echo '<p>No se encontró el producto.</p>';
            }
            ?>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?><!-- Pie de Página -->
</body>
</html>
