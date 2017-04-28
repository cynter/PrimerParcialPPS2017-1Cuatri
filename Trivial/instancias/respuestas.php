<?php
//creamos un objeto trivial
require_once '../clases/trivial.class.php';
//creamos un objeto trivial
$trivial = new Trivial();

//recibimos las variables post
$correcta = $_POST['correcta'];//cogemos la correcta del formulario
$respuesta = $_POST['respuesta'];//cogemos la respuesta del usuario

//si no se ha envíado el formulario o la respuesta es incorrecta 
//sumamos uno a la sesión error
if(!isset($_POST['submit']) || $correcta != $respuesta)
{
	$_SESSION['error'] += 1;//sesión que guarda los errores
	//si ya ha hecho tres errores reseteamos la puntuación y empieza el juego
	if($_SESSION['error'] == 3){
		//si ya hemos cometido tres errores poner la error a 0
		$_SESSION['error'] = 0;
		//envíamos los datos para actualizar el ranking si hace falta
		$trivial->update_ranking($_SESSION['nombre'],$_SESSION['puntos']);
		//
		$_SESSION['puntos'] = 0;
	}
	$_SESSION['respuesta'] = "<div data-role='header'><h1 style='color: red'>Has fallado.</h1></div>";
	header("Location: ../preguntas_trivial.php");
	//si se ha envíado el formulario y la respuesta es correcta
}else{
	$_SESSION['respuesta'] = "<div data-role='header'><h1 style='color: green'>Has acertado.</h1></div>";
	$_SESSION['puntos'] += 10;
	header("Location: ../preguntas_trivial.php");
}