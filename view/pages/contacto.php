<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="..\..\general.css">
    <title>Contacto</title>
</head>
<body>
    <?php
    require('../shell/header.php');
    ?>

<br>
<br>
    <h1>Contacto</h1>
    <!--La idea es agregar luego el  Afip “Q.R”-->
  <br>
<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="nombre">Nombre</label>
    </div>
    <div class="col-75">
      <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Apellido">Apellido</label>
    </div>
    <div class="col-75">
      <input type="text" id="Apellido" name="Apellido" placeholder="Escribe tu apellido">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Lugar">Lugar</label>
    </div>
    <div class="col-75">
      <select id="Lugar" name="Lugar">
        <option value="Empresa"> Empresa </option>
        <option value="Privado"> Privado </option>
        <option value="Casa"> Casa </option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nempresa">Nombre de la empresa </label>
    </div>
    <div class="col-75">
      <input type="text" id="nempresa" name="nempresa" placeholder="Escribe el nombre de tu empresa...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Localidad">Localidad</label>
    </div>
    <div class="col-75">
      <input type="text" id="Localidad" name="Localidad" placeholder="Escribe la localidad..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mensaje">Mensaje</label>
    </div>
    <div class="col-75">
      <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Departamento">Departamento</label>
    </div>
    <div class="col-75">
      <select id="Departamento" name="Departamento">
        <option value="venta"> Venta </option>
        <option value="contacto"> Contacto </option>
        <option value="soporte"> Soporte </option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Enviar">
  </div>
  </form>
</div>
<br>
<br>



    <br>
    <section class="card" id="datos de contacto">
        <div>
            <article class="contenido">
                <h2 class="tituloCard">Datos de Contacto</h2>
                <div class="texto" style="text-align: left">
                  <p>BLANCO ENCALADA 1983, CASTELAR. (CP 1712) </p>
                  <p>TELÉFONOS: 4628-6907 / 4629-5298</p>
                  <p>CELULAR: 153-332-6375</p>
                  <p>ALTERNATIVO: 152-644-2919</p>
                  <p>CORREO ELECTRÓNICO: DIMVER2020@GMAIL.COM</p>
                </div>
            </article>

        </div>
<!-- 
        <div>
            <img src="../../img/imagenes/fondo4full.jpg" alt="" class="imagenCard" >
        </div>
-->
    </section>

    <?php
    require('../shell/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/f3c3af2199.js" crossorigin="anonymous"></script>
</body>
</html>
