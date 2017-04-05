<ul>
	<?php

	     // listar todos los usuarios 
		/*<a href="User/show/<?=$nombre->getNombre(); ?> ">
		<?php echo $nombre->getNombre(); ?>
		<?php echo $nombre->getEmail(); ?>
        </a>*/

        //buscar un usuario por su id
        /* <a href="User/show/<?=$user->getNombre(); ?> ">
		<?php echo $user->getNombre(); ?>
		<?php echo $user->getEmail(); ?>
        </a>*/
	
	    foreach ($events as $event) {
	    	
	    
		echo "<li>";
		?>
        <a href="User/show/<?=$event->getNombre(); ?> ">
		<?php echo $event->getNombre(); ?>
		<?php echo $event->getNombre_sms(); ?>
        </a>
        <?php
		echo "</li>";

		}
	?>
</ul>