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
            
            <div id="cRegistro">

                <p id="tituloR"> <img src="img/logo.png" class="logo" alt="Main Logo"> Regístrate</p>

                <form method="POST" action="" id="formR">
                    <label for="nombreR">Nombre</label>
                    <input type="text" id="nombreR" name="nombreR" placeholder="Ingrese su nombre...">

                    <label for="usuarioR">Usuario</label>
                    <input type="text" id="usuarioR" name="usuarioR" placeholder="Ingrese su usuario...">

                    <label for="contraR">Contraseña</label>
                    <input type="password" id="contraR" name="contraR" placeholder="Ingrese su contraseña...">

                    <label for="contraCR">Confirmar contraseña</label>
                    <input type="password" id="contraCR" name="contraCR" placeholder="Ingrese su contraseña...">

                    <div id="contenedorBotones">
                        <button type="reset" id="btnCancelar" name="btnCancelar">Cancelar</button>
                        <button type="submit" id="btnRegistrar" name="btnRegistrar">Registrar</button>
                    </div>
                </form>
            </div>
            

        </div>
    </body>
</html>