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
      )
  {
      if(
        $_POST["nombre"]!="" &&
        $_POST["Apellido"]!="" &&
        $_POST["email"]!="" &&
        $_POST["mensaje"]!="" &&
        $_POST["Localidad"]!="" 
        )
      {
        //$enviado = 1;
        $emailDimver = "ventas@dimver.com.ar";
        $to = $emailDimver;
        $subject = "Consulta desde el sitio web". $hoy;
        $contenido = "Nombre: ".$_POST["nombre"]." ".$_POST["Apellido"]."\n";
        $contenido .= "Lugar: ".$_POST["Lugar"]."\n";
        $contenido .= "Nombre de la Empresa: ".$_POST["nempresa"]."\n";
        $contenido .= "Localidad: ".$_POST["Localidad"]."\n";
        if(isset($_POST["partido"])){
          $contenido .= "Partido: ".$_POST["partido"]."\n";
        }
        if(isset($_POST["Telefono"])){
          $contenido .= "Teléfono: ".$_POST["Telefono"]."\n";
        }
        $contenido .= "Email: ".$_POST["email"]."\n\n";
        $contenido .= "Comentario: ".$_POST["mensaje"]."\n\n";
        $header = "From: sistema@dimver.com.ar\nReply-To:".$emailDimver."\n";
        $header .= "Mime-Version: 1.0\n";
        $header .= "Content-Type: text/plain";
        if(mail($to, $subject, $contenido ,$header)){
          $enviado = 1;
        }else{
          $enviado = 2;
        }
      }else{
        $enviado = 3;
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
  <link rel="shortcut icon" href="http://dimver.com.ar/img/imagenes/logo3solo.ico">
  <title>Contacto DIMVER</title>

  <meta name="robots" content="all"/>
  <meta name="googlebot" content="all" />  
<meta http-equiv="Content-Language" content="es"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sistemas de Seguridad Electrónica adaptados a su necesidad, con la premisa de resguardar la integridad de las personas, su grupo familiar y bienes materiales"> 

  <meta name="keywords" content="DIMVER,dimver,seguridad,camaras vigilancia,seguridad electronica, alarma monitoreada">
    <link rel="stylesheet" href="contacto.css">


</head>
<body>
    <?php
    require('../shell/header.php');
    ?>
    <?php 
      if($enviado == 2){
        ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          ERROR AL ENVIAR
        </div>

        <?php
      }elseif($enviado == 3){
        ?>

      <div class="alert warning">
        <span class="closebtn">&times;</span>  
        FALTAN DATOS
      </div>

        <?php
      }elseif ($enviado == 1) {
        ?>
        <div class="alert success">
          <span class="closebtn">&times;</span>  
          ENVIADO CORRECTAMENTE
        </div>
        <?php
      }
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
      <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" require>
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
      <select id="Lugar" name="Lugar" require class="Lugar">
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
      <input type="text" id="nempresa" name="nempresa" placeholder="Escribe el nombre de tu empresa" require class="nempresa">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Localidad">Localidad</label>
    </div>
    <div class="col-75">
      <input type="text" id="Localidad" name="Localidad" placeholder="Escribe la localidad" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="partido">Partido</label>
    </div>
    <div class="col-75">
      <input type="text" id="partido" name="partido" placeholder="Escribe el partido" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Mail</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" class="estiloEmail" placeholder="Ingrese un mail válido para recibir una respuesta" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Telefono">Teléfono</label>
    </div>
    <div class="col-75">
      <input type="text" id="Telefono" name="Telefono" placeholder="Escribe tu teléfono" require>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Celular">Celular</label>
    </div>
    <div class="col-75">
      <input type="text" id="Celular" name="Celular" placeholder="Escribe tu celular" require>
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
                  <p>TELÉFONOS: 4629-5298 - Contacto telefónico de Lunes a Viernes de 8 a 17 Hs. </p>
                  <p>CELULAR: 153-332-6375</p>
                  <p>ALTERNATIVO: 152-644-2919</p>
                  <p>CORREO ELECTRÓNICO: VENTAS@DIMVER.COM.AR </p>
                </div>
            </article>

        </div>
<!-- 
        <div>
            <img src="../../img/imagenes/fondo4full.webp" alt="" class="imagenCard" >
        </div>
-->
    </section>
    <link rel="stylesheet" href="..\..\general.css">
    <script>
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }

      const selectElement = document.querySelector('.Lugar');

      selectElement.addEventListener('change', (event) => {
        console.log(selectElement);
          const resultado = document.querySelector('.nempresa');
          if(event.target.value!="Empresa"){
            resultado.value = `${event.target.value}`;
          }else{
            resultado.value = `Escribe el nombre de tu empresa...`;
          }
      });
    </script>
    <?php
    require('../shell/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/f3c3af2199.js" crossorigin="anonymous"></script>
</body>
</html>