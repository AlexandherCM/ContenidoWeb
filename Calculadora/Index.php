<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="Estilo/Styles.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <?php require 'Scripts/main.php'; ?>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <div class="contenedor container m-auto p-10">
      <header class="bg-indigo-500 opacity-80 text-center text-white pt-10 rounded-xl">
        <h1 class="text-white opacity-100 text-5xl pb-20">Calculadora de sistemas numéricos</h1>
      </header>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <form class="formulario w-11/12 m-auto" action="" method="post">
        <div class="pr-10 pl-10 bg-gray-800 opacity-75 p-5 rounded-xl">
          <section class="m-auto">
            <ul>
              <!--  - - - - - - - - - - - - - - - -  -->
              <li class="text-4xl">
                <label for="">Ingresa un número</label>
                <input
                  class="insertar rounded-xl text-white bg-transparent border-2 border-white p-1"
                  type="text"
                  name = "numero"
                  placeholder="Número Positivo"
                  required
                />
              </li>
              <!--  - - - - - - - - - - - - - - - -  -->
              <li class="select text-4xl">
                <label for="">Sistema númerico de entrada</label>
                <select name="opcion1" class="insertar text-white border-2 border-white p-1" id="" required>
                  <option class="text-black" selected disabled value="">Sistema númerico</option>
                  <option class="text-zinc-800" value="1">Decimal</option>
                  <option class="text-zinc-800" value="2">Binario</option>
                  <option class="text-zinc-800" value="3">Octal</option>
                  <option class="text-zinc-800" value="4">Hexadecimal</option>
                </select>
              </li>
              <!--  - - - - - - - - - - - - - - - -  -->
              <li class="select text-4xl">
                <label for="">Sistema númerico de salida</label>
                <select name="opcion2" class="insertar text-white border-2 border-white p-1" id="" required>
                  <option class="text-black" selected disabled value="">Sistema númerico</option>
                  <option class="text-zinc-800" value="1">Decimal</option>
                  <option class="text-zinc-800" value="2">Binario</option>
                  <option class="text-zinc-800" value="3">Octal</option>
                  <option class="text-zinc-800" value="4">Hexadecimal</option>
                </select>
              </li>
              <!--  - - - - - - - - - - - - - - - -  -->
            </ul>
          </section>
          <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <section class="text-white flex flex-col mb-10 text-5xl">
            <input
              class="bg-indigo-500 p-3 w-1/2 m-auto hover:bg-gray-700 rounded-xl font-bold font-mono cursor-pointer"
              type="submit"
              name = "convertir"
              value="Convertir"
            />
            <!--  - - - - - - - - - - - - - - - -  -->
            <div class="text-center mt-6">
              <label>Resultado:</label>
              <label name="numeroR"> <?php Sistema(); ?></label>
            </div>
          </section>
        </div>
      </form>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    </div>
    <footer class="bg-indigo-500 opacity-80 text-center text-white">
      <h5 class="pie text-white opacity-100 text-5xl">By: Familia Téllez</h5>
    </footer>
  </body>
</html>


