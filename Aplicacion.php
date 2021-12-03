<?php

$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','pu_mantenimiento')
or die(mysql_error($mysqli));

$query="select * from registro"; 
$result=mysqli_query($conexion,$query); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubillus_Placencia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <section class="tank-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
            <div class="container">
                <a class="navbar-brand" href="index.html">Mantenimientos</a>
                <button class="navbar-toggler" type="button" 
                data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse"  id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Aplicacion.php">Aplicacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Instalacion.html">Instalacion</a>
                        </li>
                    </ul>
                </div>
           </div> 
        </nav>
    </section>


    <section class="tank-main-banner">

        <div class="slider-info banner-view text-center">
            <div class="-info container">
                <h3 class="banner-text mt-5">Tabla de Manteniminetos</h3>
            </div>

            <table style="color:white">
            <tr> 
		<th colspan="6"><h2>HISTORIAL</h2></th> 
		</tr> 
			  <th> FECHA </th> 
			  <th> TALLER </th> 
			  <th> KILOMETRAJE </th> 
			  <th> COSTO </th>
              <th> TIPO </th>
              <th> OBSERVACIONES </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['fecha']; ?></td> 
		<td><?php echo $rows['taller']; ?></td> 
		<td><?php echo $rows['kilometraje']; ?></td> 
		<td><?php echo $rows['costo']; ?></td>
        <td><?php echo $rows['tipo']; ?></td> 
        <td><?php echo $rows['observaciones']; ?></td>  
		</tr> 
	<?php 
               } 
          ?> 

            </table>    


        </div>

    </section>

    <section class="tank-contacts-12" id="contact">
        <div class="contact-top pt-5">
            <div class="container py-md-3">
                

                <div class="row cont-main-top">
                    <div class="contacts12-main col-lg-6">
                        <div class= "selection">
                        
                            <button type="submit" name="refrescar" onClick="location.href=location.href">Refrescar</button>

                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="tank-footer-29-main" id="footer">
        <div class="footer-29 text-center">
            <div class="container">
                <div class="main-social-footer-29">
                    <a href="#" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="instagram"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="google-plus"><span class="fa fa-google-plus"></span></a>
                    <a href="#" class="linkedin"><span class="fa fa-linkedin"></span></a>
                </div>
                <div class="bottom-copies text-center">
                    <p class="copy-footer-29">Todos los derechos reservados <a href="#"> </a></p>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
        </button>
            <script>
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if(document.body.scrollTop > 20 || document.documentElement. scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    }else{
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                function topFunction () {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
    </section>


    <script>
        $(function(){
            $('.navbar-toggler').click(function(){
                $('body').toggleClass('noscroll');
            })

        });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
