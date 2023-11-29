<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.ggogleapis.com/css2?familiy=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Integrador I</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .caption-center {
        top: 60%;
      }
    </style>
  </head>

  <body>
     <!--  empieza  nav  --> 
<header>
           
  <nav class="navbar navbar-expand-md navbar-light bg-light scrolling-navbar fixed-top">

    <div class="container-fluid">
      
      <img src="imagenes/logo.png" alt="Logo" width="150" height="70" class="d-inline-block align-text-top">
      

      <a class="navbar-brand" href="#"><strong>Charlas y talleres</strong></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#nuevo">Lugar y fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#charlas">Charlas y vídeos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#talleres">Talleres: reservá tu lugar</a>
          </li>
          
          <li class="nav-4">
            <a class="nav-link active" aria-current="page" href="#presentacion">Dar una charla</a>
          </li>
          <li><a href="tickets.php"  target="_parent">Tickets</a></li>
       
        </ul>
       
      </div>
    </div>
</nav> 

</header>
<!--  termina  nav  -->

<main>
        <div class="container-fluid">
       
            <!--  empieza  carousel -->
            <div class="row">
              <div class="col-12">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagenes/wichí.jpeg" class="d-block w-100" alt="Textiles Wichí">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning" >Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagenes/mapuches.png" class="d-block w-100 " alt="Textiles Mapuches">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>
            
                  <div class="carousel-item">
                    <img src="imagenes/diaguitas.png" class="d-block w-100" alt="Textiles del NOA">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
            
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
            </div>
            
            </div>
            <!--  acá termina carousel -->
            </div>
            
                <!-- comienzan las cards -->
            <div class="body">
            
                <div id="charlas">
                    <h2>Charlas sobre pueblos originarios</h2>
                    <h5> Cultura, lengua, cosmovisión y técnicas textiles</h5>
                </div>
                  <div class="row">
                        <div class="card-group">
                             
                        <div class="col-1"> </div>
                        <div class="col-3">
                          <div class="card-responsive">
                            <img src="imagenes/wichi-tec.jpeg" class="img-thumbnail" alt="técnica textil wichí">
                            <div class="card-body">
                              <button type="button" class="btn btn-warning btn-sm">Charla y vídeo</button>
                              <button type="button" class="btn btn-info btn-sm">Demostración</button>
                              <h5 class="card-title">Tejido Wichí </h5>
                              <p class="card-text">Los tejidos de la cultura Wichí se realizan con la fibra de chaguar o caraguatá, una
                                planta que se usa desde tiempos prehispánicos con fines... </p>
                              <p class="card-text"><small class="text-body-secondary">más...</small></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="card-responsive">
                            <img src="imagenes/mapuche-tec.jpeg" class="img-thumbnail" alt="técnica textil mapuche">
                            <div class="card-body">
                              <button type="button" class="btn btn-warning btn-sm">Charla</button>
                              <button type="button" class="btn btn-info btn-sm">Demostración</button>
                              <h5 class="card-title">Técnica textil Mapuche</h5>
                              <p class="card-text">Los tejidos de la cultura Mapuche se realizan en telar vertical o "witral", que en
                                lengua mapuche...</p>
                              <p class="card-text"><small class="text-body-secondary">más...</small></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="card-responsive">
                            <img src="imagenes/diaguita-tec.jpeg" class="img-thumbnail" alt="técnica textil del NOA">
                            <div class="card-body">
                              <button type="button" class="btn btn-warning btn-sm">Charla y vídeos</button>
                              <button type="button" class="btn btn-info btn-sm">Demostración</button>
                              <h5 class="card-title">Técnica textil del NOA</h5>
                              <p class="card-text">El tejido en telar es una de las principales técnicas textiles del NOA. Se arma una
                                urdimbre, conjunto de hilos paralelos, que se...</p>
                              <p class="card-text"><small class="text-body-secondary">más...</small></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-1"> </div>
                     
                      </div>
                    </div>
                  
                  </div>
            
                  <!-- terminan las cards -->
                
                  <!-- aquí conocé más -->
                <div class="row">
                        <div class="col-sm-6";>
                            <img src="imagenes/arqueologico.jpeg" class="img-fluid" alt="textil arqueológico" id="textil">
                            
                        </div>
            
                        <div class="col-sm-6"; id="arq">
                          <h4>Buenos Aires - 11 y 12 Nov. 2023</h4>
                            <p><small>Textiles arqueológicos: en el sitio preincaico de Santa Rosa de Tastil, Salta, se encontraron textiles que formaban parte de ajuares funerarios. Había telas, trenzados, gorros, ondas, redes y cordelería hechos con fibras de llama y de vicuña, fechados entre los años 1336 y 1439.</small></p>
            
                             <!-- <input type="submit" id="nuevo" value="Conocé más"> -->
                    <button type="button" class="btn btn-warning" id="nuevo">Conocé más</button>
                           
                    </div>
            <!-- fin conocé más -->
            
                   <!-- inicio formulario -->
            
                   <div class="container">
                    <div class="row align-items-start">
            
                      <div class="col-sm-3">
                                  </div>
                      <div class="col-sm-6">
                <form>
                        <p id="talleres">Inscripciones</p> 
                        <h4>Talleres con cupo limitado</h4>
                        <p><small>
                          Talleres simultáneos, inscríbite en el que te gusta. 
                        </small></p>

                        

                        <!-- agrego segú clase  -->
                        <form action="datos1.php" method="post">

                        <div class="row" id="cupo">
                        <div class="form-group row">
                          <input type="text" class="nombre" placeholder="nombre" name="nombre" required>
                        </div>
                        <div class="form-group row">
                          <input type="text" class="apellido" placeholder="apellido" name="apellido" required>
                        </div>
                        <div class="form-group row">
                          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="número de teléfono" name="telefono" required>
                        </div>

                       
                          <div class="mb-1">
                          <label for="exampleFormControlInput1" class="form-label" > </label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electrónico" name="correo" required>
                          </div>
                          <div class="mb-1">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" placeholder="¿Te gustaría dar una charla? Contanos." cols="1" rows="3" required></textarea>
                          <p><small>Recuerda incluir un título para tu charla.</small></p>
                          </div>

                          <input type="submit" value="Enviar">
                          <input type="reset" value="Borrar">
                        </form>
