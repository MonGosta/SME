<ul>
    <?php
    foreach ($nombres as $user) {


        echo "<li>";
        ?>

            <?php echo $user->getNombre(); ?>
            <?php echo $user->getEmail(); ?>

        <?php
        echo "</li>";

    }
    ?>
</ul>