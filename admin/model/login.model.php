<?php

require_once('conectar.php');
$base = Conectar::conexion();

$contador = 0;
$errores = '';


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-login'])) {
    $data_user = htmlentities(addslashes($_POST['login']));
    $data_password = htmlentities(addslashes($_POST['password']));

    if (empty($data_user) || empty($data_password)) {
    	$errores .= 'Por favor rellene todos los campos';
    } else {
    	
        $sql = "SELECT * FROM usuarios WHERE usuario = :login";
        $resultado = $base->prepare($sql);
        $login = $resultado->execute(array(':login'=>$data_user));
                
        if ($login) {
        	$errores .= 'Usuario o contraseña incorrectos';
        }

        if($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
    	    if(password_verify($data_password, $fila['password'])) {
    		    $contador++;
    	    }
        }

        if ($contador > 0) {
            $registro = $base->query("SELECT NAME FROM usuarios")->fetch(PDO::FETCH_ASSOC);
            $_SESSION['USER'] = ucwords($registro['NAME']);
            session_start();
    	    header('Location:index.php');
        }
    }
}

?>