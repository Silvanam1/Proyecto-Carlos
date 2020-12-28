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
    <a href="../../index.php">ir al index</a>

    <h1>Contacto</h1>
    <!--La idea es agregar luego el  Afip “Q.R”-->
    <form>
            Nombre <input type="text"> <br>
            Apellido <input type="text"> <br>
            <br>
            <select>
                    <option value="Empresa"> Empresa </option>
                    <option value="Privado"> Privado </option>
                    <option value="Casa"> Casa </option>
            </select> <br>
            <br>
            Nombre de la Empresa <input type="text"> <br>
            Localidad <input type="text"> <br>
            Mensaje <br> <textarea name="Mensaje" id="" cols="30" rows="10"></textarea> <br>
            <h2>Departamento</h2>
            <input type="radio"> Venta
            <input type="radio"> Contacto
            <input type="radio"> Soporte
            <br>
            <input type="submit" name="Enviar">

    </form>

    <p>BLANCO ENCALADA 1983, CASTELAR. (CP 1712) </p>
    <p>TELÉFONOS: 4628-6907 / 4629-5298</p>
    <p>CELULAR: 153-332-6375</p>
    <p>ALTERNATIVO: 152-644-2919</p>
    <p>CORREO ELECTRÓNICO: DIMVER2020@GMAIL.COM</p>
    
    <?php
    require('../shell/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/f3c3af2199.js" crossorigin="anonymous"></script>
</body>
</html>
