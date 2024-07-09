<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = [
        'nombre' => 'Café Especial 1',
        'cantidad' => $_POST['cantidad'],
        'tamano' => $_POST['tamano'],
        'precio' => 5, // Precio por unidad
    ];

    $_SESSION['carrito'][] = $producto;
}
?>

<?php include 'includes/header.php'; ?>

<h2>Carrito de Compras</h2>

<?php if (!empty($_SESSION['carrito'])): ?>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Tamaño</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($_SESSION['carrito'] as $producto): ?>
            <tr>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['cantidad']; ?></td>
                <td><?php echo $producto['tamano']; ?></td>
                <td>$<?php echo $producto['precio'] * $producto['cantidad']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No hay productos en el carrito.</p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
