<html>
<?php
include("seguridad.php");
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="author" lang="en" content="All: Your name [www.url.com]; e-mail: info@url.com" />
    <meta name="copyright" lang="en" content="Webdesign: Nuvio [www.nuvio.cz]; e-mail: ahoj@nuvio.cz" />

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/estilot.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />

    <title>Segunda Consulta</title>
</head>

<body>

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
        <div id="nav">
             <a href="logout.php?cerrar"id="nav-active">Cerrar sesi&oacuten</a> <span>|</span>
       
        </div> <!-- /nav -->

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
            <li id="tray-active"><a href="main.php">Bienvenidos</a></li> <!-- Active page -->
      
            <li><a href="firstConsulta2.php">C&oacutedigos Guardados</a></li>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="historial2.php" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="ide"

                     placeholder="Buscar: " /></div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">
 <form>
    
            
<center>
            <table border="5">
            <tr>
                <th>Id</th>
                <th>Hora</th>
                
                <th>Nombre</th>
           
            </tr>
            <tr>
<?php
include("conexion.php");
$fecha=$_REQUEST['fecha'];
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);

$query="SELECT id,hora, nombre from prueba where fecha='$fecha' order by hora desc;";
$listado = mysql_query($query) or die(mysql_error());   
while($registro = mysql_fetch_assoc($listado))
{
   echo "</tr><tr><td><font color='navy'><p>".$registro['id']."</p><td></br>".$registro['hora']."<td></br>".$registro['nombre']."</td>";
}

?>

</tr>
            
        </table></center>
  
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    </form>
    

   <!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right">P&aacutegina Web</a> presentada por 5to Semestre de Ingenier&iacutea en Computaci&oacuten</p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>


    </div> <!-- /footer -->
</div> <!-- /main -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-1.5.min.js"></script>
<script src="js/logica4.js"></script>
</body>
</html>