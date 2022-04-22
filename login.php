<!DOCTYPE html>
<html lang="es-en">
    <head>
        <title>Apapacho HTML5</title>
        <meta charset="utf-8">

        <!--Libreria de iconos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/estilos.css">
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/jquery.js"></script>


    </head>
    <body id="grid-contenedor">
        <div id="contenedorGeneral">

            <div id="cfLogin">
                <p id="tituloP">Bienvenido</p>
                <form method="POST" action="" id="formLogin">
                    <label for="inputUsuario" style="grid-column:1/3;">Usuario</label>

                    <div class="inputContainer" style="grid-column:1/3;">
                        <input  class="input-field"style="width:100%" type="text" id="inputUsuario" name="inputUsuario" placeholder="Ingrese el usuario...">
                    </div>  

                    <label style="grid-column:1/3;" for="inputContra">Contraseña</label>
                    <div class="inputContainer" style="grid-column:1/3;">
                        <input style="width:100%;" type="password" id="inputContra" name="inputContra" placeholder="Ingrese la contraseña....">
                    </div>
                    <button style="grid-column:1/3;" type="submit" id="btnIngresar" name="btnIngresar">Ingresar</button>
                    <a style="grid-column:1/3; text-align:center;" href="registroUsuario.php" target="_self">¿Aún no tienes una cuenta? Registrate</a>
                </form>
            </div>
            
        </div>
    </body>
</html>