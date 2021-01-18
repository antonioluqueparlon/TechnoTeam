<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationTecnologia.php"); ?>


    <main>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1>Los grandes errores que cometen las empresas después de sufrir un ciberataque</h1>
                        <div class="card img-fluid">
                            <a href="noticiasTecnologia/noticias/noticiaEmpresa.php">
                                <img class="card-img-top img-fluid" src="https://static1.abc.es/media/tecnologia/2021/01/13/ciber-2-kVEI--620x349@abc.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <p class="card-text font-weight-bold txtTop">En los últimos cuatro años, los ciberdelitos han crecido un 135%</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
                    <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
                        <h1>Últimas noticias</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Xiaomi lanza un medidor para ver la calidad del aire en tu móvil</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Mejores gadgets para luchar contra los virus y bacterias en casa</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Xiaomi lanza una cerradura inteligente ¡con desbloqueo facial!
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Esta batería externa Xiaomi con 10.000 mAh y carga rápida, es la mejor opción para viajar</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!--FIN DE ÚLTIMAS NOTICIAS EN PANTALLAS GRANDES 
    CARRUSEL DE NOTICIAS PARA PANTALLAS MÓVIL
    -->
                    <div class="col-sm-12 d-sm-block d-block d-md-none ">
                        <h1>Últimas noticias</h1>
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="noticia.php">
                                        <img class="img-fluid" src="http://lorempixel.com/output/nightlife-q-c-404-179-9.jpg" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/abstract-q-c-404-179-7.jpg" class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/people-q-c-404-179-7.jpg" class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.carousel -->


                    <!--TARJETAS DE NOTICIAS -->
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/xlarge/public/field/image/2020/04/xbox-series-x-new-logo.jpg?itok=jiiO13jS" class="card-img imgApartadoNoticias" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Ni cargador, ni microSD, ni auriculares: Samsung los elimina en los Galaxy S21 y hace pensar que será lo habitual</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021
                                            </small></p>
                                        <p class="card-text indexNoticiaTexto">This is a wider card with supporting text
                                            below as a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia ">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://cdn.vox-cdn.com/thumbor/ak0ZZeT6UIPYpcDSVfS6RcOR73w=/0x0:2640x1749/1200x675/filters:focal(1128x940:1550x1362)/cdn.vox-cdn.com/uploads/chorus_image/image/67414958/twarren_rtx3080.0.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">HTC Desire 21 Pro 5G: el primer Desire con 5G tiene pantalla de 90 Hz y cuatro cámaras traseras</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">This is a wider card with supporting text
                                            below as a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://media.vandal.net/i/1706x960/1-2021/2021111940055_1.jpg.webp" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Qualcomm presenta su nuevo lector de huellas ultrasónico bajo la pantalla: dice ser un 50% más rápido que el anterior</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">This is a wider card with supporting text
                                            below as a natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>