<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRickBlogMorty</title>
    <link rel="stylesheet" href="Vistas/style.css">
    <link rel="icon" href="Recursos/logo.png">
    
</head>
<body>
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <?php require 'Scripts/Main.php';?>
    <!-- - - - - - - - - - - - - - - - - - - - - - - -->
    <div class="contenedor">
        <hr>
        <nav class="barra-nav">
            <ul class="barra-interna">
                <li>
                    <img src="Recursos/logo.png" alt="Logo" class="LogoBlock">
                </li>
                <li>
                    <a href="Vistas/DetallesCapitulos.php">Capitulos</a>
                </li>
                <li>
                    <a href="Vistas/DetallesPersonaje.php">Personajes</a>
                </li>
                <li>
                    <img src="Recursos/logo.png" alt="Logo" class="LogoBlock">
                </li>
            </ul>
        </nav>
        <hr>

        <div class="Titulo">
            <h1>Primer Capitulo</h1>
        </div>

        <div class="cont-image">
            <?php PersonajesCap(1); /*echo $Apartado->air_date;*/ ?>
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

<!--
    
<h1 class="titulo">Número de imagen</h1>
            <br><br>
            <form class="formulario" action="" method="GET">
                <input type="number" name="number-img" placeholder="Ingresa el número de imagen">
                <input type="submit" value="Buscar">
                <img src="   /*echo $imagen; ?>" name="buscar-img" alt="">
            </form>

 -->