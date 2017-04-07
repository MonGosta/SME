<form method="POST">
    <label for="descripcion">Introduce el email y contraseña </label>
    <br>
    <br>
    <label for="nombre">Email: </label>
    <input type="" name="email" value="<?= $user->getEmail(); ?>">
    <br>
    <label for="nombre">Contraseña: </label>
    <input type="" name="contrasena" value="<?= $user->getContrasena(); ?>">
    <br>
    <input type="submit">
</form>