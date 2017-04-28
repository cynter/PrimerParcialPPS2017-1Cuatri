<?php
require_once 'clases/trivial.class.php';
$trivial = new Trivial();
//obtnemos el ranking
$ranking = $trivial->ranking();
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
</head> 
<body> 

	<div data-role="page">
		<h2>Hola <?php echo $_SESSION['nombre'] ?></h2>
		<ul data-role="listview">
			<?php 
			$i = 1;
			foreach($ranking as $rank)
			{
			?>
			<li><?php echo $i ?>.&nbsp;&nbsp;<?php echo $rank['nombre']?><span style="float: right"><?php echo $rank['puntuacion']?> puntos</span></li>
			<?php
			$i++;
			}
			?>
		</ul>
		<a href="preguntas_trivial.php" data-role="button" data-theme="b" data-ajax="false">Ir a jugar</a>  
		<a href="instancias/logout.php" data-role="button" data-theme="a" data-ajax="false">Salir</a>  

	</div>
	
</body>
</html>