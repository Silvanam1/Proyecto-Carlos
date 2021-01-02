<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="carrusell.css">
    <script src="https://kit.fontawesome.com/f3c3af2199.js" crossorigin="anonymous"></script>
    <!--<script src="carrusell.js"></script>-->
    <title>DIMVER</title>
</head>
<body>
    <?php
    require('view/shell/header.php');
    ?>
    <img src="img\imagenes\s-l1600plus.jpg" class="banner">
    <div>
        <section class="card" id="nosotros">
            <div>
                <article class="contenido">
                    <h2 class="tituloCard"> Nosotros</h2>
                    <p class="texto"> <span class="negrita">DIMVER:</span> Es una empresa familiar que cuenta con el respaldo en su 
                        capacidad y experiencia, para colaborar desde la concepción del proyecto hasta 
                        el mantenimiento del mismo. Priorizamos al desarrollar nuestros sistemas de 
                        seguridad electrónica adaptados a su necesidad, con el fin resguardar la 
                        integridad de las personas, grupo familiar sus bienes materiales, sobre todo 
                        cumpliendo con las normativas vigentes.</p>
                </article>
                <div class="contenido">
                    <a href="#nosotros" class="boton" style="color: black;font-size: large;">ver más</a>
                </div>
            </div>
            <div>
                <img src="img\imagenes\fondo4full.jpg" alt="" class="imagenCard" >
            </div>
        </section>
        <section class="card" id="Servicios" style="">
            <div >
                <article class="contenido">
                    <h2 class="tituloCard">Servicios</h2>
                    <p class="texto">Los sistemas adicionales aumentan el nivel de seguridad de la alarma de intrusión. 
                        Al momento de diseñar un sistema de alarma de intrusión, tenido en cuenta sus 
                        requerimientos, pero los mismos pueden cambiar, ya sea por modificaciones en el 
                        exterior de la propiedad o en el vecindario, por remodelaciones en el interior, 
                        por el valor de su contenido o el riesgo de intrusión, además de otros factores que 
                        puedan afectar el grado de seguridad previsto.</p>
                </article>
                <div class="contenido">
                    <a href="#Servicios" class="boton" style="color: black;font-size: large;">ver más</a>
                </div>
            </div>
            <div>
                <img src="img\imagenes\servicios250x200full.jpg" alt="" class="imagenCard" >
            </div>
        </section>
    </div> 


    <section>
    <article class="card" id="Clientes" style="display:block;">

    <h2 class="tituloCard">Nuestros Clientes</h2>
    <div id="carrusel" class="slideshow-container">
    
<?php
    // Ruta del directorio donde están los archivos
    $path  = 'img/empresas'; 

    // Arreglo con todos los nombres de los archivos
    $files = array_diff(scandir($path), array('.', '..')); 
    #echo(count($files).' + + +');
    foreach ($files as $key => $value) {
        # code...
        $valor = $key -1;
        ?>

                <div class="mySlides fade" style=" <?php if ($valor == 1) {
                    echo('display: table-cell;');
                } ?>
                vertical-align: middle; width:100%;">
                
                <img src="img\empresas\<?php echo($value);?>" style="width:300px;">
                </div>

<?php
    }
?>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        
<?php
foreach ($files as $key => $value) {
    # code...
    $valor = $key -1;
    ?>

        <span class="dot" onclick="currentSlide(<?php echo($valor) ?>)"></span>
        
    <?php
}
?>
        </div>

    </article>
    </section>

    
<script>
    var slideIndex = 1;
    var slideIndex2 = 0;
    var estado=true;
    girasoli();

function girasoli() {
    
    if(this.estado){
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slideIndex2++;
        if (slideIndex2 > slides.length) {slideIndex2 = 1}
        slides[slideIndex2-1].style.display = "table-cell";
        dots[slideIndex-1].className += " active";
        setTimeout(girasoli, 2500); // Change image every 2 seconds
        
    }
}
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "table-cell";
  dots[slideIndex-1].className += " active";
  this.estado=false;
}


</script>


    <?php
    require('view/shell/footer.php');
    ?>

</body>
</html>