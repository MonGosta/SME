<ul>
    <?php
    foreach ($nombres as $user) {


        echo "<li>";
        ?>
        <a href="User/show/<?= $user->getNombre(); ?> ">
            <?php echo $user->getNombre(); ?>
            <?php echo $user->getEmail(); ?>
        </a>
        <?php
        echo "</li>";

    }
    ?>
</ul>