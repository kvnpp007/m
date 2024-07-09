<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Baja: Producto</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos</h1>
                    <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Baja: Producto</h1>
                    <main>
                        <form action="borrarp.php" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="id">Identificador del procducto</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" id="id" name="id" placeholder="Identificador..." required>
                                </div>
                            </div>
                            <input type="hidden" name="action" value="delete">
                            <input type="submit" value="Borrar datos"> 
                            <input type="reset" value="Borrar todo">
                        </form>
                    </main>
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