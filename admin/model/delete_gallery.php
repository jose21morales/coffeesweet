<?php
require_once("conectar.php");
$base = Conectar::conexion();

$id = $_GET['id'];

$base->query("DELETE FROM gallery WHERE ID = $id");
header('Location: ../controller/gallery.controller.php');

?>