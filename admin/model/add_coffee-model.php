<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-coffee'])) {
	
	$title = strtolower($_POST['coffee-title']);
	$price = $_POST['coffee-price'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_coffee = '';

	if (empty($title) || empty($price)) {
		$errors_coffee .= 'Por favor rellena todos los campos<br>';
	}

	if (empty($image_name)) {
		$errors_coffee .= 'Por favor seleccione una imagen';
	}

	$sql = "SELECT * FROM coffee WHERE TITLE = :title";
	$resultado = $base->prepare($sql);
	$resultado->execute(array(':title'=>$title));

	if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
		if ($title == $registro['title']) {
			$errors_coffee .= 'El titulo ya existe en la base de datos';
		}
	}

	if (empty($errors_coffee)) {

    if ($image_size <= 1000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "INSERT INTO coffee (TITLE, PRICE, IMG) VALUES (:title, :price, :img)";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array(':title'=>$title,':price'=>$price,':img'=>$image_name));
	        header("Location: index.php#coffee");
    	} else {
    		$errors_coffee .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_coffee .= 'La imagen es muy grande<br>';
    }
  }
}

?>