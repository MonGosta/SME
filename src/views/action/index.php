<ul>
    <?php

    foreach ($actions as $action) {


        echo "<li>";
        ?>
        <a href="User/show/<?= $action->getNombre(); ?> ">
            <?php echo $action->getNombre(); ?>
            <?php echo $action->getTexto(); ?>
        </a>
        <?php
        echo "</li>";

    }
    ?>
</ul>