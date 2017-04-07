<p> Datos de la empresa </p>
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
  

<p> Inserta un usuario </p>


    <label for="nombre">Nombre: </label>
    <input type="" name="nombre_usuario" value="<?= $user->getNombre(); ?>">
    <br>

    <label for="usuario">usuario: </label>
    <input type="" name="usuario" value="<?= $user->getUsuario(); ?>">
    <br>
    <label for="contrasena">contrasena: </label>
    <input type="" name="contrasena" value="<?= $user->getContrasena(); ?>">
    <br>
    <label for="email">email: </label>
    <input type="" name="email_usuario" value="<?= $user->getEmail(); ?>">
    <br>
    <label for="telefono">telefono: </label>
    <input type="" name="telefono_usuario" value="<?= $user->getTelefono(); ?>">
    <br>
    <label for="dni">dni: </label>
    <input type="" name="dni" value="<?= $user->getDni(); ?>">
    <br>
    <input type="submit">
</form>