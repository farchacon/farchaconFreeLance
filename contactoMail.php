<!DOCTYPE HTML>
<html>
<head>
    <title>.::Centro Clinico Coromoto::.</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logoCoromoto.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="js/jquery.opacityrollover.js" type="text/javascript"></script>  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<body id="page5">
<?php

//include "class.phpmailer.php";
require "phpmailer/class.phpmailer.php";
include_once("phpmailer/class.smtp.php");
 
$mail = new phpmailer();

$mail->Host = "localhost";
$mail->From = $_POST["email"];
$mail->FromName = "Centro Clinico Coromoto";
$mail->Subject = "Correo Electr&oacute;nico desde el Portal Web www.centroclinicocoromoto.com";//el asunto del mail

	$mail->AddAddress("franklynrodriguez@dilia.net");
	//$mail->AddAddress("gygdetalles@gmail.com");
	//$mail->AddAddress("g.quintana2993@gmail.com");
	
/*******************************************************************************************************/	

$nombre=utf8_decode($_POST["nombre"]);
$email=utf8_decode($_POST["email"]);	
$telefono=utf8_decode($_POST["telefono"]);	
$asunto=utf8_decode($_POST["asunto"]);		


$mensaje = "<strong>Nombre: </strong>".$nombre ." "."<br><strong>Correo Electronico: </strong>".$email." ". "<br><strong>Telefono: </strong> 0".$telefono." ". "<br><strong>Asunto: </strong>" .$asunto ."." ;

$mail->Body = $mensaje;//se asigna como cuerpo del mensaje la variable

$mensaje=$mail->IsHTML(true);//interpretar? HTML ya que hemos usado la etiqueta <strong>

	//if($mail->Send()) {
		
?>
<div class="bg">
<div class="bg-2">
  <!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                                <li><a class="active" href="index.html">Nosotros</a></li>
                                <li><a href="servicios.html">Servicios</a></li>
                                <li><a href="galeria.html">Galeria</a></li>
                                <li><a href="directorio.html">Directorio M&Eacute;dico</a></li>
                                <li><a href="contactos.html">Contactos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9" align="center">
                    	<h1>
                        <img src="images/logoCoromoto.jpg" width="60" height="85">
                            <a class="logo" href="index.html">Centro Cl&iacute;nico Coromoto</a>
                        <span>C.A.</span></h1>
                    	<h6 class="grid_9">&quot;Donde tu salud es lo primero&quot; </h6>
                  </div>
                    <!--<div class="grid_3">
                    <img src="images/logoCoromoto.jpg" width="60" height="85">
                     </div>-->
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>  
  <!--==============================content================================-->
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="gallery p3">
        	<h1>Centro Clinico Coromoto</h1>
            <p><span></span></p>
            <div>
            <?php
				echo '<h3 align="center">Mensaje enviado correctamente </br></h3>';
				echo" ";
				echo '<h4 align="center"><a href="contactos.html"></br><---Volver</a></h4>';
			?>
            </div>
        </div>
</div>       
</div> 
        </div>
</div>       
</div> 
</section>
<!--==============================aside=================================-->

  
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div class="grid_9"><span>Desarrollado por: Dlia Soluciones C.A.</span></div>
                        <!--<div><a rel="nofollow" target="_blank" href="http://www.templatemonster.com/">Website Template</a> by TemplateMonster.com</div>-->
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"><span>+58(247) 3425119 </span></span>
                        <span class="phone-numb"><span>+58(247) 3420891 </span></span>
                        <span class="phone-numb"><span>+58(247) 3421989 </span></span>
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        	<li><a href="https://www.facebook.com/centroclinicocoromoto" target="_blank"></a></li>
                            <li><a class="item-2" href="https://twitter.com/ccoromoto_c" target="_blank"></a></li>
                            <li><a class="item-3" href="https://instagram.com/centroclinicoromoto/" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--===============================================================-->
        <?php
	//} 
	
	/*else {
	echo "<h3>Error al enviar mensaje: </h3>" . $mail->ErrorInfo;
	echo" ";
	echo" <h3> Intente de Nuevo... </h3>";
	echo" ";
	echo '<a href="contactos.html"><---Volver</a>';
	}*/
/*******************************************************************************************************/
?>
</body>
</html>