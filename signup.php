<?php

  require 'model/conexion.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['usuario'])) {
    $sql = "INSERT INTO usuarios (email, password, usuario) VALUES (:email, :password, :usuario)";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':usuario', $_POST['usuario']);


    if ($stmt->execute()) {
      $message = 'Usuario Creado con exito, por favor regrese al login para iniciar sesiòn';
      
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Usario TecnoKids</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estiloregis.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro de Usario TecnoKids</h1>
    <span>o <a href="Login.html">regresar</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Introduce Tu Email">
      <input name="usuario" type="text" placeholder="Inserta Tu nombre y Apellido">
      <input name="password" type="password" placeholder="Inserta una contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma Tu Contraseña">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
