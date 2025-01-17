<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/ico" href="./static/images/icono.ico">
    
    <title>Iniciar sesion</title>
</head>
<body>
    <!--JavaScripts-->
    <script src="./static/alert/package/dist/sweetalert2.all.min.js"></script>
    
    <div  style="max-width:500px;margin:auto;">
        <div >
            <form action="validarInicioSesion.php" method="post" style="max-width:480px;margin:auto;">
                <img src="static/images/logo.png" alt="">
                <h1 class="h3 mb-3">Iniciar Sesi&oacuten</h1>
                <div class="mb-3">
                    <label for="correo" class="inicia">Correo electr&oacute;nico</label>
                    <input type="email" class="inicia form-control" name="correo"  id="correo" maxlength="50" placeholder="Ingresa tu correo electr&oacute;nico" pattern ="^[a-zA-Z0-9.!#$%&*+/=?^_{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
                </div>
                <div class="mb-3">
                    <label for="pass" class="inicia">Contrase&ntilde;a</label>
                    <input  type="password" class="inicia form-control" name="pass" id="pass" placeholder="Ingresa tu contrase&ntilde;a" required/>
                </div>
                <div class="seccion-enviar1 d-flex align-items-center justify-content-center mt-3 mb-3">
                    <button type="submit" class="btnenviar btn btn-primary">Iniciar sesi&oacute;n</button>
                </div>
                <div class="seccion-enviar1 d-flex align-items-center justify-content-center">
                    <a class="btnenviar" href="./registrar.php">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>