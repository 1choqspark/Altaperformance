<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
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
      <div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 35px; background-color: rgba(255,0,0,.75);font-size: 25px; color: black;"><b>...Buzon de quejas y sugerencias...</b></div>
      <!--**********termina el titulo***********-->


<?php
    

//  $busqueda = $_GET['buscar'];
require("conexionagenda.php");

$conexion =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "Fallo al conectar la databeis";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
$consulta="SELECT * FROM opinion ";
$resultados=mysqli_query($conexion,$consulta);
$registros=1;
    ?>
    <br>
    <br>
      <table  align="center" border="1" style="background-color: rgba(255,255,255,.7);">
        <tr>
        <td style="background-color: rgba(255,128,0,0.7);">Cliente</td>
        <td style="background-color: rgba(255,128,0,0.7);">comentario</td>
        </tr>
      
      <?php
while (($fila=mysqli_fetch_row($resultados))==true){
   ?> 
   <tr>
     <td><?php echo $fila[0]; ?></td>
     <td><?php echo $fila[1]; ?></td>
   </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conexion);

?>

<div class = "row justify-content-center">
  <br>
    <img src = "imgs/cuatro.jpg" style="width: 700px;">
    </div>

<!--**********inicia el footer***********-->
<div class="container-fluid fixed-bottom">  
       <div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 25px; background-color: rgba(255,128,0,0.7);font-size: 25px; color: black;"><b>...Antonio Pérez Vázquez...</b></div>
</div>
      <!--**********termina el footer***********-->
 </body>
<!--**********Termina el contenido***********-->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js.js"></script>
      <script src="js/bootstrap.min.js.map"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</html>