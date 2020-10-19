<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Web-MyGym</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <?php include("./parts/head.php"); ?>   
</head>
<body>
   <?php include('./parts/nav.php'); ?>

   <!--Comienzo Slider-->
    <section class="container-fluid mt">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid imgLimit" src="Imagenes/slider3.jpg">
                    <div class="carousel-caption d-md-block">
                        <h2 class="fontTitulo">Lorem ipsum dolor sit amet.</h2>
                        <p class="mt-5 tamanioParrafo fontParrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sed quaerat dolores dolor nostrum officiis odit, dolorem iusto eius odio recusandae vero placeat</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid imgLimit" src="Imagenes/slider2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid imgLimit" src="Imagenes/slider1.jpg">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon display-4" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon display-4" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </section>
    <!--Fin Slider-->

    <!--Comienzo Sec Actividades-->
    <section class="container-fluid">
            <div class="row tamanioParrafo">
              
                <div class="col-lg-4 col-md-6 col-sm-6 ceroMargenes ">
                  <img src="Imagenes/dep1.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block ">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ceroMargenes">
                  <img src="Imagenes/dep2.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ceroMargenes">
                  <img src="Imagenes/dep3.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 ceroMargenes col-sm-6">
                  <img src="Imagenes/dep4.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 ceroMargenes col-sm-6">
                  <img src="Imagenes/dep5.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 ceroMargenes col-sm-6">
                  <img src="Imagenes/dep6.jpg" class="img-fluid" style="height: 500px;">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="orangeHover white"><p>Lorem ipsum dolor sit amet.</p></a>
                  </div>
                </div>
                
            </div>
                       
    </section>
    <!--Fin Sec Actividades-->

    <?php include("./parts/formulario.php");?>

    <?php include("./parts/footer.php"); ?>
</body>
</html>