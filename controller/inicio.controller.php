<?php

require("model/inicio.model.php");

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

$contact_form = new Inicio();
$contact_form_errors = $contact_form->set_data();

$gallery = new Inicio();
$gallery_array = $gallery->get_gallery();

require('view/inicio.view.php');

?>