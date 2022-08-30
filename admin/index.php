<?php
session_start();

if (isset($_SESSION['USER'])) {
	require("controller/inicio.controller.php");
} else {
    require('controller/login.controller.php');
}


?>