<ul>
     <p> Usuario </p>
	<li><?= $user->getUsuario(); ?> </li>
    <p> Cliente </p>
	<li><?= $client->getNombre(); ?> </li>
	 <p> Eventos</p>

	<?php 
	foreach ($event as $ev) {
		?>
         <li>
         <a href="/Mongosta/event/show/<?=$ev->getNombre_sms();?> ">
         <button>
          <?=$ev->getNombre();?> 
          </button>
          </a>
          </li>
   <?php      
	}
	
    ?>

</ul>

<a href="/Mongosta/event/register/<?=$user->getId_cliente();?>"> <button> Nuevo Evento </button> </a>
<a href="/Mongosta/user/register/<?=$user->getId_cliente();?>"> <button> Nuevo Usuario </button> </a>