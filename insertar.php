<?php

             $msj=" DATOS GUARDADOS EXITOSAMENTE ";
   include("seguridad.php");
 $id=$_SESSION["k_username"];
    include("conexion.php");

   if(isset($_REQUEST['inputName']) && !empty($_REQUEST['inputName'])&&     

    isset($_REQUEST['text']) && !empty($_REQUEST['text'])) 
    {
      $con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$con)or die("problemas al conectar la bd");



   
      mysql_query("INSERT INTO prueba(nombre,codigo,fecha,hora,usuarios_id) 
VALUES ('$_REQUEST[inputName]','$_REQUEST[text]',curdate(),curtime(),$id)",$con);
      
Include("newcode.php");  
     //echo "<h1> DATOS GUARDADOS EXITOSAMENTE...!!</h1>";
echo"
<script language='JavaScript'>
alert('DATOS GUARDADOS EXITOSAMENTE');
 location.href='newcode.php';
</script>";

 

   }
 else
   {
    Include("newcode.php");
     echo "<h1>NO SE GUARDARON LOS DATOS</h1>";
    }

?>
  