<?php

class Inicio {
	private $db;
	private $welcome;
	private $experience;
	private $banner;
	private $personal;
	private $coffee;
	private $cakes;
	private $services;
	private $contact_us;
	private $about;
	private $footer;
	private $gallery;

	public function __construct() {
		require_once("conectar.php");
		$this->db=Conectar::conexion();
		$this->welcome=array();
		$this->experience=array();
		$this->banner=array();
		$this->personal=array();
		$this->coffee=array();
		$this->cakes=array();
		$this->services=array();
		$this->contact_us=array();
		$this->about=array();
		$this->footer=array();
		$this->gallery=array();
	}

	public function get_banner() {
		$consulta=$this->db->query("SELECT * FROM banner");
		while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$banner[] = $fila;
		}
		return $banner;
	}

	public function get_welcome() {
		$consulta = $this->db->query("SELECT * FROM welcome");
		while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
			$welcome[] = $fila;
		}
		return $welcome;
	}

	public function get_experience() {
		$consulta = $this->db->query("SELECT * FROM experience");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$experience[] = $fila;
		}
		return $experience;
	}

	public function get_personal() {
		$consulta = $this->db->query("SELECT * FROM personal");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$personal[] = $fila;
		}
		return $personal;
	}

	public function get_coffee() {
		$consulta = $this->db->query("SELECT * FROM coffee");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$coffee[] = $fila;
		}
		return $coffee;
	}

	public function get_cakes() {
		$consulta = $this->db->query("SELECT * FROM cakes");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$cakes[] = $fila;
		}
		return $cakes;
	}

	public function get_services() {
		$consulta = $this->db->query("SELECT * FROM services");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$services[] = $fila;
		}
		return $services;
	}

	public function get_contact_us() {
		$consulta = $this->db->query("SELECT * FROM contact_us");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$contact_us[] = $fila;
		}
		return $contact_us;
	}

	public function get_about() {
		$consulta = $this->db->query("SELECT * FROM about");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$about[] = $fila;
		}
		return $about;
	}

	public function get_footer() {
		$consulta = $this->db->query("SELECT * FROM footer");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$footer[] = $fila;
		}
		return $footer;
	}

	public function set_data() {
		$errors = '';
		$msg = '';
		
		if (isset($_POST['btn-contact'])) {
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			$area_msg = $_POST['area_msg'];

			if (empty($name) || empty($mail) || empty($area_msg)) {
				return $errors = "Por favor llena todos los campos";
			}

			$destinatario = "jose33.cecilio@gmail.com \n";
			$asunto = "Contact - Coffee-Sweet \n";
			$headers = 'From: info@coffee-sweet.com' . "\r \n" .
			'Reply-To: info@coffee-sweet.com' . "\r \n" .
			'X-Mailer: PHP/' . phpversion();
			$content .= "Nombre: $name \n";
			$content .= "Mail: $mail \n";
			$content .= "Télefono: $phone \n";
			$content .= "Mensaje: $area_msg";

			if(mail($destinatario, $asunto, $area_msg, $headers)) {
				return $msg = 'Mensaje enviado';
			} else {
				return $errors = 'Error al enviar el mensaje';
			}
		}
	}

	public function get_gallery() {
		require("model/paginacion.php");
		$consulta = $this->db->query("SELECT * FROM gallery LIMIT $empesar_desde, $post_por_pagina");
		while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$gallery[] = $fila;
		}
		return $gallery;
	}
}

?>