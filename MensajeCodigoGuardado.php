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
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
    <link href="css_mensajes/ui-darkness/jquery-ui-1.8.16.custom.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js_mensajes/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js_mensajes/jquery-ui-1.8.16.custom.min.js"></script>

    <title>Nuevo C&oacutedigo</title>
     <style type="text/css">
body
{
    font-size:0.9em;
}

.wraper{
    margin:0 auto;
    width:400px;
    height:auto;

    /*Borde redondeado*/
    border:1px solid #000;
    border-radius: .8em;
    -moz-border-radius: .8em;
    -webkit-border-radius: .8em;
    -o-border-radius: .8em;
}

.informacion
{
    text-align:center;
}

</style>

<script type="text/javascript">
$(document).ready(function(){
    
    // Formateamos el botón Diálogo sencillo
    $('#dialogSencillo').button();
    // Damos formato a la Ventana de Diálogo    
    $('#dialogo').dialog({
        // Indica si la ventana se abre de forma automática
        autoOpen: false,
        // Indica si la ventana es modal
        modal: true,
        // Largo
        width: 350,
        // Alto
        height: 200,
        // Creamos los botones
        buttons: {
            Aceptar: function() {
                // ir al sitio oficial jquery.com
                window.location.href="newcode.php";
            }
            
        }
    });
    
    // Mostrar Diálogo Sencillo
 $(document).ready(function(){
    $(".ui-dialog-titlebar-close").hide();
        $('#dialogo').dialog('open');
    });

});
</script>
</head>

<body>
<div id="dialogo" title="C&oacutedigo Guardado" style="display:none;">
        <p>El C&oacutedigo ha sido guardado correctamente</p>
    </div>
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
            <li id="tray-active"><a href="mainpage.php">Bienvenidos</a></li> <!-- Active page -->
            <li><a href="newcode.php">Nuevo C&oacutedigo</a></li>
           <li><a href="firstConsulta.php">C&oacutedigos Guardados</a></li>
             <li><a href="newuser.php">Nuevo Usuario</a></li>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="historial.php" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span>
                        <input type="text" size="30" name="ide"  onfocus="this.value=''" value="Buscar"/>                     </div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">


 <form action="insertar.php"  method="get" name="inser" onsubmit="return comprobar()">
    <table>
        <tr><td><span><label for="filename" font-size: 13px>ID del &uacuteltimo registro :</label></span></td>
             <?php
include_once("conexion.php");
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);

$query="SELECT max(prueba.id) as id FROM prueba";
$listado = mysql_query($query) or die(mysql_error());   


while($registro = mysql_fetch_assoc($listado))
{
   echo "<td><label  name=\"validacion\"  cols=\"5\" rows=\"1\">"
   .$registro['id'].
  "</label></td></tr>";

}

?>         </br>
     <tr></tr>
            <td><span><label for="filename" font-size: 13px>Nombre:</label></span></td>
    
            <td><span><input  name="inputName" type="text" width="220px" onfocus="restaurar()"/></span></td>
        </br>
            <td><font color="red"><p id="aviso"></p></td>
        </tr>
      
      <tr><tr>
      <td></td></tr>
             <td><button type="submit" style='width:130px; height:35px; background-color: #F4590C; color:white' ><strong>Guardar</strong></button></td>

    </tr>
    </table>
   
 <div id="col-browsr"></div> 

 
            <h3><span></span>Escribe aqu&iacute tu c&oacutedigo.</h3>
            


            <textarea id="example_1" name="text" style="height: 350px; width: 100%;" name="test_1">

        </textarea>



        
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    </form>

        <script language="Javascript" type="text/javascript">
</script>                   
<!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right">P&aacutegina Web</a> presentada por 5to Semestre de Ingenier&iacutea en Computaci&oacuten</p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
