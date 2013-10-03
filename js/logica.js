$(document).ready(function(){

  $("p").click(function(e){
  	 var datos=$(this).attr('value'); 

  	   
 
    var url="SegundaConsulta.php?fecha="+datos;
    $(location).attr("href",url);

                           
  });

});