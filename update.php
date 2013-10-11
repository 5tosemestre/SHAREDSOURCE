<?php       
    include("conexion.php");

   if(isset($_REQUEST['text']) && !empty($_REQUEST['text'])) 
    {
     $con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$con)or die("problemas al conectar la bd");
      $idcod = $_REQUEST['id'];
      $codigo = $_REQUEST['text'];
  $sql = "UPDATE prueba SET ";
  $sql.= "codigo='".$codigo."'";
  $sql.= "WHERE id=".$idcod;
mysql_query($sql, $con);

 // include("UpdateVista.php");

  header("location:MensajeUpdate.php");

   }
 else
   {
   
  include("firstConsulta.php");
  // echo "<p>No se ha actualizado correctamente</p>";


    }

?>