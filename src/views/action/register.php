<form method="POST">
    <label for="nombre">Nombre: </label>
    <input type="" name="nombre" value="<?= $action->getNombre(); ?>">
    <br>
    <label for="texto">Texto: </label>
    <input type="" name="texto" value="<?= $action->getTexto(); ?>">
    <br>
    <label for="modo_foto">Modo_foto: </label>
    <input type="" name="modo_foto" value="<?= $action->getModo_foto(); ?>">
    <br>
    <input type="submit">
</form>