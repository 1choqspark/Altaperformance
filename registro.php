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
								<li class="nav-item"><a href="index.php" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Login</b></a></li>
							</ul>
						</div>
					</nav>
			</header>

		</div>
		<!--**********Termina el conteneor del header***********-->
		<!--**********inicia el titulo***********-->
		<div class="container-fluid col-11">
			<div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 35px; background-color: rgba(255,0,0,.75);font-size: 25px; color: black;"><b>...Registro...</b></div>
			<!--**********termina el titulo***********-->
<!--inicia formulario-->
<h1>Registro Usuarios</h1>
	<form name="form1" method="get" action="insertar_registro.php">
		<table border="0" align="center">

			<tr>
				<td>Nombre</td>
				<td><label for="Nom"></label>
					<input type="text" name="Nom" id="Nom"></td>
			</tr>

			<tr>
				<td>Apellidos</td>
				<td><label for="Ape"></label>
					<input type="text" name="Ape" id="Ape"></td>
			</tr>

			<tr>
				<td>Nombre de Usuario</td>
				<td><label for="NomU"></label>
					<input type="text" name="NomU" id="NomU"></td>
			</tr>

			<tr>
				<td>Contraseña</td>
				<td><label for="Pass"></label>
					<input type="text" name="Pass" id="Pass"></td>
			</tr>

			<tr>
				<td>Correo</td>
				<td><label for="Email"></label>
					<input type="text" name="Email" id="Email"></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

			<tr>
				<td align="center"><input type="submit" name="Enviar" id="enviar" value="Enviar"></td>
				<td align="center"><input type="reset" name="Borrar" id="borrar" value="Borrar"></td>
			</tr>

		</table>
	</form>
<!--Termina formulario-->

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