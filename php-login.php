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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
<div class="container-fluid">
      <header class="header">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand"><img src="imgs/tres.jpg" style="width: 100px;"></a>
            
            <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#uno">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="uno">
              <ul class="navbar-nav">
                                <li class="nav-item"><a href="index.php" class="nav-link" style=" font-size: 20px;"><b style="position: center;">...Battle-ship...</b></a></li>
              </ul>
            </div>
          </nav>
      </header>

    </div>
    <!--**********Termina el conteneor del header***********-->
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
<form action="signup.php" method="POST">
      <input name="nombre" type="text" placeholder="Enter your nombre">
      <input name="password" type="password" placeholder="Enter your Password">
                  <input type="submit" name="Enviar" value="submit">
               
       </form>





    

  </body>
</html>