<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cafeteria</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/png" href="">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="sidebar">
    <h2 class="sidebar-title">Configuración</h2>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-li"><a class="sidebar-menu-link" target="_blank" href="../index.php">Ver página</a></li>
        <li class="sidebar-menu-li"><a class="sidebar-menu-link" href="controller/admin.controller.php">Crear usuario</a></li>
    </ul>
</div>

<div class="global-container">
    <img src="img/menu.png" class="menu-bar">

    <div class="c_panel container" id="admin">
        <div class="c_panel-content">
           <h3 class="c_panel-title">Hola <?php echo $_SESSION['USER']; ?> :D</h3>
           <h3 class="c_panel-title">Bienvenido al panel de administración</h3>
        </div>
        <a class="c_panel-close" href="model/cerrar.php">Cerrar Sesión</a>
    </div>
	<div class="header container">
		<h2 class="header-logo">Coffee-Sweet</h2>
		<div class="header-content">
          <p class="header-text">
          	<span class="icon-phone"> 999-999-999</span>
          </p>
          <p class="header-text">
          	<span class="icon-location"></span> Tapachula, Chiapas, México
          </p>
        </div>
	</div>

	<div class="div container">
		<div class="div-color">
		   <h1 class="logo">Coffee-Sweet</h1>
		   <span class="icon-bars" id="btnmenu"></span>
		   <ul class="menu" id="menu">
		       <li class="menu__item"><a class="menu__link" href="#welcome"><span class="icon-home"></span> INICIO</a></li>
			   <li class="menu__item"><a class="menu__link" href="#services"><span class="icon-cloud-download"></span> SERVICIOS</a></li>
			   <li class="menu__item"><a class="menu__link" href="#contact-us"><span class="icon-phone"></span>CONTACTANOS</a></li>
			   <li class="menu__item"><a class="menu__link" href="#about"><span class="icon-user"></span>ACERCA DE</a></li>
		   </ul>
	    </div>
	</div>

    <!-- ================== Estilos del banner ===================== -->

	<div class="banner container" id="banner">
		<div class="banner__color">
			<div class="banner__content">
			   <div class="banner__text">
                <?php foreach($banner_array as $banner): ?>

		          <h1 id="banner__title" class="banner__title"><?php echo $banner['title']; ?></h1>
		          <h3 id="banner__txt" class="banner__txt"><?php echo $banner['txt']; ?></h3>

                  <a href="#form-banner-container" class="banner-edit">Editar</a>

		        <?php endforeach; ?>
               </div>
		       
               <div class="banner__buttons">
			      <a class="banner__buttons-link" href="#welcome">Conocenos</a>
			      <a class="banner__buttons-link" href="#gallery">Galeria</a>
		       </div>
		   </div>
	    </div>
	</div>

    <div class="form-banner-container" id="form-banner-container">
        <div class="cerrar-center">
            <a class="cerrar" href="#admin">X</a>
        </div>
        <form class="form-banner" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                 
           <label for="banner-title">Titulo</label><br>
           <input type="text" name="banner-title" id="banner-title" value="<?php echo $banner['title']; ?>"><br>

           <label for="banner-txt">Descripción</label><br>
           <textarea name="banner-txt" id="banner-txt"><?php echo $banner['txt']; ?></textarea><br>
                 
           <input type="submit" name="btn-banner" value="Modificar">
        </form>
    </div>

    <!-- ================== Estilos de welcome ===================== -->

    <?php foreach($welcome_array as $welcome): ?>
    
    <div class="welcome container" id="welcome">
    	<img src="../img/<?php echo $welcome['img']; ?>" class="welcome__img" alt="Foto de bienvenida">
    	<div class="welcome__container">
    		<h3 class="welcome__title"><?php echo $welcome['title']; ?></h3>
    		<p class="welcome__txt"><?php echo $welcome['txt']; ?></p>
    	    <p class="welcome-p"><a class="welcome__link" href="#contact-us">Contactanos &raquo;</a></p>

            <center>
                <a href="#form-welcome-container"><button class="welcome-edit">Editar</button></a>
            </center>

    	</div>
    </div>

    <?php endforeach; ?>

  <div class="form-welcome-container" id="form-welcome-container">    
    <div class="cerrar-center">
        <a class="cerrar" href="#welcome">X</a>
    </div>
    <form class="form-welcome" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="welcome-id" value="<?php echo $welcome['id']; ?>">
        <label for="welcome-title">Titulo</label><br>
        <input type="text" name="welcome-title" id="welcome-title" value="<?php echo $welcome['title']; ?>"><br>
        <label for="welcome-txt">Descripción</label><br>
        <textarea name="welcome-txt" id="welcome-txt"><?php echo $welcome['txt']; ?></textarea><br>
        <label for="welcome-image">Imagen</label><br>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_welcome)): ?>
             <p class="errors"><?php echo $errors_welcome; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-welcome" value="Modificar">
    </form>
  </div>

  <!-- ================== Estilos de experience ================== -->

    <?php foreach($experience_array as $experience): ?>

    <div class="experience container" id="experience">
    	<div class="experience__container">
    		<h3 class="experience__title"><?php echo $experience['title']; ?></h3>
    		<p class="experience__txt"><?php echo $experience['txt']; ?></p>

            <center>
            <a href="#form-experience-container"><button class="experience-edit">Editar</button></a>
            </center>

    	</div>
    	<img src="../img/<?php echo $experience['img']; ?>" class="experience__img" alt="Nuestra experiencia">
    </div>

    <?php endforeach; ?>

  <div class="form-experience-container" id="form-experience-container">    
    <div class="cerrar-center">
        <a class="cerrar" href="#experience">X</a>
    </div>
    <form class="form-experience" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="experience-id" value="<?php echo $experience['id']; ?>">

        <label for="experience-title">Titulo</label>
        <input type="text" name="experience-title" id="experience-title" value="<?php echo $experience['title']; ?>"><br>

        <label for="experience-txt">Descripción</label>
        <textarea name="experience-txt" id="experience-txt"><?php echo $experience['txt']; ?></textarea><br>
        
        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_experience)): ?>
             <p class="errors"><?php echo $errors_experience; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-experience" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de personal ================== -->

    <div class="our-personal container" id="personal">
    	<div class="our-personal-color">
    		<h3 class="our-personal-title">Nuestro personal</h3>
            <div class="chefs-flex container">

            <?php foreach($personal_array as $personal): ?>

            <div class="chefs">
                <img src="../img/<?php echo $personal['img']; ?>" class="chefs-img" alt="<?php echo $personal['name']; ?>">
                <div class="chefs__content">
                    <p class="chefs-name"><?php echo ucwords($personal['name']); ?></p>
                    <p class="chefs-age"><?php echo $personal['age'] . " años"; ?></p>
                </div>

                <a href="<?php echo '#' . $personal['name']; ?>"><button class="personal-delete">Borrar</button></a>
                
    <!-- Estilos de personal - boton borrar -->

    <div class="personal-delete-container" id="<?php echo $personal['name']; ?>">
        <div class="personal-delete-content">
            <h3 class="personal-delete-title">¿Esta seguro que desea borrar a <?php echo ucwords($personal['name']); ?>?</h3>
            <div class="personal-delete-buttons">
                <a class="personal-delete-cancel" href="#personal">Cancelar</a>
                <a class="personal-delete-accept" href="model/delete_personal.php?id=<?php echo $personal['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
            </div>

            <?php endforeach; ?>

            </div>

            <a href="#form-personal-container"><button class="personal-add">Añadir</button></a>

        </div>
    </div>


    <!-- Estilos de personal - boton Agregar -->

  <div class="form-personal-container" id="form-personal-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#personal">X</a>
    </div>    

    <form class="form-personal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="personal-id">

        <label for="personal-name">Nombre</label>
        <input type="text" name="personal-name" id="personal-name" placeholder="Nombre:"><br>

        <label for="personal-age">Edad</label>
        <input type="text" name="personal-age" id="personal-age" placeholder="Edad:"><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label><br>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_personal)): ?>
             <p class="errors"><?php echo $errors_personal; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-personal" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de coffee ================== -->

    <div class="column__coffee-container container" id="coffee">
        <h3 class="column__coffee-container-title">Nuestros cafés</h3>
        <div class="column__coffee-content">

            <?php foreach($coffee_array as $coffee): ?>

            <div class="column__coffee">
                <img src="../img/<?php echo $coffee['img']; ?>" class="column__coffee-img" alt="<?php echo $coffee['title']; ?>">
                <div class="column__coffee-text">
                    <h4 class="column__coffee-title"><?php echo ucwords($coffee['title']); ?></h4>
                    <p class="column__coffee-price"><?php echo $coffee['price']; ?></p>

                    <a href="<?php echo '#' . $coffee['title']; ?>"><button class="coffee-delete">Borrar</button></a>
                
    <!-- Estilos de coffee - boton borrar -->

    <div class="coffee-delete-container" id="<?php echo $coffee['title']; ?>">
        <div class="coffee-delete-content">
            <h3 class="coffee-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($coffee['title']); ?>?</h3>
            <div class="coffee-delete-buttons">
                <a class="coffee-delete-cancel" href="#coffee">Cancelar</a>
                <a class="coffee-delete-accept" href="model/delete_coffee.php?id=<?php echo $coffee['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
                </div>

            </div>

            <?php endforeach; ?>

        </div>
            <a href="#form-coffee-container"><button class="coffee-add">Añadir</button></a>
    </div>


    <!-- Estilos de coffee - boton agregar -->

  <div class="form-coffee-container" id="form-coffee-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#coffee">X</a>
    </div>
    
    <form class="form-coffee" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="coffee-id">

        <label for="coffee-title">Titulo</label><br>
        <input type="text" name="coffee-title" id="coffee-title" placeholder="Nombre:"><br>

        <label for="coffee-price">Precio</label>
        <input type="text" name="coffee-price" id="coffee-price" placeholder="Precio:"><br>

        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_coffee)): ?>
             <p class="errors"><?php echo $errors_coffee; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-coffee" value="Modificar">
    </form>
  </div>

    <!-- ================== Estilos de cakes ================== -->

    <div class="column__container container" id="cakes">
    	<h3 class="column__container-title">Nuestros deliciosos postres</h3>
    	<div class="column__content">

            <?php foreach($cakes_array as $cakes): ?>

            <div class="column">
                <img src="../img/<?php echo $cakes['img']; ?>" class="column__img" alt="<?php echo $cakes['title']; ?>">
                <div class="column__text">
                    <h4 class="column__title"><?php echo ucwords($cakes['title']); ?></h4>
                    <p class="column__price"><?php echo $cakes['price']; ?></p>

                <a href="<?php echo '#' . $cakes['title']; ?>"><button class="cakes-delete">Borrar</button></a>
                
    <!-- Estilos de cakes - boton borrar -->

    <div class="cakes-delete-container" id="<?php echo $cakes['title']; ?>">
        <div class="cakes-delete-content">
            <h3 class="cakes-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($cakes['title']); ?>?</h3>
            <div class="cakes-delete-buttons">
                <a class="cakes-delete-cancel" href="#cakes">Cancelar</a>
                <a class="cakes-delete-accept" href="model/delete_cakes.php?id=<?php echo $cakes['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>
            <a href="#form-cakes-container"><button class="cakes-add">Añadir</button></a>
    </div>


    <!-- Estilos de cakes - boton agregar -->

  <div class="form-cakes-container" id="form-cakes-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#cakes">X</a>
    </div>

    <form class="form-cakes" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="cakes-id">

        <label for="cakes-title">Nombre</label><br>
        <input type="text" name="cakes-title" id="cakes-title" placeholder="Nombre:"><br>
        
        <label for="cakes-price">Precio</label><br>
        <input type="text" name="cakes-price" id="cakes-price" placeholder="Precio:"><br>

        <label for="image">Imagen</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_cakes)): ?>
             <p class="errors"><?php echo $errors_cakes; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-cakes" value="Modificar">
    </form>
  </div>

    <!-- ======================== Galeria ========================== -->

    <h2 class="gallery-title" id="gallery">GALERIA</h2>


    <ul class="gallery container">
    <?php foreach($gallery_array as $gallery): ?>

        <li><a href="#<?php echo $gallery['id']; ?>"><img src="../img/<?php echo $gallery['img']; ?>" class="gallery__img" alt="<?php echo $gallery['name']; ?>"></a></li>

    <!-- Gallery - Modal -->

    <div class="gallery__modal" id="<?php echo $gallery['id']; ?>">
        <div class="gallery__modal--overflow">
            <a class="gallery__modal-close" href="#index.php">X</a>
        </div>
        <h2 class="gallery__modal-title"><?php echo $gallery['name']; ?></h2>
        <div class="gallery__modal-content">
            <a href=""><</a>
            <img src="img/<?php echo $gallery['img']; ?>" class="gallery__modal-img" alt="Imagen 1">
            <a href="">></a>
        </div>
    </div>

    <?php endforeach; ?>

    </ul>

    <?php require("model/paginacion.php"); ?>

    <?php

    //Operacion matematica para boton siguiente y atras
    $incrementNum = (($pagina +1) <= $total_paginas)?($pagina +1):1;
    $decrementNum = (($pagina -1) < 1)?1:($pagina -1);

    ?>
