<!-- Contenido de productos.php -->
<?php
// Array de productos con sus detalles
$productos = array(
    array(
        "id" => 1,
        "nombre" => "Café Especial 1",
        "imagen" => "img/cafe1.jpg",
        "descripcion" => "Descripción del café especial 1...",
        "precio" => 5.99
    ),
    array(
        "id" => 2,
        "nombre" => "Café Especial 2",
        "imagen" => "img/cafe2.jpg",
        "descripcion" => "Descripción del café especial 2...",
        "precio" => 6.99
    ),
    // Agregar más productos según sea necesario
);

// Mostrar cada producto
foreach ($productos as $producto) {
    echo '<div class="producto">';
    echo '<img src="' . $producto["imagen"] . '" alt="' . $producto["nombre"] . '">';
    echo '<h2>' . $producto["nombre"] . '</h2>';
    echo '<p>' . $producto["descripcion"] . '</p>';
    echo '<p>Precio: $' . $producto["precio"] . '</p>';
    echo '<form action="/c/pc/p1/act4/includes/lookat.php" method="post">';
    echo '<input type="hidden" name="id_producto" value="' . $producto["id"] . '">';
    echo '<button type="submit">Ver detalles</button>';
    echo '</form>';
    echo '</div>';
}
?>
