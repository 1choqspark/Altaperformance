<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//lo que esta entre comillas es el name del formulrio de la pagina anteror

$nombreu=$_GET["NomU"];
$contraseña=$_GET["Pass"];

if (($tipo != "1") || ($tipo != "0")) {
	# code...
	echo "Usuario no registrado";
}
//  $busqueda = $_GET['buscar'];

require("datos_conexion_reg.php");

$conexion =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
	echo "Fallo al conectar la databeis";
	exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

$consulta="INSERT INTO usuarios (Nombre,Apellidos,NombreUsuario,Password,Correo,TipoUsuario) values ('$nombre','$apellidos','$nombreu','$contraseña','$correo',$tipo)";

$resultados=mysqli_query($conexion,$consulta);

if($resultados==false){
	echo "Error en la insercion";
	?>
	<button onclick="location.href='registro.php'">Volver a intentarlo</button>
	<?php
}else{
	echo "Datos ingresados con exito";

	?>
	<button onclick="location.href='Indexcompleja.html'">Click aqui para continuar</button>
	<?php
}

mysqli_close($conexion);


?>
</body>
</html>