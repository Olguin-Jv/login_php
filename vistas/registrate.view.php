<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
  	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Registrate</h1>
      <hr class="border">

      <form class="formulario" name="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario"  value="">
        </div>

        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="password" placeholder="Conraseña" value="">
        </div>

        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password2" placeholder="Repetir contraseña" value="">
          <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
        </div>

      </form>

      <p class="texto-registrate">¿ Ya tienes cuenta ?
      <a href="login.php">Iniciar sesión</a>
      </p>
    </div>
  </body>
</html>
