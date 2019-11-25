<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado exitosamente';
    } else {
      $message = 'lo sentimos, tu usuario o contraseña no coinciden';
    }
  }
?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<title>Alta Performance</title>

  <body>
    <div class="container-fluid">
      <header class="header">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand"><img src="imgs/coqslogo.jpg" style="width: 60px;"></a>
            
            <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#uno">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="uno">
              <ul class="navbar-nav">
                                <li class="nav-item"><a href="Indexsencilla.html" class="nav-link" style=" font-size: 20px;"><b>Coq`s Tuning Performance</b></a></li>
                <li class="nav-item"><a href="serviciosypromociones.php" class="nav-link"  id="navbardrop" style="font-size: 15px;"><b>Servicios y Promociones</b></a></li>
                <li class="nav-item"><a href="tipsydatoscuriosos.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Tips y datos curiosos</b></a></li>
                <li class="nav-item"><a href="acercade.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Acerca de nosotros</b></a></li>
                <li class="nav-item"style="background-color: grey;"><a href="index.php" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Login</b></a></li>
              </ul>
            </div>
          </nav>
      </header>

    </div>
    <!--**********Termina el conteneor del header***********-->
    <!--**********inicia el titulo***********-->
    <div class="container-fluid col-11">
      <div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 35px; background-color: rgba(255,0,0,.75);font-size: 25px; color: black;"><b>...Login...</b></div>
      <!--**********termina el titulo***********-->

   

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>o <a href="index.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
<div class = "row justify-content-center">
    <img src = "imgs/fondo.jpg">
    </div>
  </body>
</html>