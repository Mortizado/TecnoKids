<?php
include 'model/conexion.php';
$sentencia = $bd->query('select * from vehiculo where Modelo_idModelo = 2');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>






<!DOCTYPE html>
<html>
<head>
   <title>TecnoKids</title>

  <style type="text/css">

h1 {text-align: center}
h3{text-align: center}

.colon {
  
  margin-bottom: 50px;
  display: inline-block;
  margin-left: 120px;
}
  </style>

   <script src="https://kit.fontawesome.com/67c66657c7.js"></script>

 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">



</head>
<body>
    <input type="checkbox" id="check">
   <nav>
      <link rel="stylesheet" type="text/css" href="barranavega.css">
      
         <img src="Edi-logo-cbc.png">
      </div>
      
      <ol>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
        <li><a href="tarjetas.html">cursos</a></li>
        <li><a href="contactoprin.html">Contactenos</a></li>
        
       
        
      </ol>

      <div class="barradebusqueda">
    
    </div>

      <label for="check" class="bar">
         <span class="fa fa-bars" id="bars"></span>
         <span class="fa fa-times" id="times"></span>
      </label>
   </nav>



   <div id="carritoimg">
      <link rel="stylesheet" type="text/css" href="carru.css">
      
      <figure>
         <img src="1.png">
         <img src="2.png">
         <img src="3.png">
         
      
      </figure>
   </div>
 <h1> Juegos Informaticos </h1>
<!-- vehiculos -->
<div class="container">
      <div class="row">

        <?php
          foreach ($vehiculo as $dato) {
        ?>

        <div class="col-md-4 text-center mt-4">
          <a href="detalles-juegosinformaticos.php?codigo=<?php echo $dato->idVehiculo ?>"><img src="img/<?php echo $dato->foto ?>" class="img-fluid"></a>
          <h2> <?php echo $dato->nomVehiculo; ?> </h2>
          <p> <?php echo $dato->precio; ?> </p>
          <a href="detalles-juegosinformaticos.php?codigo=<?php echo $dato->idVehiculo ?>" class="btn btn-primary">Ver detalles</a>
        </div>

        <?php
          }
        ?>

      </div>
    </div>
    <!-- fin vehiculos -->

<br></br>

<div class="box-1">
    <link rel="stylesheet" type="text/css" href="leyfatca.css">
    <a href="servicios.html">
     <div class="btn btn-three">
    <span>Regresar</span>
   </div>
    </a>
   </div>
   <br></br>







   <footer class="pie-pagina">
    <link rel="stylesheet" type="text/css" href="foot.css">
    <div class="grupo-1">
        <div class="box">
         <h2 style="color:rgb(255, 255, 255);">Proximamente Descaga Nuestra App</h2>
         <figure>
             
             <a href="https://play.google.com/store/apps/details?id=com.edioaccrl.abanksmobile&hl=es&gl=US">
                
                 <img src="google.png" alt="Logo de SLee Dw">
                 
             </a>
             <a href="https://apps.apple.com/pa/app/edioacc-r-l-en-linea/id1190140762">
                 <img src="apple.png" alt="Logo de SLee Dw">
             </a>
         </figure>
        </div>
        <div class="box">
            <h2>Nuestras Cursos</h2>
            <p>Cursos De Informatica
            </p>
            <br></br>
            <p>Cursos De Logica de Programacion 
            </p>
            <br></br>
            <p>Cursos De Desarrollo Web
         </p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://es-la.facebook.com/EdioaccRL" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/edioacc/" class="fa fa-instagram"></a>
                <a href="https://twitter.com/edioacc" class="fa fa-twitter"></a>
                <a href="https://www.youtube.com/channel/UCEX9xpOxwahwT4f_EvOTqsg" class="fa fa-youtube"></a>
            </div>
        </div>
 
        <div class="box">
         <h2>SIGUENOS</h2>
         <a href="https://apps.apple.com/pa/app/edioacc-r-l-en-linea/id1190140762">
             <img src="buzon.png" alt="Logo de SLee Dw">
         </a>
         <div class="red-social">
         </div>
     </div>

   
 
 
    </div>

    <div class="grupo-2">
        <small>&copy; 2022 <b>Tecnokids</b> - Todos los Derechos Reservados.</small>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>