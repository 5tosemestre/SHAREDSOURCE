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


    <title>Ver C&oacute;digo</title>
    <link href="css_mensajes/ui-darkness/jquery-ui-1.8.16.custom.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js_mensajes/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js_mensajes/jquery-ui-1.8.16.custom.min.js"></script>
    <title>Ver C&oacute;digo</title>
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
                window.location.href="firstConsulta.php";
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

    <div id="dialogo" title="Id no encontrado" style="display:none;">
        <p>El id del c&oacutedigo no existe</p>
    </div>
</body>
</html>