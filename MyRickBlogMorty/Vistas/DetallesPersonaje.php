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
    <?php require "../Scripts/Main.php";?>
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
                    <a href="DetallesCapitulos.php">Capitulos</a>
                </li>
                <li>
                    <img src="../Recursos/logo.png" alt="Logo" class="LogoBlock">
                </li>
            </ul>
        </nav>
        <hr>
        <div class="Titulo">
            <h1>Personajes Aleatorios</h1>
        </div>

        <div class="cont-image2">
            <?php Random(); ?>  
            
            <div class="datos-int">
                <form class="datos-int" action="" method="POST">
                    <div>
                        <h1 id="titulo">BUSCAR</h1>
                        <img id="Person-lupa" src="<?php echo $Caracteristicas[0];?>">
                        <div class="parrafos">
                            <p> ID:         <?php echo $Caracteristicas[1];?></p>
                            <p> Nombre:     <?php echo $Caracteristicas[2];?></p>
                            <p> Estado:     <?php echo $Caracteristicas[3];?></p>
                            <p> Especie:    <?php echo $Caracteristicas[4];?> </p>
                            <p> Género:     <?php echo $Caracteristicas[5];?> </p>
                        </div>
                        <input class="" name="IdPersonaje" type="number" placeholder="SOLO EXISTEN [826]">
                        <input class ="btn" type="submit" value="Buscar">
                    </div>
                </form>
                
            </div>
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