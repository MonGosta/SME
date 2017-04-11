<ul>

	<?php
	
	    foreach ($nombres as $user) {
		echo "<li>";
		?>
        <a href=" ">
		<?php echo $user->getNombre(); ?>
		<?php echo $user->getEmail(); ?>
        </a>
        <?php
        }

    




    ?>
</ul>
