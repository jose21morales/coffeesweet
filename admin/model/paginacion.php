<?php
require_once("model/conectar.php");
$base = Conectar::conexion();

$post_por_pagina = 8;

if (isset($_GET['pagina'])) {
	if ($_GET['pagina'] > 1) {
		$pagina = $_GET['pagina'];
	} else {
		header('Location: index.php#gallery');
	}
} else {
	$pagina = 1;
}

$empesar_desde = ($pagina - 1) * $post_por_pagina;

$sql = "SELECT * FROM gallery";
$resultado = $base->prepare($sql);
$resultado->execute(array());
$num_registros = $resultado->rowCount();
$total_paginas = ceil($num_registros / $post_por_pagina);

?>