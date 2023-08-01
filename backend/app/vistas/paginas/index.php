<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Medico</title>
    <link rel="shortcut icon" href="<?php echo RUTA_URL?>../Imagen/logo.jpg">
    <!-- CSS only -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estiloInicio.css">
</head>
<body>
<header id="header">
        <div class="container__header">

          

            <div class="container__nav">

                <nav id="nav">
                    <ul>
                        <li><a href="#" class="select">INICIO</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">HOW IT WORK</a></li>
                        <li><a href="#" class="select">CERRAR SESSION</a></li>
                    </ul>
                </nav> 

                <div class="btn__menu" id="btn_menu">
                    <i class="fas fa-bars"></i>
                </div>

            </div>

        </div>
    </header>
    <div class="container__all" id="container_all">

        <div class="cover">

            <div class="container__cover">

                <div class="container__info">
                    <h2>Bienvenido!! </h2>
                    <!--Señor(Sr. ) si su sexo es "M" o Señora(Sra. ) si suu sexo es "F" -->
        
                    <p>Estamos al cuidado de su salud y de su familia</p>
                    <button type="submit">
                        Asignar Una Cita
                    </button>
                </div>


            </div>

        </div>

    </div>
    
    <script src="<?php echo RUTA_URL?>/js/main.js"></script>
</body>
</html>
