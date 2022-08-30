<?php

require("model/inicio.model.php");
require("model/edit_welcome-model.php");
require("model/edit_banner-model.php");
require("model/edit_experience-model.php");
require("model/add_personal-model.php");
require("model/add_coffee-model.php");
require("model/add_cakes-model.php");
require("model/add_services-model.php");
require("model/edit_contact-model.php");
require("model/add_about-model.php");
require("model/edit_footer-model.php");

$welcome = new Inicio();
$welcome_array = $welcome->get_welcome();

$experience = new Inicio();
$experience_array = $experience->get_experience();

$banner = new Inicio();
$banner_array = $banner->get_banner();

$personal =  new Inicio();
$personal_array = $personal->get_personal();

$coffee = new Inicio();
$coffee_array = $coffee->get_coffee();

$cakes = new Inicio();
$cakes_array = $coffee->get_cakes();

$services = new Inicio();
$services_array = $services->get_services();

$contact_us = new Inicio();
$contact_us_array = $contact_us->get_contact_us();

$about = new Inicio();
$about_array = $about->get_about();

$footer = new Inicio();
$footer_array = $footer->get_footer();

$gallery = new Inicio();
$gallery_array = $gallery->get_gallery();

require('view/inicio.view.php');

?>