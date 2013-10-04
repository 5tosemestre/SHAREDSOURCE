<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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

    <title>P&aacute;gina Principal</title>
    <script type="text/javascript">
function comprobar() { 
         var nombre = document.indes.user;
         var apellido = document.indes.pass;
         var aviso = document.getElementById("aviso");
         var aviso2 = document.getElementById("aviso2");

         aviso.innerHTML = ""
         aviso2.innerHTML = ""

         var enviar = "si"
         if (nombre.value == "" || nombre.value.indexOf(" ") == 0) {
            var texto = "Es obligatorio introducir el nombre."  
            aviso.innerHTML += texto
            enviar = "no"
            }
         if (apellido.value == "" || apellido.value.indexOf(" ") == 0 ) {
            var texto = "Es obligatorio introducir la Contraseña."  
            aviso2.innerHTML += texto
            enviar = "no"
            }

         if (enviar == "no") {return false}
         }
function restaurar() {
         var aviso = document.getElementById("aviso");
         aviso.innerHTML = ""
         }
function restaurar2() {
         var aviso2 = document.getElementById("aviso2");
         aviso2.innerHTML = ""
         }
</script>
</head>

<body>

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
                     <td><p id="aviso"></p></td>
                </tr>
                <tr>
                      <td><h3>Contraseña:</h3></td>
                    <td><input type="password" size="25" name="pass" onfocus="restaurar2()"/></td>
                    <td><p id="aviso2"></p></td>
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
