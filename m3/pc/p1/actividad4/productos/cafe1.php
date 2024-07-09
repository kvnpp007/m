<!-- cafe1.php -->
<?php include 'includes/header.php'; ?>

<div class="producto">
    <img src="img/cafe1.jpg" alt="Café 1">
    <h2>Café Especial 1</h2>
    <p>Descripción del café especial 1...</p>
    <p>Precio: $5</p>
    <form action="carrito.php" method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="1" min="1">
        <label for="tamano">Tamaño:</label>
        <select name="tamano" id="tamano">
            <option value="pequeno">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>
        <button type="submit">Añadir al carrito</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
