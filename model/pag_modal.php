<?php

require_once("conectar.php");
$base = Conectar::conexion();

$cantidadMostrar = 1;
$pag_modal = (!isset($_GET['pag'])) ? 1 : ($_GET['pag']);

$empesar_desde = ($pag_modal - 1) * $cantidadMostrar;

$num_reg = $base->query("SELECT * FROM gallery");
$total_paginas = ceil($num_reg / $cantidadMostrar);

$sql = "SELECT IMG FROM gallery LIMIT $empesar_desde, $cantidadMostrar";
$resultado = $base->prepare($sql);
$resultado->execute();
if($image = $resultado->fetch(PDO::FETCH_ASSOC)) {
	$image = $image;
}

$incrementModal = (($pag_modal+1) <= $total_paginas) ? ($pag_modal+1) : 1;
$decrementModal = (($pag_modal-1) < 1) ? 1 : ($pag_modal-1);

?>