<nav class="nav">
    <ul class="paginacion">
        <li class="li btn"><a class="pag-link" href="?pagina=<?php echo $decrementNum; ?>">&laquo;</a></li>

    <?php

    //Se resta y suma con el numero de pag actual con el cantidad de 
    //numeros  a mostrar
    $desde = $pagina-(ceil($post_por_pagina/2) -1);
    $hasta = $pagina+(ceil($post_por_pagina/2) -1);

    //Se valida
    $desde=($desde < 1)?1:$desde;
    $hasta=($hasta < $post_por_pagina)?$post_por_pagina:$hasta;
    //Se muestra los numeros de paginas
    for ($i=$desde; $i <= $hasta ; $i++) {
        //Se valida la paginacion total
        //de registros
        if ($i <= $total_paginas) {
            //Validamos la pag activo
            if ($i == $pagina) {
                echo "<li class='li' id='active'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
            } else {
                echo "<li class='li'><a class='pag-link' href='?pagina=" . $i . "#gallery'>" . $i . "</a></li>";
            }
        }
    }

    echo "<li class='li'><a class='pag-link' href='?pagina=" . $incrementNum . "#gallery'>&raquo;</a></li></ul></nav>";

    ?>
    <a href="controller/gallery.controller.php"><button class="gallery-edit">Editar</button></a>

    <!-- ================== Estilos de services ================== -->

    <hr class="line-hr container">

    <h3 class="service-title" id="services">SERVICIOS</h3>

