<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
    <link rel="stylesheet" type="text/css" href="stylos/select2.css">
   <link rel="stylesheet" type="text/css" href="stylos/valida.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/select2.js"></script>
   <script type="text/javascript" src="js/categoria.js"></script>

  <script src="bootstrap/bootstrap.min.js"></script>
 
</head>
<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <b><a class="navbar-brand" href="#">Ofert%</a></b>
                </div>
                <div id="navbar" class="navbar-collapse collapse " >
                  <ul class="nav navbar-nav">
                  
                        
                       
                    
                       
                       
                    </ul>
                  
                   <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php" class="">Inicio</a></li>
                  
                        <?php if (verificarpermiso("CARGAR_CUPON")) {

                          echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>administrar<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='proveedor.php'>cargar proveedor</a></li>
                                <li><a href='cargarprod.php''>cargar cupones</a></li>
                                  <li><a href='editarpro.php''>Editar y Eliminar cupon</a></li>
                                 
                            </ul>
                        </li>";
                        }
                        ?>
                       
                   
                    </ul>

                  

                    <ul class="nav navbar-nav navbar-right">

                       <li class=" dropdown">
                          
                   <?php 
                 if(!isset($_SESSION["nombres"])){
                    echo "";

                 }
                 else{
                  echo"<a class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$_SESSION["nombres"]."<span class='sr-only'>(current)</span></a>";
                 }


                  ?>
                        </li>
                       
    
                        <li class="active dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle-o"></i>
                             <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                 <?php
                    if (!isset($_SESSION["user"])) {
   
                      echo "<li><a href='login.php'>Login</a></li>";
    # code...
                       }

                    else{
                       echo"<li><a href='cerrar.php'>Cerrar sesion</a></li>";
                       }
                 ?>
                               
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<br>
<br>
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div id="resultado"></div>
      <form role="form" action="return false" onsubmit="return false" enctype="multipart/form-data">
      
        <h2>Dar de alta cupon</h2>
        <hr class="colorgraph">
        <div class="form-group">
        <div class="form-group col-lg-12">
                    <input type="text" name="producto" id="producto" class="form-control input-lg" placeholder="Nombre"><label  id ="mensaje1">Completar campo</label>
        </div>
                <br>
               
        <div class="form-group col-lg-12">
                    <input type="number" name="precio" id="precio" class="form-control input-lg" placeholder="precio"><label  id ="mensaje2">Completar campo</label>
        </div>
        <br>
        
        <div class="form-group col-lg-6 col-xs-12">
        <select id="categorias" name="categorias" class="form-control input-lg  dropdown-toggle" type="button" data-toggle="dropdown" required>
                    <span class="caret"></span>
                  </select>
                  
                </div>
                 <br>
                    <br class="hidden-lg">
                      
                <div class="form-group col-lg-6 col-xs-12">

                  <select id="proveedor" name="proveedor" class="form-control input-lg dropdown-toggle" type="button" data-toggle="dropdown" required><span class="caret"></span>
                  </select>

                </div>
                     <br>
                       <br>
                     <div class="form-group col-lg-6">
                    <input type="text" name="cantidad" id="cantidad" class="form-control input-lg" placeholder="cantidad"><label  id ="mensaje4">Completar campo</label>
        </div>
                   
                     <br>
        <div class="form-group col-lg-6">
                    <input type="date" name="fecha" id="fecha" class="form-control input-lg" placeholder="Contraseña"><label  id ="mensaje3">Completar campo</label>
        </div>
        <br>
         
                        <div class="form-group col-xs-12 col-sd-12 col-md-12 col-lg-12">

                             <label class="col-md-4 control-label" for="exampleFormControlFile1">guardar</label>
                             
                      <div class="col-xs-12 col-sd-6 col-md-12 col-lg-12">
                  <output id="list"></output>
                  <div class="fotos btn btn-success ">
                    <p><i class="icon fas fa-download"></i>Subir foto</p>
                    <input type="file"  name="imagen"  id="imagen">
                  </div>
                </div>
                       <script type="text/javascript">
  $(document).ready(function(){
  function archivo(evt) {
  var files = evt.target.files; // FileList object
  // Obtenemos la imagen del campo "file".
  for (var i = 0, f; f = files[i]; i++) {
    //Solo admitimos imágenes.
    if (!f.type.match('image.*')) {
      continue;
    }
    var reader = new FileReader();
    reader.onload = (function(theFile) {
      return function(e) {
  // Insertamos la imagen
  document.getElementById("list").innerHTML = ['<img class="" width=80px height: 90px; src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
  console.log('dentro0');
};
})(f);
reader.readAsDataURL(f);
}
}

document.getElementById('imagen').addEventListener('change', archivo, false)

});
</script>
                            </div>
       
        
        <hr class="colorgraph">
     
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" id="boton" class="btn btn-lg btn-success btn-block" value="registro">
          </div>
          
        </div>
      
      </div>
    </form>
     
  </div>
</div>

</div>
 <script type="text/javascript" src="js/validapro.js"></script>
</body>
</html>