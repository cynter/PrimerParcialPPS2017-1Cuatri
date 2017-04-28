<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8" />
	<title>Juego de trivial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
	<script type="text/javascript">
	//VALIDAMOS SI HAN INTRODUCIDO UN NOMBRE EN EL FORMULARIO DE INICIO-->
		$(document).ready(function(){
            $("#form").live('submit',function(){        
                if($("#nombre").val() == "")
                {
                    alert("Introduce tu nombre"); return false;
     			}else{
     				$("#form").submit();
     			}
            })              
        });
	</script>
</head>

<body>
	<div data-role="page">
		<div data-role="header" data-position="fixed"><h1>Trivial</h1></div>
		<div data-role="content">
		<!--AL PULSAR APARECE UN DIALOG PARA EMPEZAR A JUGAR-->
		<div class="content-primary">	
			<ul data-role="listview">
				<li><a href="dialog.php" data-rel="dialog" data-transition="slidedown" data-theme="b">
					<img src="trivial.jpg" />
					<h3>Ciencias</h3>
					<p>Preguntas sobre ciencias</p>
				</a></li>
				<li><a href="dialog.php" data-rel="dialog" data-transition="slidedown" data-theme="b">
					<img src="trivial.jpg" />
					<h3>Deportes</h3>
					<p>Preguntas sobre deportes</p>
				</a></li>
				<li><a href="dialog.php" data-rel="dialog" data-transition="slidedown" data-theme="b">
					<img src="trivial.jpg" />
					<h3>Historia</h3>
					<p>Preguntas sobre historia</p>
				</a></li>
				<li><a href="dialog.php" data-rel="dialog" data-transition="slidedown" data-theme="b">
					<img src="trivial.jpg" />
					<h3>Infomática</h3>
					<p>Preguntas sobre informática</p>
				</a></li>
			</ul>
		</div>
	    </div>
		<div data-role="footer" data-position="fixed"><h6>Juega al trivial</h6></div>
	</div>

</body>
</html>