
     <p> Usuario </p>
	<p><?= $user->getUsuario(); ?> </p>


	<h2>Clientes :</h2>
<ul>
	<?php 
	foreach ($clients as $client) {

		?> 
		<a href="/Mongosta/client/show/<?=$client->getId();?>">
         <li><?= $client->getNombre(); ?> </li>
   <?php      
	}
	
    ?>

</ul>



<a href="/Mongosta/client/register"> <button> Nuevo Cliente </button> </a>
