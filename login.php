<?php

include("seguridad.php");
$users=$_REQUEST["user"];
$pas=$_REQUEST["pass"];
include("conexion.php");
include("subir.php");

//datos para establecer la conexion con la base de mysql.
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);
function quitar($mensaje)
{

	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}


if(trim($users) != "" && trim($pas) != "")
{

	// Puedes utilizar la funcion para eliminar algun caracter en especifico
	//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
	//$password = $HTTP_POST_VARS["password"];
	// o puedes convertir los a su entidad HTML aplicable con htmlentities


	$usuario = strtolower(htmlentities($users, ENT_QUOTES));
	$password = $pas;
	$consulta=sprintf("SELECT id,usuario,contrasenia,roles_id from usuarios WHERE usuario='%s' and contrasenia ='%s'",
		mysql_real_escape_string($usuario),
		mysql_real_escape_string($password));
	$result=mysql_query($consulta);
	if($row = mysql_fetch_array($result)){
		if($row["contrasenia"] == $password){
			$_SESSION["k_username"] = $row['id'];
			$_SESSION["k_name"] = $row['usuario'];
			$_SESSION["k_nam"] = $row['roles_id'];
			
			}else{
		
		echo 'Usuario no existente en la base de datos';
		header("location:mensajeIndex.php");


	}
	mysql_free_result($result);
}else{
	 


	echo 'Debe especificar un usuario y password';
	header("location:mensajeIndex.php");
}
}

			if($_SESSION["k_nam"]==1 || $_SESSION["k_nam"]==2)

			{

				header("location:mainpage.php");
				echo $_SESSION['k_username'];
			}
		

mysql_close();

?>
