<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-personal'])) {
	
	$id = $_POST['personal-id'];
	$name = strtolower($_POST['personal-name']);
	$age = $_POST['personal-age'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_personal = '';

	if (empty($name) || empty($age)) {
		$errors_personal .= 'Por favor rellena todos los campos<br>';
	}

	if (empty($image_name)) {
		$errors_personal .= 'Por favor seleccione una imagen';
	}

	$sql = "SELECT * FROM personal WHERE NAME = :name";
	$resultado = $base->prepare($sql);
	$resultado->execute(array(':name'=>$name));

	if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
		if ($name == $registro['name']) {
			$errors_personal .= 'El nombre ya existe en la base de datos';
		}
	}

	if (empty($errors_personal)) {

    if ($image_size <= 1000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "INSERT INTO personal (NAME, AGE, IMG) VALUES (:name, :age, :img)";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array(':name'=>$name,':age'=>$age,':img'=>$image_name));
	        header("Location: index.php#personal");
    	} else {
    		$errors_personal .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_personal .= 'La imagen es muy grande<br>';
    }
  }
}

?>