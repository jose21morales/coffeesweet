<?php

require_once("conectar.php");
$base = Conectar::conexion();

$id = $_GET['id'];

$base->query("DELETE FROM about WHERE ID = '$id'");
header('Location: ../index.php#about');

?>