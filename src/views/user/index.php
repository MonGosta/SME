<ul>
	<?php
	
	foreach ($nombres as $nombre) {
		echo "<li>";
		?>
		<a href="User/show/<?=$nombre["id"] ?> ">
		<?php echo $nombre["nombre"]; ?>
        </a>
        <?php
		echo "</li>";

		}
	?>
</ul>
