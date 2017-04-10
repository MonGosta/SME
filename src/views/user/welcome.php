<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="../../public/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="../../public/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../public/css/bootstrap.css">
	<link rel="stylesheet" href="../../public/css/xenon-core.css">
	<link rel="stylesheet" href="../../public/css/xenon-forms.css">
	<link rel="stylesheet" href="../../public/css/xenon-components.css">
	<link rel="stylesheet" href="../../public/css/xenon-skins.css">
	<link rel="stylesheet" href="../../public/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

<ul>
     <p> Usuario </p>
	<li><?= $user->getUsuario(); ?> </li>
    <p> Cliente </p>
	<li><?= $client->getNombre(); ?> </li>
	 <p> Eventos</p>
	<li><?= $event->getNombre(); ?> </li>

	<?php
	foreach ($event as $ev) {

		?>
         <li><?= $ev->get(); ?> </li>
   <?php
	}

    ?>

</ul>

<a href="../event/register"> <button> Nuevo Evento </button> </a>
<a href="../user/register"> <button> Nuevo Usuario </button> </a>