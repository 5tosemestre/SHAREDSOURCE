$(document).ready(function(){

  $("p").click(function(e){

    	 var datos=$(this).attr('value'); 

    var url="SegundaConsulta2.php?fecha="+datos;
    $(location).attr("href",url);
                           
  });

});



