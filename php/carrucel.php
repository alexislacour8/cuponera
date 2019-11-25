

  <script type="text/javascript">
  $(window).bind("load resize slid.bs.carousel", function() {
  var imageHeight = $(".active .holder").height();
  $(".controllers").height( imageHeight );
  console.log("Slid");
});
</script>
<?php
include '../conexiones/conexion.php';

$con= new Conexion();
   $fechaactual=date("Y-m-d");
    $query= $con->prepare("select * from productos where fecha >= '$fechaactual' LIMIT 3");

    $query ->execute();
    $resultado= $query->fetchAll();

foreach ($resultado as $res) {
    echo "<div id='micarouselinicio' class='carousel slide' data-ride='carousel'>
<!-- Wrapper for slides -->
<div id='myCarousel' class='carousel-inner'>
<div class='item nolosoñe'>
  <div class='holder col-sm-12 col-lg-8 col-md-8 col-xs-12'>
    <img class='img-responsive' src=".$res['imagen'].">
     <div class='hidden-lg hidden-md'>
  <div class='carousel-caption'>
         <h3>".$res['nombre']."</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
           <p class='pre' >$".$res['precio']."</p>
       <p class='ofert'>$ ".$res['precio']."</p>
       <a class='btn btn-success'>Ver oferta</a>
     </div>
     </div>
  </div>
  <div class='col-sm-4 hidden-xs'>
    <div class='hidden-sm'>
    <div class='carousel-caption1'>
        <h3>Samsung A20</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
       <p class='oferta'>$".$res['precio']."</p>
       <p class='precio'>$".$res['precio']."</p>
      </div>
    </div>
  </div>
</div>

";
}
echo "<div class='controllers col-sm-8 col-xs-12'>
<!-- Controls -->
  <a class='left carousel-control' href='#micarouselinicio' data-slide='prev'>
    <span class='glyphicon glyphicon-chevron-left'></span>
  </a>
  <a class='right carousel-control' href='#micarouselinicio' data-slide='next'>
    <span class='glyphicon glyphicon-chevron-right'></span>
  </a>
  <!-- Indicators -->
  <ol class='carousel-indicators'>";
    
        for($x=0;$x<count($res);$x++){
                echo "<li data-target='#micarouselinicio' data-slide-to='".(string)$x."' ></li>";
        }
         

 echo "</ol></div></div>"; 
  



   
  ?>
             <script>
                $(document).ready(function(){
                    $(".nolosoñe").first().addClass("active");
                });
                
            
            </script>