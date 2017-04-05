<form method="POST">
    <label for="nombre">Nombre: </label>
    <input type="" name="nombre" value="<?= $client->getNombre(); ?>">
    <br>
    <label for="email">email: </label>
    <input type="" name="email" value="<?= $client->getEmail(); ?>">
    <br>
    <label for="telefono">telefono: </label>
    <input type="" name="telefono" value="<?= $client->getTelefono(); ?>">
    <br>
    <input type="submit">
</form>