<div class="container">
    <div class="service__container">

        <?php foreach($services_array as $services): ?>
        
        <div class="service__column">
            <img src="../img/<?php echo $services['img']; ?>" class="service__column-img" alt="<?php echo $services['title']; ?>" title="<?php echo $services['title']; ?>">
            <h3 class="service__column-title"><?php echo ucwords($services['title']); ?> </h3>
            <p class="service__column-txt"><? echo $services['txt']; ?></p>

            <a href="<?php echo '#' . $services['title']; ?>"><button class="services-delete">Borrar</button></a>

    <!-- Estilos de services - boton borrar -->

    <div class="services-delete-container" id="<?php echo $services['title']; ?>">
        <div class="services-delete-content">
            <h3 class="services-delete-title">¿Esta seguro que desea borrar <?php echo ucwords($services['title']); ?>?</h3>
            <div class="services-delete-buttons">
                <a class="services-delete-cancel" href="#services">Cancelar</a>
                <a class="services-delete-accept" href="model/delete_services.php?id=<?php echo $services['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>

        </div>

        <?php endforeach; ?>

    </div>
    <a href="#form-services-container"><button class="services-add">Añadir</button></a>
</div>

<!-- Estilos de servicios - boton agregar -->

  <div class="form-services-container" id="form-services-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#services">X</a>
    </div>
    
    <form class="form-services" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="services-id">

        <label for="services-title">Titulo</label><br>
        <input type="text" name="services-title" id="services-title" placeholder="Nombre:"><br>

        <label for="services-text">Descripción</label><br>
        <textarea name="services-text" placeholder="Descripción:"></textarea><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_services)): ?>
             <p class="errors"><?php echo $errors_services; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-services" value="Modificar">
    </form>
  </div>

