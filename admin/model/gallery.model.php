<?php

class Gallery {
	private $db;
	private $gallery;

	public function __construct() {
		require_once("conectar.php");
		$this->db=Conectar::conexion();
		$this->gallery=array();
	}

	public function get_gallery() {
		$resultado = $this->db->query("SELECT * FROM gallery");

        while ($registros = $resultado->fetch(PDO::FETCH_ASSOC)) {
        	$gallery[] = $registros;
        }
        return $gallery;
	}
}

?>