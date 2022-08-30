<?php
session_start();

if (!$_SESSION['USER']) {
	header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crear usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

	<form class="form-admin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

		<h2 class="form-admin-title">Introduce tus datos</h2>

		<label for="name">Nombre:</label><br>
	    <input type="text" name="admin__name" placeholder="Escribe tu nombre..." value="<?php echo $name; ?>"><br>
	    <?php
         if (!empty($errors_name)) {
         	echo "<p class='errors'> $errors_name </p>";
         }
	    ?>

	    <label for="user">Usuario:</label><br>
	    <input type="text" name="admin__user" placeholder="Escribe tu usuario..." value="<?php echo $user; ?>"><br>
	    <?php
         if (!empty($errors_user)) {
         	echo "<p class='errors'> $errors_user </p>";
         }
	    ?>

	    <label for="mail">Correo:</label><br>
	    <input type="text" name="admin__mail" placeholder="Escribe tu correo..." value="<?php echo $mail; ?>"><br>
	    <?php
         if (!empty($errors_mail)) {
         	echo "<p class='errors'> $errors_mail </p>";
         }
	    ?>
	
	    <label for="password">Contraseña:</label><br>
	    <input type="password" name="admin__password" placeholder="Escribe tu contraseña..."><br>
	    <?php
         if (!empty($errors_password)) {
         	echo "<p class='errors'> $errors_password </p>";
         }
	    ?>

	    <label for="password2">Confirma tu contraseña:</label><br>
	    <input type="password" name="admin__password2" placeholder="Confirma tu contraseña..."><br>
	    <?php
         if (!empty($errors_password2)) {
         	echo "<p class='errors'> $errors_password2 </p>";
         }
         if (!empty($errors_confirm_passwords)) {
         	echo "<p class='errors'> $errors_confirm_passwords </p>";
         }
         if (!empty($errors_password_characters)) {
         	echo "<p class='errors'> $errors_password_characters </p>";
         }

	    ?>

	    <input type="submit" name="btn-admin" value="Cambiar usuario">		
	</form>

</body>
</html>