<!-- ================== Estilos de contact-us ================== -->

    <hr class="line-hr container">

    <h3 class="contact-us-title" id="contact-us">CONTACTANOS</h3>

    <div class="contact-us container">
        <?php foreach($contact_us_array as $contact_us): ?>
        
        <div class="contact-info">
            <h3 class="contact-info-title"><?php echo $contact_us['title']; ?></h3>
            <p class="contact-info-txt"><?php echo $contact_us['description']; ?></p>
            <div class="contact-info-content">
                <p><span class="icon-phone"></span> <?php echo $contact_us['phone']; ?></p>
                <p><span class="icon-whatsapp"></span> <?php echo $contact_us['whatsapp']; ?></p>
                <p><span class="icon-envelope"></span> <?php echo $contact_us['mail']; ?></p>
            </div>

            <a href="#form-contact_us-container"><button class="contact_us-edit">Editar</button></a>
        
        </div>

        <!-- Estilos de contact_us - boton editar -->

  <div class="form-contact_us-container" id="form-contact_us-container">
    
    <div class="cerrar-center">
        <a class="cerrar" href="#contact_us">X</a>
    </div>

    <form class="form-contact_us" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?php echo $contact_us['id']; ?>">

        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="<?php echo $contact_us['title']; ?>" required><br>
        
        <label for="description">Descripción</label>
        <textarea name="description" id="description" required><?php echo $contact_us['description']; ?></textarea><br>
        
        <label for="phone">Télefono</label>
        <input type="text" name="phone" id="phone" value="<?php echo $contact_us['phone']; ?>" required><br>
        
        <label for="whatsapp">WhatsApp</label>
        <input type="text" name="whatsapp" id="whatsapp" value="<?php echo $contact_us['whatsapp']; ?>" required><br>
        
        <label for="mail">Correo</label>
        <input type="text" name="mail" id="mail" value="<?php echo $contact_us['mail']; ?>" required><br> 
        
        <input type="submit" name="btn-contact_us" value="Modificar">
    </form>
  </div>

        <?php endforeach; ?>

    	<div class="contact-form-container">
            <h3 class="contact-form-container-title">Escribe tus datos</h3>
    		<form class="contact-form" action="" method="post">
    			<input type="text" name="name" placeholder="Escribe tu nombre" required>
    			<input type="text" name="mail" placeholder="Escribe tu correo" required>
    			<input type="text" name="phone" placeholder="Escribe tu télefono">
    			<textarea placeholder="Escribe un mensaje"></textarea>
    			<input type="submit" name="btn-contact" value="Enviar">
    		</form>
    	</div>
    </div>
    <!--Map of Google-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.65721091017167!2d-92.14670392138582!3d15.033856641544443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0add7e127ae3%3A0x5fd88adbfe92705f!2sCacahoat%C3%A1n%2C%20Chis.!5e0!3m2!1ses!2smx!4v1592762465529!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <!-- ================== Estilos de about ================== -->

    <hr class="line-hr container">

    <h3 class="about-title" id="about">Acerca de... Nosotros</h3>

    <div class="about container">

        <?php foreach($about_array as $about): ?>

        <div class="about__column">
            <img src="../img/<?php echo $about['img']; ?>" class="about__column-img" alt="<?php echo $about['name']; ?>" title="<?php echo $about['name']; ?>">
            <h3 class="about__column-name"><?php echo ucwords($about['name']); ?></h3>
            <p class="about__column-txt"><?php echo $about['description']; ?></p>
        
        <a href="<?php echo '#' . $about['name']; ?>"><button class="about-delete">Borrar</button></a>

        </div>

    <!-- Estilos de about - boton borrar -->

    <div class="about-delete-container" id="<?php echo $about['name']; ?>">
        <div class="about-delete-content">
            <h3 class="about-delete-title">¿Esta seguro que desea borrar a <?php echo ucwords($about['name']); ?>?</h3>
            <div class="about-delete-buttons">
                <a class="about-delete-cancel" href="#about">Cancelar</a>
                <a class="about-delete-accept" href="model/delete_about.php?id=<?php echo $about['id']; ?>">Aceptar</a>
            </div>
        </div>
    </div>

        <?php endforeach; ?>

    </div>

    <!-- Estilos de about - boton agregar -->

    <div class="container">
        <a href="#form-about-container"><button class="about-add">Añadir</button></a>
    </div>


  <div class="form-about-container" id="form-about-container">
    <div class="cerrar-center">
        <a class="cerrar" href="#about">X</a>
    </div>
    
    <form class="form-about" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="cakes-id">

        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name" placeholder="Nombre:"><br>

        <label for="description">Descripción</label><br>
        <textarea name="description" placeholder="Descripcion:"></textarea><br>

        <label for="image">Seleccionar una imagen cuadrada (Ej. 500 x 500)</label>
        <input type="file" name="image" size="20" value="<?php echo $image; ?>"><br>

        <?php if(!empty($errors_about)): ?>
             <p class="errors"><?php echo $errors_about; ?></p>
        <?php endif; ?>     
        
        <input type="submit" name="btn-about" value="Modificar">
    </form>
  </div>

    <!-- Boton para subir -->

    <div class="button-up-container container">
        <a title="Ir arriba" class="button-up" href="#admin"><span class="icon-arrow-up"></span></a>
    </div>

    <!-- ================== Estilos de footer ================== -->

