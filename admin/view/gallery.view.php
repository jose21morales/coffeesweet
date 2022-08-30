<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gallery | Coffee-Sweet</title>
	<link rel="stylesheet" type="text/css" href="../css/gallery_edit.css">
</head>
<body>

<!-- Galeria - boton agregar -->

	<a href="#form-gallery-container"><button class="gallery-add">Agregar imagen</button></a>
	<a href="../index.php#gallery"><button class="gallery-add">Regresar</button></a>

<!-- Modal de galeria - boton agregar -->

  <div class="form-gallery-container" id="form-gallery-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#index.php">X</a>
    </div>
    
    <form class="form-gallery" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">


    	<h3 class="form-gallery-title">Selecciona una imagen</h3>

    	<label for="name">Nombre:</label>
    	<input type="text" name="name" placeholder="Nombre...">

        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_name)): ?>
             <p class="errors"><?php echo $errors_name; ?></p>
        <?php endif; ?>

        <?php if(!empty($errors_gallery)): ?>
             <p class="errors"><?php echo $errors_gallery; ?></p>
        <?php endif; ?>
        
        <input type="submit" name="btn-gallery" value="Agregar">
    </form>
  </div>

   <!-- Galeria - editar -->

    <h2 class="gallery-title" id="gallery">GALERIA</h2>


    <ul class="gallery container">
    <?php foreach($gallery_array as $gallery): ?>

        <li><a href="#<?php echo $gallery['id']; ?>"><img src="../../img/<?php echo $gallery['img']; ?>" class="gallery__img" alt="<?php echo $gallery['name']; ?>"></a>

        <a href="<?php echo '#' . $gallery['name']; ?>"><button class="gallery-delete">Borrar</button></a>

        </li>

    <!-- Estilos de gallery - boton borrar - modal -->

    <div class="gallery-delete-container" id="<?php echo $gallery['name']; ?>">
        <div class="gallery-delete-content">
            <h3 class="gallery-delete-title">¿Esta seguro que desea borrar a <?php echo ucwords($gallery['name']); ?>?</h3>
            <div class="gallery-delete-buttons">
                <a class="gallery-delete-cancel" href="#gallery">Cancelar</a>
                <a class="gallery-delete-accept" href="../model/delete_gallery.php?id=<?php echo $gallery['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>

    <!-- Gallery - Modal -->

    <div class="gallery__modal" id="<?php echo $gallery['id']; ?>">
        <div class="gallery__modal--overflow">
            <a class="gallery__modal-close" href="#index.php">X</a>
        </div>
        <h2 class="gallery__modal-title"><?php echo $gallery['name']; ?></h2>
        <div class="gallery__modal-content">
            <a href=""><</a>
            <img src="../../img/<?php echo $gallery['img']; ?>" class="gallery__modal-img" alt="Imagen 1">
            <a href="">></a>
        </div>
    </div>

    <?php endforeach; ?>

    </ul>

</body>
</html>