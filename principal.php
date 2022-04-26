<!DOCTYPE html>
<html lang="es-en">
    <head>
        <title>Apapacho HTML5</title>
        <meta charset="utf-8">

        <!--Libreria de iconos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/principal.css">
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/jquery.js"></script>


    </head>
    <body>
        <div class="principal">
            <div id="navbar">
                <img src="img/logo.png" class="logo" alt="Main Logo">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Apapacho</a></li>
                    <li><a href="#">Actividades</a></li>
                    <li><a href="#">Información</a></li>
                    <li><a href="#">Perfil</a></li>
                </ul>
            </div>
            <div class="slide">
                <div class="slide-inner">
                    <input class="slide-open" type="radio" id="slide-1" 
                        name="slide" aria-hidden="true" hidden="" checked="checked">
                    <div class="slide-item">
                        <img src="img/foto3.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-2" 
                        name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="img/foto2.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-3" 
                        name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="img/foto1.jpg">
                    </div>
                    <label for="slide-3" class="slide-control prev control-1">‹</label>
                    <label for="slide-2" class="slide-control next control-1">›</label>
                    <label for="slide-1" class="slide-control prev control-2">‹</label>
                    <label for="slide-3" class="slide-control next control-2">›</label>
                    <label for="slide-2" class="slide-control prev control-3">‹</label>
                    <label for="slide-1" class="slide-control next control-3">›</label>
                    <ol class="slide-indicador">
                        <h1>Bienvenido</h1>
                        <li>
                            <label for="slide-1" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-2" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-3" class="slide-circulo">•</label>
                        </li>
                    </ol>
                </div>
		    </div>
        </div>
    </body>
</html>