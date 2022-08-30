<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <?php require("model/password_forget.php"); ?>

	<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<h2 class="form-title">Iniciar sesión</h2>
		<table>
			<tr>
				<td><span class="icon-user"></span></td>
				<td><input type="text" name="login" placeholder="Usuario:" value="<?php echo $data_user; ?>"></td>
			</tr>
			<tr>
				<td><span class="icon-lock"></span></td>
				<td><input type="password" name="password" placeholder="Password:"></td>
			</tr>
			<tr>
				<td colspan="2">
					<?php if($errores != ''): ?>
					<p class="error"><?php echo $errores; ?></p>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="btn-login" value="Enviar"></td>
			</tr>
		</table>
	</form>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<center>
		    <button class="password_forget" name="btn-forget_password">Recuperar tu contraseña</button>
		</center>
	</form>
			<?php 

			if(!empty($msg)){
                echo $msg;
			}

			?>
    <div class="back-container">
	    <a class="back" href="../index.php">&laquo; Regresar</a>
    </div>

</body>
</html>