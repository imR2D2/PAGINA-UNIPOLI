<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css" media="all" >
    <link rel="stylesheet" type="text/css" href="css/inicio1.css" media="all" >
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Inicio</title>
    <style type="text/css">
        img.logos{width: 90px; height: 35px;}
    </style>
</head>
<body>
    <!--Inicio de la cabecera-->
    <header id="header">
        <div id="logotipo">
            <img src="img/logo.png" alt="logo" title="logo">
        </div>
        <h1></h1>
        <h1>
            <a href="">
                Universidad Politecnica de Durango
            </a>
        </h1>
    </header>
    <!--Fin de la cebecera-->
    
    <section>
        <div class="row no-gutters">

    <!--Menu de navegacion-->
    <nav id="nav">
        <ul>
            <li><a href="">Inicio</a></li>
            <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Informacion</a></li>
            <li><a href="#membresia">Membresias</a></li>
            <li><a data-bs-toggle="modal" data-bs-target="#exampleModal">Contacto</a></li>
            <li><a href="login.php">Iniciar Sesion</a></li>
        </ul>
    </nav>
    <!--Fin del menu navegacion-->
        </div>
    </div>
    
    <div class="row no-gutters">
        <div class="col-lg-1 border-right">
            <div class="d-flex">
                <ul class="list-unstyled align-self-center mx-auto">
                    <li class="sideways"><a href="http://unipolidgo.edu.mx" target="_blank" class="text-light">Control Escolar</a></li>
                    <li class="sideways"><a href="https://plataforma.unipolidgo.edu.mx/moodle/" target="_blank"class="text-light">Moodle</a></li>
                    <li class="sideways"><a href="https://www.facebook.com/unipolidgo" target="_blank"class="text-light">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 d-flex">
            <div class="container align-self-center px-5">
                <h1 class="text-uppercase mb-4 bold">Graduacion 2021</h1>
                <p class="leadd-xl mb-4">Que esperas para pasar un dia increible, compra tus membresias</p>
                <button class="btn btn-primary">ENTRAR</button>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="container">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/c2.png" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img/c1.png" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img/c3.png" class="d-block w-100" alt="Third slide">
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                </div>
            </div>
        </div>   

            <!--Sistema de paquetes -->
    <div class="membresias" id="membresia">
        <h1>TIPOS DE MEMBRESIAS</h1>
    </div>

    <div class="pricing-table">
		<div class="pricing-card">
        <h3 class="pricing-card-header">ORO</h3>
            <div class="price"><sup>$</sup>4000<span>/Por Persona</span></div>
                <ul>
					<li>Adquiere tus lugares para este gran evento de graduacion.
                        <br><br>¡VAMOS, VEN Y ADQUIERELAS!</li>
				</ul>
                <a href="login.php" class="order-btn">¡ORDENA AHORA!</a>   
	    </div>

		<div class="pricing-card">
        <h3 class="pricing-card-header">PLATA</h3>
            <div class="price"><sup>$</sup>2000<span>/Por Persona</span></div>
                <ul>
					<li>Adquiere tus lugares para este gran evento de graduacion.
                        <br><br>¡VAMOS, VEN Y ADQUIERELAS!</li>
				</ul>
                <a href="login.php" class="order-btn">¡ORDENA AHORA!</a>    
	    </div>

		<div class="pricing-card">
        <h3 class="pricing-card-header">BRONCE</h3>
            <div class="price"><sup>$</sup>1000<span>/Por Persona</span></div>
                <ul>
					<li>Adquiere tus lugares para este gran evento de graduacion.
                        <br><br>¡VAMOS, VEN Y ADQUIERELAS!</li>
				</ul>
                <a href="login.php" class="order-btn">¡ORDENA AHORA!</a>    
	    </div>
        </div>
    <!--Fin del carrusel-->
        
    </div>
</section>

<!--Inicio del footer -->
<footer id="footer">
    <p>&copy; Desarrollado por Arturo Hernandez</p>
    <p>Mas contenido y formacion de desarrollo web en <a href="#">link-Arturo-Hernandez</a></p>
</footer>
    
<!--Inicio del modal de contactos -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CONTACTOS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <i class="fas fa-globe"></i><h1>http://unipolidgo.edu.mx</h1>
            <br>
            <i class="fas fa-phone-alt"></i><h1>45 64260</h1>
            <br>
            <i class="fas fa-envelope"></i><h1>unipoli@unipolidgo.edu.mx</h1>
        <div class="mb-3">    
            
        </div>
        </div>
        </div>
    </div>
</div>
<!-- Fin del modal de contactos-->

<!--Inicio del modal de membresia -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">MEMBRESIAS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <i class="fas fa-globe"></i><h1>http://unipolidgo.edu.mx</h1>
            <br>
            <i class="fas fa-phone-alt"></i><h1>45 64260</h1>
            <br>
            <i class="fas fa-envelope"></i><h1>unipoli@unipolidgo.edu.mx</h1>
        <div class="mb-3">    
            
        </div>
        </div>
        </div>
    </div>
</div>
<!-- Fin del modal de membresia-->

<!--Inicio del modal de informacion -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INFORMACION</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card align-self-center" style="width: 18rem;">
            <ul class="list-group list-group-flush">
            <div class="card-header">
            UBICACION DEL EVENTO: 
            </div>
        <li class="list-group-item">Se llevara acabo en el salon "Las Palmas" en Durango, Dgo.</li>
            <div class="card-header">
            DIA DEL EVENTO: 
            </div>
        <li class="list-group-item">Los esperamos a partir de las 6:00 P.M. </li>
            <div class="card-header">
            MAPA DE LA UBICACION: 
            </div>
        <li class="list-group-item"><a href="https://goo.gl/maps/z4gPV8MLuWJr2yZ48" target="_blank">Link Google Maps</a></li>
            </ul>
        </div>           
        </div>
    </div>
</div>

<!-- Fin del modal de informacion-->



</body>
</html>