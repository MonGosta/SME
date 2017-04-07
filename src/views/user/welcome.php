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

<a href="/Mongosta/event/register"> <button> Nuevo Evento </button> </a>
<a href="/Mongosta/user/register"> <button> Nuevo Usuario </button> </a>