<?php 

	$conexion=mysqli_connect('localhost','root','','concesionaria');

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

.ultimos{
    text-align: center;
}
  </style>

   <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
   <link rel="stylesheet" type="text/css" href="entradalogin.css">

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
 
   <div id="centrar"> 
      <link rel="stylesheet" type="text/css" href="bien.css">
     
   </div>










   <div class="containers">
    <link rel="stylesheet" href="boton.css">  
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-pinterest"></a>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fa fa-plus"></label>
    </div>
</div>

</div>

<br></br>

<table class="container">
    <thead>
		<tr>
        
        <th><h1>Logo</h1</th>

                       <th><h1>nombre</h1></th>
                    <th><h1>Descripciòn</h1></th>
                    <th><h1>Ver Màs</h1></th>
                  
		</tr>
        </thead>
		<?php 
		$sql="SELECT * from todosmodulos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
 <tbody>
   
		<tr>
      
    <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['logosmodulo']); ?>"/></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			
      <td><height="70px"><?php  echo $mostrar['descripcion'] ?></td>

      <td>
     <input type='button' value='¡Ver!' onclick='location.href="<?php  echo $mostrar["ver"] ?>";'>
            </td>
		
		</tr>
        </tbody>
	<?php 
	}
	 ?>
   

	</table>

 <div class="ultimos">
    <button onclick="location.href='index.html'">Salir</button> 
<button onclick="location.href='Login.html'">Cerrar Sesion</button>
</div>

<br></br>














 <footer class="pie-pagina">
   <link rel="stylesheet" type="text/css" href="foot.css">
   <div class="grupo-1">
       <div class="box">
        <h2 style="color:rgb(255, 255, 255);">Proximamente Descaga Nuestra App</h2>
        <figure>
            
            <a href="">
               
                <img src="google.png" alt="Logo de SLee Dw">
                
            </a>
            <a href="">
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
       <small>&copy; 2022 <b>TecnoKids</b> - Todos los Derechos Reservados.</small>
   </div>
</footer>



</body>

</html>