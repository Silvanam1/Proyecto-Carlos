<?php
$enviado = 0;
$hoy = date("F j, Y, g:i a");
  if(
    isset($_POST["nombre"]) &&
    isset($_POST["Apellido"]) &&
    isset($_POST["Lugar"]) &&
    isset($_POST["email"]) &&
    isset($_POST["mensaje"]) &&
    isset($_POST["Localidad"]) &&
    isset($_POST["Departamento"])
      ){
    //$enviado = 1;
    $emailDimver = "ventas@dimver.com.ar";
    $to = $emailDimver;
    $subject = "Consulta desde el sitio web". $hoy;
    $contenido = "Nombre: ".$_POST["nombre"]." ".$_POST["Apellido"]."\n";
    $contenido .= "Lugar: ".$_POST["Lugar"]."\n";
    $contenido .= "Nombre de la Empresa: ".$_POST["nempresa"]."\n";
    $contenido .= "Localidad: ".$_POST["Localidad"]."\n";
    
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Comentario: ".$_POST["mensaje"]."\n\n";
    $header = "From: sistema@dimver.com.ar\nReply-To:".$emailDimver."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    //echo($contenido);
    if(mail($to, $subject, $contenido ,$header)){
      //echo "Mail Enviado.";
      $enviado = 1;
    }else{
      $enviado = 2;
    }
  }elseif(
    isset($_POST["nombre"]) ||
    isset($_POST["Apellido"]) ||
    isset($_POST["lugar"]) ||
    isset($_POST["nempresa"]) ||
    isset($_POST["email"]) || 
    isset($_POST["mensaje"]) || 
    isset($_POST["Localidad"]) ||
    isset($_POST["Departamento"]
    ) ){
    $enviado = 3;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacto.css">

    <title>Contacto</title>
</head>
<body>
    <?php
    require('../shell/header.php');
    //echo($enviado);
    //echo("hoy".$hoy);
    ?>

<br>
<br>
    <h1>Contacto</h1>
    <!--La idea es agregar luego el  Afip “Q.R”-->
  <br>
<div class="container">
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="nombre">Nombre</label>
    </div>
    <div class="col-75">
      <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre.." require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Apellido">Apellido</label>
    </div>
    <div class="col-75">
      <input type="text" id="Apellido" name="Apellido" placeholder="Escribe tu apellido" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Lugar">Lugar</label>
    </div>
    <div class="col-75">
      <select id="Lugar" name="Lugar" require>
        <option value="Empresa"> Empresa </option>
        <option value="Privado"> Privado </option>
        <option value="Casa"> Casa </option>
        <option value="Otro"> Otro </option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nempresa">Nombre de la empresa </label>
    </div>
    <div class="col-75">
      <input type="text" id="nempresa" name="nempresa" placeholder="Escribe el nombre de tu empresa..." require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Localidad">Localidad</label>
    </div>
    <div class="col-75">
      <input type="text" id="Localidad" name="Localidad" placeholder="Escribe la localidad.." require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" class="estiloEmail" placeholder="Ingrese un email valido para recibir una respuesta" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mensaje">Mensaje</label>
    </div>
    <div class="col-75">
      <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje.." style="height:200px" require></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Departamento">Departamento</label>
    </div>
    <div class="col-75">
      <select id="Departamento" name="Departamento">
        <option value="venta"> Ventas </option>
        <!-- 
        <option value="contacto"> Contacto </option>
        <option value="soporte"> Soporte </option> 
        -->
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
                <div class="texto margin-left" style="text-align: left">
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
    <link rel="stylesheet" href="..\..\general.css">
    <?php
    require('../shell/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/f3c3af2199.js" crossorigin="anonymous"></script>
</body>
</html>
