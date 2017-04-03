<ul>
	<?php
	
	foreach ($nombres as $nombre) {
		echo "<li>";
		?>
		<a href="User/show/<?=$nombre->getNombre(); ?> ">
		<?php echo $nombre->getNombre(); ?>
		<?php echo $nombre->getEmail(); ?>
        </a>
        <?php
		echo "</li>";

		}
	?>
</ul>
