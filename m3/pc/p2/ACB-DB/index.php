<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledb.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Sistema</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Base de Datos</h1>
            <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
    </header>
    <section>
    <div class="row">
        <div class="column">
            <div class="card">
                <h1>Alta</h1>
                <div class="fakecontainer form-group">
                    <form action="altac.php">
                        <input type="submit" value="Cliente">
                    </form>
                    <form action="altap.php" >
                        <input type="submit" value="Productos">
                    </form>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h1>Baja</h1>
                <div class="fakecontainer form-group">
                    <form action="bajac.php">
                        <input type="submit" value="Cliente">
                    </form>
                    <form action="bajap.php" >
                        <input type="submit" value="Productos">
                    </form>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h1>Consulta</h1>
                <div class="fakecontainer form-group">
                    <form action="cliente.php">
                        <input type="submit" value="Cliente">
                    </form>
                    <form action="producto.php" >
                        <input type="submit" value="Productos">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>