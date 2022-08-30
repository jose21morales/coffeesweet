<?php

require_once("conectar.php");
$base = Conectar::conexion();

$id = $_GET['id'];

$base->query("DELETE FROM cakes WHERE ID = '$id'");
header('Location: ../index.php#cakes');

?>