<footer class="main-footer container" id="footer">
            <?php foreach($footer_array as $footer): ?>

            <div class="container container--flex">
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">¿Por qué visitarnos?</h2>
                    <p class="footer__column-txt"><?php echo $footer['description']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Contáctanos</h2>
                    <p class="footer__column-txt"><?php echo $footer['place']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['phone']; ?></p>
                    <p class="footer__column-txt"><?php echo $footer['mail']; ?></p>
                </div>
                <div class="footer__column column--33">
                    <h2 class="footer__column-title">Siguenos en nuestras redes</h2>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['facebook']; ?>" class="icon-facebook">Facebook</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['instagram']; ?>" class="icon-instagram">Instagram</a></p>
                    <p class="footer__column-txt"><a target="_blank" href="<?php echo $footer['twitter']; ?>" class="icon-twitter">Twitter</a></p>
                </div>

            <a href="#form-footer-container"><button class="footer-edit">Editar</button></a>
                
                <p class="copy">&copy; 2020 Coffee-Sweet | Todos los derechos reservados</p>
            </div>
            <?php endforeach; ?>


    </footer>
  <!-- Estilos de footer - boton editar -->

  <div class="form-footer-container" id="form-footer-container">
    <div class="cerrar-center-footer">
        <a class="cerrar-footer" href="#footer">X</a>
    </div>
    
    <form class="form-footer" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="form-footer--flex">
        
        <input type="hidden" name="id" value="<?php echo $footer['id']; ?>">
       
       <div class="form-footer-description">
        <label for="description">¿Por qué visitarnos?</label>
        <textarea type="text" name="description" id="description"><?php echo $footer['description']; ?></textarea><br>
       </div>

       <div class="form-footer-contact">
        
        <label for="place">Lugar</label>
        <input type="text" name="place" id="place" value="<?php echo $footer['place']; ?>"><br>
           
        <label for="phone">Télefono</label>
        <input type="text" name="phone" id="phone" value="<?php echo $footer['phone']; ?>"><br>

        <label for="mail">Correo</label>
        <input type="text" name="mail" id="mail" value="<?php echo $footer['mail']; ?>"><br>
       </div>

       <div class="form-footer-social__networks">
        <label for="facebook">Facebook (Link)</label>
        <input type="text" name="facebook" id="facebook" value="<?php echo $footer['facebook']; ?>"><br>

        <label for="instagram">Instagram (Link)</label>
        <input type="text" name="instagram" id="instagram" value="<?php echo $footer['instagram']; ?>"><br>

        <label for="twitter">Twitter (Link)</label>
        <input type="text" name="twitter" id="twitter" value="<?php echo $footer['twitter']; ?>"><br>
        </div>
    </div>

        <input type="submit" name="btn-footer" value="Modificar">
    </form>
  </div>
</div>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/open.js"></script>
</body>
</html>