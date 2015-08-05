<?php
    header('Content-type: text/html; charset=utf-8; Cache-Control: no-cache');
	include("connectdb.php");
	include("load-css-js.php");
	include("navbar-index.php");
?>
<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Instituto Tecnológico Superior de Zapopan </title>
	
	<!-- Script Ventana Emergente de Avisos -->
    <script type="text/javascript">
        $(document).ready(function(){
                //DEFAULT PARA LA UTILIZACION DELL FANCYBOX
                $('.fancybox').fancybox();
                //ABRE LA VENTANA EMERGENTE
                $.fancybox.open({
                    href: '#aviso'
                });
                fancytime=setTimeout(function(){$.fancybox.close()},10000);/////Cerrar despues de 10s ventana emergente
                $('#aviso').children('h5')
                .mouseover(function () {
                    $(this).children('p').show(10);//////Mostrar preview del aviso cuando se coloque el cursor por encima
                    clearTimeout(fancytime);///Si se esta viendo el contenido no cierra la ventana
                    fancytime=setTimeout(function(){$.fancybox.close()},10000);///Cierra la ventana emergente despues de 10S
                })
                .mouseleave(function () {
                    $(this).children('p').hide(10);/////Ocultar preview cuando se quite el cursor del aviso
                    clearTimeout(fancytime);///Si se esta viendo el contenido no cierra la ventana
                    fancytime=setTimeout(function(){$.fancybox.close()},10000);///Cierra la ventana emergente despues de 10S
                });

                $("#pub").load("login/loadpublicar.php");
        		$("#Login").click(function(event){
        			event.preventDefault();
        			$("#login_div").load("login/index.php",function(){
        				$.fancybox.open({
        					'content' : $("#login_div").html(),
        					'padding':0,
        					'margin':0,
        					'hideOnOverlayClick':false,
        					'hideOnContentClick':false,
        					'showCloseButton':false
        				});

        			});        		
        		});
        });
	</script>
	<!-- Fin -->
	
	<!-- Script de Slider Box -->
	<script>
		$( function() { $( '#cbp-fwslider' ).cbpFWSlider(); });
	</script>
	<-- Fin -->
    
	<!-- Estilo de Botones de Redes Sociales -->
    <style>
		.social{
    		position: fixed; /* Se fija el div fijo*/
    		right: -30px; /* Se establece en la parte derecha*/
    		top: 200px; /* Se poseciona el div social 200px de arriba a abajo */
    		z-index: 2000; /*para que no se superponga otro elemento en las redes sociales*/
    	}
    			 
    	.social ul{
    		list-style: none;
    	}
    			 
    	.social ul li a{
    		width: 80px; /*Ancho de la barra*/
    		height: 45px; /*Largo de la barra*/
    		display: inline-block;
    		background: #BC0019; /*Color rojo de la barra*/
    		text-decoration: none;
    		margin-bottom: 5px;
    		padding: 5px;
    		-webkit-transition:all 400ms ease; /*Velocidad de transiones*/
    		-o-transition:all 400ms ease;
    		transition:all 400ms ease;
    	}
    						 
    	.social ul li a:hover{
    		transform:translate(-25px, 0px); /*La barra se mueve a la derecha*/
    		-webkit-transform:translate(-25px, 0px);
    	}
		
		@media only screen and (max-width: 850px){			  
			.social{
				visibility:hidden;
			}	
		}
    </style>
	<!-- Fin -->
	
	 <!-- Script del Traductor -->
	<script type="text/javascript">
		function googleTranslateElementInit(){
			new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>             
    <!-- Fin -->
	
<body>
	<div id="container">
		<!-- Slider -->
		<div class="container">	
			<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><a href="#"><img src="images/slidebox/1.jpg" alt="img01"/></a></li>
					<li><a href="#"><img src="images/slidebox/2.jpg" alt="img02"/></a></li>
					<li><a href="#"><img src="images/slidebox/3.jpg" alt="img03"/></a></li>
					<li><a href="#"><img src="images/slidebox/4.jpg" alt="img04"/></a></li>
					<li><a href="#"><img src="images/slidebox/5.jpg" alt="img05"/></a></li>
					<li><a href="#"><img src="images/slidebox/6.jpg" alt="img06"/></a></li>
					<li><a href="#"><img src="images/slidebox/7.jpg" alt="img07"/></a></li>
				</ul>
			</div>
		</div>
		<!-- Fin -->		

        <!-- Social Menu -->
		<div class="social">
    		<ul>
				<li><a href="https://www.facebook.com/ITSZapopan" target="_blank" class="icon-facebook"><img src="images/redes-sociales/facebook.png"></a></li>
                <li><a href="https://twitter.com/ZapopanITS" target="_blank" class="icon-twitter"><img src="images/redes-sociales/twitter.png"></a></li>
    			<li><a href="https://plus.google.com/104031662755158057528" target="_blank" class="icon-googleplus"><img src="images/redes-sociales/gplus.png"></a></li>
    			<li><a href="http://www.youtube.com/channel/UCnW9AM7ugIBJwJu8oLbucQQ" target="_blank" class="icon-youtube"><img src="images/redes-sociales/youtube.png"></a></li>
    			</ul>
    	</div>
		<!-- Fin -->
		
		<div id="content">
			<div class="welcome-box">
				<div class="container">
					<h1>Instituto Tecnol&oacute;gico Superior de Zapopan</h1>
                    <p><br><i>"Saber para trascender"</i></p><br> 
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="up-footer">
				<div class="container">
				
				<!-- Barra Traductor -->
				<div id="google_translate_element"></div>
				<!-- Fin -->
					
					<div class="col">
						<div class="row-md-3">
							<div class="widget footer-widgets text-widget">
                                <font color="#000000" size = "20px">
									<p><br><br>El <b>Instituto Tecnológico Superior de Zapopan (ITSZ)</b> inició sus operaciones como Organismo Público Descentralizado 
									el 6 de septiembre de 1999 con el fin de impulsar el desarrollo en la Zona Metropolitana de Guadalajara.<br>
									<p>El Instituto Tecnológico Superior de Zapopan esta integrado al Tecnológico Nacional de México el cual está constituido 
									por 263 campus, está presente en todas las entidades federativas del país y atiende a una población estudiantil de más de 
									490 mil estudiantes en licenciatura y posgrado, lo cual lo convierte en la universidad más grande de México. </p><br>
									
									<div class = "row">
										<div class = "col-md-6">
											<h4>Misión Institucional</h4>
											<p>Somos un Instituto Tecnológico Superior líder que atiende la demanda de educación superior tecnológica, 
											integrante del Tecnológico Nacional de México y sectorizada en la Secretaría de Innovación Ciencia y Tecnología (SICyT) 
											del Gobierno del Estado de Jalisco, que promueve la docencia, la investigación, la extensión y la vinculación de calidad, 
											con un modelo educativo innovador centrado en competencias, con cuidado del medio ambiente y responsabilidad social.</p>
										</div>
										<div class = "col-md-6">
											<h4>Visión de Futuro</h4>
											<p>El Instituto Tecnológico Superior de Zapopan tiene la posición de líder en el estado de Jalisco así como en el sistema 
											tecnológico nacional por la excelencia de sus procesos educativo y de investigación científica, que trascienden en la 
											formación de los mejores profesionistas e ingenieros del país, talentosos e innovadores, altamente competitivos a nivel 
											mundial y pilares del desarrollo sostenido, sustentable y equitativo de México.</p>
										</div>
									</div>
									<!-- PRUEBA-->
									<div class="row" id="login_div">
										

									</div>
									<!-- FIN PRUEBA-->

                                </font>	
								<center> <br> <img src="images/LogosSEP.png" width="900" height="400"class="img-responsive" alt="Imagen responsive">
								</center>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="widget footer-widgets info-widget">
								<h4>Contacto</h4>
                                <p><span>Camino Arenero No.1101 <br> Col. El Bajío, Zapopan, Jalisco, M&eacute;xico.<br>C.P. 45019</span><br><br>
                                </p>
								<ul class="contact-list">
									<li><a class="phone"><i class="fa fa-phone"></i>(33) 3682 1180</a></li>
									<li><a class="phone"><i class="fa fa-phone"></i>(33) 3682 1182</a></li>
									<li><a class="phone"><i class="fa fa-phone"></i>(33) 3110 2129 </a></li>
									<li><a class="phone"><i class="fa fa-phone"></i>01 800 888 ITSZ (4879)</a></li>
									<li><a class="mail" href="mailto: itszapopan.edu.mx">
										<i class="fa fa-envelope"></i>itsdz@itszapopan.edu.mx</a></li>
								</ul>
								<div></div>
							</div>

							<div class="col-md-6" id="pub">

											</div>
						</div>
						<div class="col-md-9">
							<div class="widget footer-widgets work-widget">
							<h4>Ubicaci&oacute;n</h4>
				                <div class="templatemo_contactmap">
				                    <div class="flex-video">
                                        <div class="embed-responsive embed-responsive-16by9">                     
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.155443994373!2d-103.4677013!3d20.703911500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428a9274e6217ad%3A0x144c9e81ef755950!2sCamino+Arenero%2C+Baj%C3%ADo%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1424319048784" width="100%" height="330" frameborder="0" style="border:0"></iframe>
										   <div></div>
										</div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="footer-line">
				<div class="container">
					<p>&#169; Instituto Tecnol&oacute;gico Superior de Zapopan</p>
					<a class="go-top" href="#"></a>
				</div>
			</div>
		</footer>
	<!-- End -->
	</div>
	
	<!-- Muestra Aviso -->
    <div id="aviso" class="fancybox" style="width:auto;display: none;color:black;">
		<center><h2><font color = "red">¡Avisos!</font></h2></center>
		<!--<a href="#" style="color:black;"> </a>-->
		<?
			$result = mysql_query("SELECT nombre,aviso,fecha FROM avisos_t ORDER BY idAviso DESC LIMIT 3");
			$array = array();
				
			while($row = mysql_fetch_array($result)){
				echo "<p><br><b><font color='red'>De: </font><font color ='black'>". 
				$array[] = $row['nombre']. "<br></b>". 
				$array[] = $row['fecha']. "<br><i>". 
				$array[] = $row['aviso']. "<br></font></i></p>";
			}
				
			mysql_free_result($result);
			mysql_close();
		?>
		<br>
    </div>
</body>
</html>