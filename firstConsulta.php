<?php
include("seguridad.php");
include("conexion.php");
function fechaesp($date) {
    $dia = explode("-", $date, 3);
    $year = $dia[0];
    $month = (string)(int)$dia[1];
    $day = (string)(int)$dia[2];
    
    $dias = array("Domingo","Lunes","Martes","Mi&eacute;rcoles" ,"Jueves","Viernes","S&aacute;bado");
    $tomadia = $dias[intval((date("w",mktime(0,0,0,$month,$day,$year))))];
    $meses = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    
    return $day." de ".$meses[$month]." del ".$year;
}

if($_SESSION['k_nam']==1){
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);
$clave = "a12b34dsakcsuklmdsa";
$arreglo=array();
$cont=0;
$valor=$_SESSION["k_username"];
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);

$query=sprintf("SELECT fecha,count(*) from prueba where usuarios_id=%s group by %s order by %s desc;",
        mysql_real_escape_string($valor),mysql_real_escape_string('fecha'),mysql_real_escape_string('fecha'));
$listado = mysql_query($query) or die(mysql_error());   
}else{
    header("location:mainpage.php");
}
?>
<html>
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

    <title>Primera Consulta</title>
</head>

<body>

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
        <div id="nav">
            <span>|</span><a>Usuario: <?php echo $_SESSION['k_name'];?></a> <span>|</span>
            <a href="logout.php?cerrar"id="nav-active">Cerrar sesi&oacuten</a> <span>|</span>
        </div> <!-- /nav -->
 
    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
            <li id="tray-active"><a href="mainpage.php">Bienvenidos</a></li> <!-- Active page -->
            <?php if($_SESSION['k_nam']==1){echo '<li><a href="newcode.php">Nuevo C&oacutedigo</a></li>';}?>
            <?php if($_SESSION['k_nam']==1){echo '<li><a href="firstConsulta.php">C&oacutedigos Guardados</a></li>';}
            else{
                echo'<li><a href="firstConsulta2.php">C&oacutedigos Guardados</a></li>';
            }?>
            
            <?php if($_SESSION['k_nam']==1){echo '<li ><a href="newuser.php">Nuevo Usuario</a></li>';}?>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="historial.php" method="POST">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="ide"  placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'" /></div>
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
            <table border="2">
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>

    <?php

while($registro = mysql_fetch_assoc($listado)){
   $fecha_protegida = md5($clave.$registro['fecha']);
   $arreglo[$cont]=$registro["fecha"];
?>
  <tr>
   <td><br><a id="<?php $arreglo[$cont] ?>" href="SegundaConsulta.php?fecha=<?php echo $fecha_protegida ?>"> <?php echo fechaesp($arreglo[$cont]) ?> </a></td>
   <td><br><?php echo $registro['count(*)']?></td>
   </tr>
<?php
   $cont++;      
}
?>
</table>
</center>
            
                  
    
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
</body>
</html>
