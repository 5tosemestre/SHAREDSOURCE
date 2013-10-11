<html>
<?php
include("seguridad.php");
if($_SESSION['k_nam']==1){
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

    <title>Nuevo C&oacutedigo</title>


   <script type="text/javascript">
function comprobar() { 
         var nombre = document.tabla.nombre;
         var apellido = document.tabla.pasword;
         var nic = document.tabla.nick;
         var roles = document.tabla.rol;
         var aviso = document.getElementById("aviso");
         var aviso2 = document.getElementById("aviso2");
         var aviso3 = document.getElementById("aviso3");
         var aviso4 = document.getElementById("aviso4");

         aviso.innerHTML = ""
         aviso2.innerHTML = ""
         aviso3.innerHTML = ""
         aviso4.innerHTML = ""
         var enviar = "si"
         if (nombre.value == "" || nombre.value.indexOf(" ") == 0) {
            var texto = "Es obligatorio introducir el nombre."  
            aviso.innerHTML += texto
            enviar = "no"
            }
         if (apellido.value == "" || apellido.value.indexOf(" ") == 0 ) {
            var texto = "Es obligatorio introducir la contraseña."  
            aviso2.innerHTML += texto
            enviar = "no"
            }
        if (nic.value == "" || nic.value.indexOf(" ") == 0 ) {
            var texto = "Es obligatorio introducir el nombre del usuario."  
            aviso3.innerHTML += texto
            enviar = "no"
            }
        if (roles.value == 0) {
            var texto = " Es obligatorio elegir un rol."  
            aviso4.innerHTML += texto
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
function restaurar3() {
         var aviso3 = document.getElementById("aviso3");
         aviso3.innerHTML = ""
         }
function restaurar4() {
         var aviso4 = document.getElementById("aviso4");
         aviso4.innerHTML = ""
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
                    <div id="search-input">
                    <span class="noscreen">Search:</span>
                    <input type="text" size="30" name="ide" id="ide" placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'"/></div>
                     <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
 <div id="col-top"></div>
    <div id="col" class="box">










        <script type="text/javascript">
        function soloLetras(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8)
                return true;
            patron = /[A-Za-zñÑ\s]/;
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
        function soloNum(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8)
                return true;
            patron = /\d/;
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
        function numYletras(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8)
                return true;
            patron = /\w/;
            te = String.fromCharCode(tecla);
            return patron.test(te);
        }
    
    </script>







 <center><table>
 <form name= "tabla" action="insertarUs.php" onsubmit="return comprobar()" method="POST">
      
    <tr>
            <td><span><label for="filename" font-size: 13px>Nombre Completo:</label></span></td>
            <td><span><input  name="nombre"  onkeypress="return  soloLetras(event)" type="text" width="220px" onfocus="restaurar()"/></td>
            <td><font color="red"><p id="aviso"></p></td>
    </tr>
    <tr>
    <td><span><label for="filename" font-size: 13px>Contraseña:</label></span></td>
    <td><span><input  name="pasword"  onkeypress="return numYletras(event)" type="password" width="220px" onfocus="restaurar2()"/></span></td>
            <td><font color="red"><p id="aviso2"></p></td>
       </tr>
       <tr>
    <td><span><label for="filename" font-size: 13px>Nombre de Usuario:</label></span></td>
    <td><span><input  name="nick" onkeypress="return numYletras(event)" type="text" width="220px" onfocus="restaurar3()"/></span></td>
            <td><font color="red"><p id="aviso3"></p></td>
        </tr>
        <tr>
    <td><span><label for="filename" font-size: 13px>Roles:</label></span></td>
            <td><select name="rol"  onfocus="restaurar4()">
            <option Value="0">Selecciona una opción</option>
            <option Value="1">Administrador</option>
            <option Value="2">Usuario</option>
            </select></td>
            <td><font color="red"><p id="aviso4"> </p></td>
</tr>
<tr>
    <tr></tr>
   <td><button type="submit" style='width:110px; height:25px; background-color: #F4590C; color:white' <?php if($_SESSION['k_nam']==1){echo 'enabled';}else{echo 'disabled'; }?> ><strong>Guardar</strong></button></td>
</tr>
</table></center>
 <div id="col-browsr"></div> 
    
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
<?php }else{
    header("location:mainpage.php");
}?>
</body>
</html>
