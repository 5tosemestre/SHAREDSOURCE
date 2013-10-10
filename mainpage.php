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

    <title>Homepage</title>
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
                    <input type="text" size="30" name="ide" id="ide" onfocus="this.value=''" value="Buscar" /></div>
                     <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>

        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">

        <div id="col-text">

            <h2 id="slogan">C&oacutedigo Compartido.</h2>
            
            <p>Bienvenidos a <strong>SHARED SOURCE</strong>. Una P&aacutegina Web que permite guardar c&oacutedigos en una Base de Datos Local. As&iacute como tambi&eacuten permite buscar en dicha
             Base de Datos archivos existentes y poder visualizarlos. Esta p&aacutegina permite guardar c&oacutedigos en 3 lenguajes diferentes. JavaScript, HTML y CSS.</p>
        
        </div> <!-- /col-text -->
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>
    
    <hr class="noscreen" />
    
   <!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right">P&aacutegina Web presentada por 5to Semestre de Ingenier&iacutea en Computaci&oacuten</p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->
</div> <!-- /main -->

</body>
</html>