<!-- termina agrego segú clase  -->

                         
                        
                       
                    
                        <div class="border"></div>
                      </div>
                    </form>
                  </div>
                    <div class="col-sm-3"></div>
                  </div>
            
                  </div>
            
                    <!-- fin formulario -->
    </main>

    <footer>
<!-- aquí footer -->
<div class="footer">
       
    <div class="container-fluid" id="footer">
      <div class="row">
        <div class="row p-5 mt-9 pb-1 bg-secondary text-warning">

          <div class="col-xs-12 col-md-6 col-lg-3">  <p class="h3">De nosotros </p>
            <p class="text-warning text-decoration-none">Desde Buenos Aires, Argentina, impartimos clases presenciales y a distancia.</p>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3">
            <p class="h5 mb-3">Cursos y libros</p>
            <div class="mb-1"> <a class="text-warning text-decoration-none" href="">Telar horizontal</a></div>
            <div class="mb-1"> <a class="text-warning text-decoration-none" href="">Telar de cuadros</a></div>
            <div class="mb-1">  <a class="text-warning text-decoration-none" href="">Diseño de indumentaria</a>  </div>
            <div class="mb-1">  <a class="text-warning text-decoration-none" href="">Libros</a></div>
          </div>

          <div class="col-xs-12 col-md-6 col-lg-3">
            <p class="h5 mb-3">Links</p>
            <div class="mb-2">    <a class="text-warning text-decoration-none" href="">Términos y condiciones</a></div>
            <div class="mb-2">   <a class="text-warning text-decoration-none" href="">Políticas de privacidad</a></div>
            
          </div>

          <div class="col-xs-12 col-md-6 col-lg-3"> 
              <p class="h5 mb-3">Contacto</p>
            <div class="mb-2">   <a class="text-warning text-decoration-none" href="">Instagram</a></div>
            <div class="mb-2">   <a class="text-warning text-decoration-none" href="">Facebook</a></div>
          </div>

          <div class="col-xs-12 pt-4">  <p class="text-warning text-center">Copyright - All rights reserved  &#174  2023</p> 
        </div>
            
      
      </div>
    </div>

<!-- fin footer -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>