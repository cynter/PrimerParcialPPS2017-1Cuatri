<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<title>Trivia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
	</head> 
<body> 
	<!--dialogo que mostramos para iniciar sesión-->
	<div data-role="page" class="dialog-actionsheet">
	 
		<div data-role="content" data-theme="a">
			<!--establecemos data-ajax a false para que se haga la petición y redirección-->
			<form method="post" id="form" action="instancias/login.php" accept-charset="utf-8" data-ajax="false">
				<h3>Introduce tu nombre</h3>
				<p><label for="email">Nombre</label></p>
				<input type="text" name="nombre" id="nombre" data-role="button" data-theme="b" />  
				<input type="submit" class="submit" name="submit" data-role="button" value="Jugar" data-theme="b" />	 		  
				<a href="index.php" data-role="button" data-rel="back" data-theme="a">Volver atrás</a>    
			</form>
		</div>
	</div>
</body>
</html>