<?php
require_once '../clases/trivial.class.php';
$nombre = $_POST['nombre'];
$trivial = new Trivial();
$trivial->new_user($nombre);
$_SESSION['nombre'] = $nombre;
header("Location: ../preguntas_trivial.php");