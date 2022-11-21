<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRickBlogMorty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../Recursos/logo.png">
</head>
<body>
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <?php require '../Scripts/Main.php';?>
    <?php require '../Scripts/Capitulos.php';?>
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <div class="contenedor">
        <hr>
        <nav class="barra-nav">
            <ul class="barra-interna">
                <li>
                    <img src="../Recursos/logo.png" alt="Logo" class="LogoBlock">
                </li>
                <li>
                    <a href="../index.php">Inicio</a>
                </li>
                <li>
                    <a href="DetallesPersonaje.php">Personajes</a>
                </li>
                <li>
                    <img src="../Recursos/logo.png" alt="Logo" class="LogoBlock">
                </li>
            </ul>
        </nav>
        <hr>
        <div class="Titulo">
            <h1><?php  ?></h1>
        </div>
        <div>
            <form id = "select-info" action="" method="POST">
                <select name="desplegable" required id="Select-Caps">
                    <option selected disabled value="">Selecciona un capitilo</option>
                     <?php echo ListaTitulos(); ?> ¿
                </select>
                <input id="mostrar-btn" name="mostrar-btn" class="btn" type="submit" value="Mostrar">
                <h1 class="Titulo">
                    <?php echo "Titulo: ".$titulo; ?>
                </h1>
            </form>
        </div>
        <div class="cont-image">
            <!-- CLASE CAPS -->
            <?php PersonajesCap($opcion); ?>
        </div>
    </div>

    <footer class="pie">
        <ul>
            <li>
                <p>By Alexandher Cordoba Molina</p>    
            </li>
            <li> 
                <time datetime="09-11-2022">Año de publicación 21/04/2022</time>
            </li>
            <li>    
                <strong>xD</strong>
            </li>
        </ul>
    </footer>
</body>
</html>