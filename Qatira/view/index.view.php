<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/ucayali.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Qatira</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/css/toolkit.css" rel="stylesheet">
    <link href="assets/css/application.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>

<div class="container c1" style="background-color :#fff; " > 
<br>
            <div class="row">
                <div class="col-xl-12 ">
                    <center><img src="assets/img/logo.png"  width="340px" height="170px"><br>
                     <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </center>
                  </div>  
            </div>
<br>
            <div class="row justify-content-center text-white" style="background-color: #e5f2d0">
            <div class="col-xl-8">
   
                    <center>
                        <div class="ventana-buscar">
                                <div class="input-group mb-3 w-75  ">  
                                    <input type="text" class="form-control" placeholder="Buscar un anuncio" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <span class="glyphicon glyphicon-search"></span> Buscar 
                                    </button>
                                    </div>
                                </div>

                                <div class="col-xl-12 ">
                                    <button type="button" class="btn btn-success btn-lg btn1">PUBLICAR ANUNCIO</button>
                                    <button type="button" class="btn btn-danger btn-lg  btn2 ">MODIFICAR ANUNCIO</button>
                                    <button type="button" class="btn btn-danger btn-lg  btn3 ">CREAR UN USUARIO </button>     
                                </div>
                        </div>
                    </center>
                </div>
          <div class="col-xl-4">
            <!--imagen movil-->
            <img src="assets/img/ucayali.png" class="imgucayali" style="width:300px; height: 230px;  ">
          </div>
  </div>
</div>

<section>
<!--Categoria-->
<?php include 'categoria.nav.php'; ?>
<!--fin categoria-->



<div class="container" style=" background-color :#ffffff"><hr>
    <div class="row">
        <div class="col-12 text-justify">
 Publicar en QATIRA es gratis y posible de contactar con posibles  .... Es muy fácil poner anuncios además de rápido. En total hay más de 10.000.000 de anuncios destacado.
        </div>
    </div>
</div>


</section>

<?php include 'footer.php'; ?>
<?php include 'footer-copyright.php'; ?>



</body>
</html>