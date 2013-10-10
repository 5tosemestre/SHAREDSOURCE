<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
//include("seguridad.php");
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

    <title></title>
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
                window.location.href="index.php";
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

<div id="dialogo" title="Error" style="display:none;">
        <p>Verifique usuario y contraseña</p>
    </div>
<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
       

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
             <!-- Active page -->
        </ul>

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">
        <div id="col-text">



            <form  method="POST" name="indes" id="formulario"  onsubmit="return comprobar()" action="login.php">
            <table>
                 <tr>
                     <td><h3>Usuario:</h3></td>
                     <td><input type="text" size="25" name="user" onfocus="restaurar()"/></td>
                     
                     <td><font color="red"><p id="aviso"></p></td>
                </tr>
                <tr>
                      <td><h3>Contraseña:</h3></td>

                    <td><input type="password" size="25" name="pass" onfocus="restaurar2()"/></td>
                    <td><font color="red"><p id="aviso2"></p></td>

                </tr>
            </table>
            
            <p id="btns">
               <center> <button type="submit" style='width:130px; height:35px; background-color: #F4590C; color:white' ><strong>Ingresar</strong></button> </center>
              
            </p>
        </form>
        </div> <!-- /col-text -->
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    
    
<!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right">P&aacute;gina Web</a> presentada por 5to Semestre de Ingenier&iacute;a en Computaci&oacute;n</p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacute;noma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>
