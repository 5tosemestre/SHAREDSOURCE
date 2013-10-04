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

  include("UpdateVista.php");

     //echo "<p> Se ha actualizado correctamente</p>";

  echo"
<script language='JavaScript'>
alert('Se ha actualizado correctamente');
 location.href='firstConsulta.php';
</script>";


   }
 else
   {
   
  include("UpdateVista.php");
    // echo "<p>No se ha actualizado correctamente</p>";
      echo"
<script language='JavaScript'>
alert('Campo no admitidos');

</script>";

    }

?>