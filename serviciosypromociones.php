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
								<li class="nav-item"style="background-color: grey;"><a href="serviciosypromociones.php" class="nav-link"  id="navbardrop" style="font-size: 15px;"><b>Servicios y Promociones</b></a></li>
								<li class="nav-item"><a href="tipsydatoscuriosos.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Tips y datos curiosos</b></a></li>
								<li class="nav-item"><a href="acercade.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Acerca de nosotros</b></a></li>
								<li class="nav-item"><a href="index.php" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Login</b></a></li>
						</div>
					</nav>
			</header>

		</div>
		<!--**********Termina el conteneor del header***********-->
		
		<div class="container-fluid col-11">
			
			<header style="background-color: rgba(255,0,0,0.75); font-size: 20px; text-align:  center;"><b>...Aprovecha los descuentos en los siguientes servicos para mantener tu unidad en las mejores condiciones para salir a carretera en estas temporadas....</b></header>
            <p style="font-size: 19px; text-align:center; color: black; background-color: rgba(0,0,0,.05);">
                    <marquee BEHAVIOR=ALTERNATE>Vigencia del 15-10-19 hasta 15-11-19</marquee></p>

            

            <!--Inicia el carousel-->
            <div class="row justify-content-center">
                <div class="col-12  col-sm-12 col-md-8 col-lg-8 col-xl-8 borde1" >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"class="col-12">
                      <!--Indicadores -->
                          <ul class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                         </ul>
                         <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img class="d-block w-100" src="imgscs/s1.jpg" alt="First slide">
                            <div class="carousel-caption">
                              <h3 style="background-color: rgba(255,128,0,0.7);">Cambio de aceite y filtro</h3>
                              <p style="background-color: rgba(255,0,0,0.7);"><b>¡A solo $129 pesos! incluyendo revisión de puntos de seguridad</b></p>
                            </div>
                         </div>

                        <div class="carousel-item">
                           <img class="d-block w-100" src="imgscs/s2.jpg" alt="Second slide">
                               <div class="carousel-caption">
                                  <h3 style="background-color: rgba(255,128,0,0.7);">Afinación menor</h3>
                              <p style="background-color: rgba(255,0,0,0.7);"><b>¡A solo $300 pesos!  Ven y cambia tu aceite, filtro, bujias con nosotros y llevate una gorra de nuestra escudería</b></p>
                               </div>
                        </div>
                        <div class="carousel-item">
                           <img class="d-block w-100" src="imgscs/s3.jpg" alt="Third slide">
                               <div class="carousel-caption">
                                  <h3 style="background-color: rgba(255,128,0,0.7);">Revisión, limpieza y ajuste de frenos</h3>
                              <p style="background-color: rgba(255,0,0,0.7);"><b>¡A solo $99 pesos!  Ven y asegura tu tranquilidad manteniendo en optimas condiciones tu sistema de frenos</b></p>
                               </div>
                        </div>
                        <div class="carousel-item">
                           <img class="d-block w-100" src="imgscs/s4.jpg" alt="Fourth slide">
                               <div class="carousel-caption">
                                <h3 style="background-color: rgba(255,128,0,0.7);">Limpieza de inyectores</h3>
                              <p style="background-color: rgba(255,0,0,0.7);"><b>¡A solo $149 pesos!  Conserva la potencia de tu vehiculo con el sistema de inyección limpio</b></p>
                               </div>
                        </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
            <!--Termina el carousel-->

<!--inicia la barra de busqueda-->

    <div class="col-12  col-sm-4 col-md-4 col-lg-4 col-xl-4 borde2" >
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%; background-color: rgba(255,0,0,.75);font-size: 25px;"><b>Buscar Servicios</b></div>
            <!--Codigo php de busqueda-->
<?php
    function ejecuta_consulta($labusqueda){

//  $busqueda = $_GET['buscar'];
require("datos_conexion.php");

$conexion =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "Fallo al conectar la databeis";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
$consulta="SELECT * FROM servicios1 WHERE nombre_servicio LIKE '%$labusqueda%'";
$resultados=mysqli_query($conexion,$consulta);

$registros=1;

    ?>

<form action="<?php $mipagina?>" method="get">
         <label for="buscar"><input type="search" name="buscar" id="buscar" placeholder="Introduce un servicio" class="form-control mr-sm-2"></label>
         <button class="btn btn-success" type="submit">buscar</button>      
      </form>

      <table  align="center" border="1" style="background-color: rgba(0,0,0,.1);">
        <tr>
        <td style="background-color: rgba(255,128,0,0.7);">servicio</td>
        <td style="background-color: rgba(255,128,0,0.7);">Costo     </td>
        <td style="background-color: rgba(255,128,0,0.7);">Descripcion</td>
        </tr>
      
      <?php
while (($fila=mysqli_fetch_row($resultados))==true){
   ?> 
   <tr>
     <td><?php echo $fila[1]; ?></td>
     <td><?php echo $fila[2]; ?></td>
     <td><?php echo $fila[3]; ?></td>
   </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conexion);
}
?>
<?php
@$mibusqueda=$_GET["buscar"];
    $mipagina = $_SERVER['PHP_SELF'];
     if($mibusqueda != NULL) :
         ejecuta_consulta($mibusqueda);
      else: 
?>
<form action="<?php $mipagina?>" method="get">
         <label for="buscar"><input type="search" name="buscar" id="buscar" placeholder="Introduce un servicio" class="form-control mr-sm-2"></label>
         <button class="btn btn-success" type="submit">buscar</button>      
      </form>
      
      <?php
      endif;
      ?>


<!--Codigo php de busqueda-->
        </div>
        <!--Termina la barra de busqueda-->
<!--Inician los servicios -->
        <div class="col-12  col-sm-12 col-md-12 col-lg-12 col-xl-12 borde2">
    
    <div class="progress"style="height: 35px">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%; background-color: rgba(0,0,0,0.7);font-size: 25px;"><b>Servicios preventivos y correctivos</b></div>
        </div>
            <div class="row justify-content-center">
            <div class="card">
            <img src="imgsS/i1.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>Cambio de aceite<br> y filtro<br> $80</b></h6>
            </div>
            </div>

        <div class="card">
            <img src="imgsS/i2.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>Afinacion menor<br> $350</b></h6>
            </div>
        </div>

        <div class="card">
            <img src="imgsS/i3.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>Cambio de balatas<br> Y ajuste de frenos<br> $250</b></h6>
            </div>
        </div>

        <div class="card">
            <img src="imgsS/i4.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>Revision del sistema<br>de suspensión<br> $80</b></h6>
            </div>
        </div>

        <div class="card">
            <img src="imgsS/i5.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>$revisión del sistema<br>de dirección incluye<br>alineacion y balanceo<br> $200</b></h6>
            </div>
        </div>

        <div class="card">
            <img src="imgsS/i6.jpg" style="width: 200px;"class="float-right rounded-circle img-thumbnail">
            <div class="card-body bg-warning">
                <h6 class="card-title"><b>Afinación mayor<br>$550</b></h6>
            </div>
        </div>


               <!-- </div>     -->
			     

            </div>
			</div>
    	</div>
    	<!--**********Terminan los servicios***********-->
<style type="text/css">
#car2 {
  opacity: 0.85;
  filter: alpha(opacity=85); /* For IE8 and earlier */
}

#car2:hover {
  opacity: 1.0;
  filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<!--**********inicia el footer***********-->
<div class="container-fluid fixed-bottom">
	
	   <footer style="background-color: orange; font-size: 22px; text-align:  center;"><b>...Antonio Pérez Vázquez...
       </b></footer>
    
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