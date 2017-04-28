<?php
require_once 'clases/trivial.class.php';//incluimos el archivo trivial.class.php
//comprobamos si existe la sesión
if(!isset($_SESSION['nombre'])){
	header("Location: index.php");
}
//creamos un objeto trivial
$trivial = new Trivial();
//obtnemos un pregunta
$pregunta = $trivial->get_preguntas();
//obtenemos las posibles respuestas de la pregunta
$respuestas = $trivial->get_respuestas($pregunta['id']);
//las desordenamos
shuffle($respuestas);
?>
<!DOCTYPE html> 
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Juego de trivial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
	<script type="text/javascript">
		$.fn.countdown = function (callback, duration, message) {
		    message = message || "";
		    var container = $(this[0]).html(duration + message);
		    var countdown = setInterval(function () {
		        if (--duration) {
		            container.html(duration + message);
		        } else {
		            clearInterval(countdown);
		            callback.call(container);   
		        }
		    }, 1000);    
		};
		function redirect () {
		    window.location.href="instancias/respuestas.php";
		    // window.location = "http://msdn.microsoft.com";
		}
		$(document).ready(function(){
			$(".countdown").countdown(redirect, 10, " segundos");
		})
	</script>
</head> 
<body> 

	<div data-role="page">
		<?php
		if(isset($_SESSION['respuesta']))
		{
		 echo $_SESSION['respuesta'];
		}
		?>
		<ul data-role="listview">
			<li data-theme="b">Hola <?php echo $_SESSION['nombre'] ?>
			<span style="float: right">Tus puntos: <?php echo $_SESSION['puntos']?></span>
			</li>
			<li data-theme="b">Mejor puntuación : <?php echo $_SESSION['mejor'] ?>
			<span style="float: right">Tus errores: <?php echo $_SESSION['error']?></span>	
			</li>
			<li class="countdown" data-theme="e" style="text-align: center"></li>
		</ul>
		<p><label><b><?php echo $pregunta['pregunta']?></b></label></p>
		<form method="post" id="form_responder" action="instancias/respuestas.php" accept-charset="utf-8" data-ajax="false">
			<!--id de la respuesta-->
			<input type="hidden" name="correcta" value="<?php echo $pregunta['correcta']?>" /> 
				
			<?php $i = 1;
			//bucle para mostrar las respuestas
			foreach ($respuestas as $respuesta) { ?>
				<input type="radio" name="respuesta" id="radio-choice-<?=$i?>" value="<?=$respuesta['id']?>" />
				<label for="radio-choice-<?=$i?>"><?=$respuesta['respuesta']?></label>
			<?php $i++; } ?>
			<button type="submit" name="submit" data-theme="b">Responder</button>	
		</form>
		<a href="ranking.php" data-role="button" data-theme="a" data-ajax="false">Ver ranking</a>  
		<a href="instancias/logout.php" data-role="button" data-theme="a" data-ajax="false">Salir</a>  

	</div>
	
</body>
</html>