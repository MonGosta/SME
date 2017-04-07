<ul>
<<<<<<< HEAD
	<?php
	
	    foreach ($nombres as $user) {
	    	
	    
		echo "<li>";
		?>
        <a href="User/show/<?=$user->getNombre(); ?> ">
		<?php echo $user->getNombre(); ?>
		<?php echo $user->getEmail(); ?>
=======
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

    foreach ($nombres as $user) {


        echo "<li>";
        ?>
        <a href="User/show/<?= $user->getNombre(); ?> ">
            <?php echo $user->getNombre(); ?>
            <?php echo $user->getEmail(); ?>
>>>>>>> 604c6c51aac7067ceb54fe3cc74e983ea607acad
        </a>
        <?php
        echo "</li>";

    }
    ?>
</ul>
