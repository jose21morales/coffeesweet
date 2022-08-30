<?php

require_once("../model/conectar.php");
$base = Conectar::conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-admin'])) {
	$name = strtolower($_POST['admin__name']);
	$user = $_POST['admin__user'];
	$mail = $_POST['admin__mail'];
	$password = $_POST['admin__password'];
	$password2 = $_POST['admin__password2'];

	$pass_cifrado = password_hash($password, PASSWORD_DEFAULT, array('cost'=>12));

	$errors_name = '';
	$errors_user = '';
	$errors_mail = '';
	$errors_password = '';
	$errors_password2 = '';
	$errors_confirm_passwords = '';
	$errors_password_characters = '';

	if (empty($name)) {
		$errors_name = 'Por favor introduce un nombre';
	}

	if (empty($user)) {
		$errors_user = 'Por favor introduce un usuario';
	}

	if (empty($mail)) {
		$errors_mail = 'Por favor introduce un correo';
	}

	if (empty($password)) {
		$errors_password = 'Por favor introduce una contraseña';
	}

	if (empty($password2)) {
		$errors_password2 = 'Por favor confirma tu contraseña';
	}

	if ($password != $password2) {
		$errors_confirm_passwords = 'Las contraseñas no coinciden';
	}

	if (strlen($password) < 8) {
		$errors_password_characters = 'Tu contraseña debe tener un minimo de 8 caracteres';
	}

	if (empty($errors_user) && empty($errors_mail) && empty($errors_password) && empty($errors_password2) && empty($errors_confirm_passwords) && empty($errors_password_characters)) {

	    $sql = "UPDATE usuarios SET NAME = :name, USUARIO = :user, MAIL = :mail, PASSWORD = :password";
	    $resultado = $base->prepare($sql);
	    $resultado->execute(array(':name'=>$name,':user'=>$user,':mail'=>$mail,':password'=>$pass_cifrado));
	    session_start();
	    session_destroy();
	    header('Location: ../index.php');
	}

}

?>