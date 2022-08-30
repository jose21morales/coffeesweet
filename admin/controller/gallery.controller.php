<?php

require("../model/gallery.model.php");
require("../model/edit_gallery.model.php");

$gallery = new Gallery();
$gallery_array = $gallery->get_gallery();

require("../view/gallery.view.php");

?>