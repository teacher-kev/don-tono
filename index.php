<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Don Toño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">Don Toño</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sucursales</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Precios</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="productos.php">Herramientas</a></li>
                        <li><a class="dropdown-item" href="productos.php">Construcción</a></li>
                        <li><a class="dropdown-item" href="productos.php">Techos</a></li>
                    </ul>
                    </li>
                </ul>

                <div class="ms-lg-auto mt-3 mt-lg-0">

                <?php if (isset($_SESSION['usuario_id'])): ?>

                    <div class="dropdown">
                        <a class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            
                            <i class="fa-solid fa-circle-user me-2"></i>
                            <?php echo $_SESSION['nombre']; ?>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fa-solid fa-id-card me-2"></i> Perfil
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <a class="dropdown-item text-danger" href="php/logout.php">
                                    <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
                                </a>
                            </li>

                        </ul>
                    </div>

                <?php else: ?>

                    <a class="btn btn-outline-primary me-2" href="login.html">Login</a>
                    <a class="btn btn-primary" href="registro.html">Registrarse</a>

                <?php endif; ?>

                </div>



                <!-- <div class="ms-auto">
                    <a href="#" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#" class="btn btn-primary">Registrarse</a>
                </div> -->
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ferre1.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Todo para tus proyectos</h5>
                    <p>Encuentra herramientas y materiales de calidad para construir, reparar y mejorar tu hogar.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre2.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Las mejores herramientas</h5>
                    <p>Contamos con una amplia variedad de herramientas para profesionales y aficionados.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dontono.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ferretería Don Toño</h5>
                    <p>Más que una ferretería, somos tu aliado para cada proyecto de construcción y mantenimiento.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre3.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Atención que genera confianza</h5>
                    <p>Te asesoramos para que encuentres los productos adecuados y completes tus proyectos con éxito.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <div class="container py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5"> 
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
                <img src="img/herramientas.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> 
            </div> 
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    Todo lo que necesitas para construir, reparar y mejorar tu hogar
                </h1> 
                <p class="lead">
                    En Ferretería Don Toño encontrarás herramientas, materiales de construcción, artículos para techos electricidad, plomería y mucho más. Ofrecemos productos de calidad y atención personalizada para profesionales y proyectos del hogar.
                </p> 
                <div class="d-grid gap-2 d-md-flex justify-content-center justify-content-lg-start">
                    <a class="btn btn-primary btn-lg px-4 me-md-2" href="login.html">Iniciar Sesión</a> 
                    <a class="btn btn-outline-secondary btn-lg px-4" href="registro.html">Registráte</a>
                </div> 
            </div> 
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col text-center text-lg-start">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient rounded p-3 fs-2 mb-3">
                    <i class="fa-solid fa-hammer icono"></i>
                </div> 
                <h3 class="fs-2 text-body-emphasis">Herramientas de Calidad</h3> 
                <p>
                    Contamos con martillos, taladros, llaves, destornilladores y herramientas profesionales para todo tipo de trabajos de construcción y reparación.
                </p> 
                <a href="productos.php" class="icon-link">Ver Productos
                    <svg class="bi" aria-hidden="true">
                        <use xlink:href="#chevron-right"></use>
                    </svg> 
                </a>
            </div> 
            <div class="col text-center text-lg-start">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient rounded p-3 fs-2 mb-3">
                    <i class="fa-solid fa-screwdriver-wrench icono"></i> 
                </div> 
                    <h3 class="fs-2 text-body-emphasis">Materiales de Construcción</h3> 
                    <p>
                        Encuentra cemento, arena, bloques, láminas y materiales esenciales para desarrollar proyectos de construcción con la mejor calidad.
                    </p> 
                    <a href="#" class="icon-link">Ver Productos
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#chevron-right"></use>
                        </svg> 
                    </a> 
            </div> 
            <div class="col text-center text-lg-start">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient rounded p-3 fs-2 mb-3">
                        <i class="fa-solid fa-gear icono"></i>
                        </div> 
                        <h3 class="fs-2 text-body-emphasis">Asesoría Personalizada</h3> 
                        <p>
                            Nuestro equipo está listo para ayudarte a elegir los productos adecuados para tu proyecto, brindándote atención cercana y recomendaciones confiables.
                        </p> 
                        <a href="login.html" class="icon-link">Ver Servicios
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> 
                        </a> 
            </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>