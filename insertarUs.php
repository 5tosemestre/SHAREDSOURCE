         <?php
   
    include("conexion.php");

   if(isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])&&     

    isset($_REQUEST['pasword']) && !empty($_REQUEST['pasword'])&&   

    isset($_REQUEST['nick']) && !empty($_REQUEST['nick'])&&     

    isset($_REQUEST['rol']) && !empty($_REQUEST['rol'])) 
    {
      $con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$con)or die("problemas al conectar la bd");
      
      
 $roles=$_POST['rol'];
 $usu=$_REQUEST['nick'];
 $query2="SELECT * FROM usuarios WHERE usuario = '$usu'";
 $respuesta=mysql_query($query2,$con);
 if(mysql_fetch_assoc($respuesta)){
  
echo "<h1>El usuario ya existe, Verifique sus datos</h1>";
header("location:mensajeusuario.php");
}else{
   
  mysql_query("INSERT INTO usuarios(nombre,contrasenia,usuario,roles_id) 
VALUES ('$_REQUEST[nombre]','$_REQUEST[pasword]','$_REQUEST[nick]','$roles')",$con);

    echo "<h1> ¡DATOS GUARDADOS EXITOSAMENTE!</h1>";
header("location:mensajeguardado.php");

   }}
 else
   {
    Include("newuser.php");
     echo "<h1>NO SE GUARDARON LOS DATOS</h1>";
    }


?>
  