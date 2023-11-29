<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.ggogleapis.com/css2?familiy=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ticket.css">
    <title>Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .caption-center {
        top: 60%;
      }
    </style>
    
</head>

<header>

    <nav class="navbar navbar-expand-md navbar-light bg-light scrolling-navbar fixed-top">

        <div class="container-fluid">
          
          <img src="imagenes/logo.png" alt="Logo" width="150" height="70" class="d-inline-block align-text-top">
    
          <a class="navbar-brand" href="index.html"><strong>Charlas y talleres</strong></a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Lugar y fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Charlas y vídeos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Talleres: reservá tu lugar</a>
              </li>
              
              <li class="nav-4">
                <a class="nav-link active" aria-current="page" href="index.html">Dar una charla</a>
              </li>        
            </ul>
            <!-- <form class="d-flex">
                <button class="btn btn-outline-secondary" type="submit">Tickets</button>
            </form> -->
          </div>
        </div>
    </nav> 

</header>

<body>

    <div class="contenedor">
        <div class="item4"></div>
        <div class="item1">
            <h3>Estudiante</h3><br>
            <h4>Tienen un descuento</h4><br>
            <h3>80%</h3><br>
            <p>* presentar documentación</p>
        </div>
        <div class="item2">
            <h3>Socios</h3><br>
            <h4>Tienen un descuento</h4><br>
            <h3>50%</h3><br>
            <p>* presentar documentación</p>
        </div>
        <div class="item3">
            <h3>Visitas</h3><br>
            <h4>Tienen un descuento</h4><br>
            <h3>15%</h3><br>
            <p>* presentar documentación</p>
        </div>
        <div class="item5"></div>

    </div>


  <div class="container">
    <div class="column">
        <p>VENTA</p>
       <br>
    <h1>VALOR DE TICKET $ 200</h1>
  </div>
  </div>

 
    
     
<!--  nombre apellido correo para php -->


<form action="datos.php" method="get">
    <!-- post para enviar y esconder la información /// get para traer y ver en la url -->
    <div id="username">
    <div class="mb-3">
   <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre" name="nombre" required>
</div>
</div>

<div class="mb-3">
   <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="apellido" name="apellido" required>
</div>


<div class="mb-3">
    <div id="correo">
   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@servidor.com" name="mail" required></div>
</div>
<!-- <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentarios"></textarea>
</div> -->


<input type="submit" value="Enviar">

<input type="reset" value="Borrar">
</form>

    <!-- agrego formulario multiplicación -->
    <div class="container">
          <div id="entradas" action="">
              <form id="multiplicar" class="container">
                <div class="col-md-10" >
                  <label for="cantidad">Cantidad</label>  <br><input type="number" id="cantidad" placeholder="Cantidad" required> 
                </div>
                <div  class="col-md-10">
                  <label for="categoria">Categorías</label> 
                   <select id="categoria" type="number" class="form-select" aria-label="Default select example">
                    <option value="estudiantes">Estudiantes</option>
                    <option value="socios">Socios</option>
                    <option value="visitas">Visitas</option>
                    </select> 
                  </div>
              </form>
<!-- agrego botones bootstrap   -->
                
              <div class="alert alert-primary"  type="button" role="alert">Total a pagar: $ <span id="resultado"></span></div>
             
<!-- fin agrego botones    -->
              <!-- <div class="col-md-10">
             
              <button onclick="multiplicar()" type="button" ><p>Total a pagar: $ <span id="resultado"></span></p></button>
            </div> -->
             
          </div>
    </div>


     <div id="container">
       <div class="row">
          <div class="col-md-6 text-center">
                  <button id="borrar" type="reset" class="btn text-center" value="Borrar">Borrar</button>    
          </div>
          <div class="col-md-6 text-center">
                  <button onclick="multiplicar()" id="resumen" type="button" class="btn btn-secondary text-center">Resumen</button>    
          </div>
       </div>
     </div>
  








    <!-- comienza script - ticket = 200   - categorías: estudiante = 200 * 0,20; socio = 200 * 0,50; visita = 200 * 0,85 -->
 <script>
var estudiantes = 40;
var socios = 100;
var visitas = 170;

      function multiplicar(){
        let cantidad = document.getElementById("cantidad").value;
        console.log(document.getElementById("cantidad").value)

        let categoria = document.getElementById("categoria").value 

          if (categoria == "estudiantes"){
          valorTicket = 200 * 0,20
        console.log(valorTicket);

        let resumen = cantidad * estudiantes;
           document.getElementById("resultado").innerText = resumen;
      } else if (categoria == "socios"){
        valorTicket = 200 * 0,50
        console.log(valorTicket);

         let resumen1 = cantidad * socios;
           document.getElementById("resultado").innerText = resumen1;
      } else if (categoria == "visitas"){
         valorTicket = 200 * 0,85
        console.log(valorTicket)

         let resumen2 = cantidad * visitas;
            document.getElementById("resultado").innerText = resumen2;
       }     
      }  

     const capturaTotal = document.getElementById("resultado")

      </script>
    
</div>
</div></div>
<!-- total a Pagar -->
</main>
        <!-- aquí footer -->
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

<!-- <button onclick="alert(Total)" type="button" class="btn-secondary">Resumen</button>  -->
