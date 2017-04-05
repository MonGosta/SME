<form method="POST">
    <label for="nombre">Nombre: </label>
    <input type="" name="nombre" value="<?= $event->getNombre(); ?>">
    <br>
    <label for="nombre_sms">Nombre_sms: </label>
    <input type="" name="nombre_sms" value="<?= $event->getNombre_sms(); ?>">
    <br>
    <label for="imagen">Imagen: </label>
    <input type="" name="imagen" value="<?= $event->getImagen(); ?>">
    <br>
    <label for="lugar">Lugar: </label>
    <input type="" name="lugar" value="<?= $event->getLugar(); ?>">
    <br>
    <label for="fecha">Fecha: </label>
    <input type="" name="fecha" value="<?= $event->getFecha(); ?>">
    <br>
    <label for="mostrar_comprobar_pulsera">Mostrar_comprobar_pulsera: </label>
    <input type="" name="mostrar_comprobar_pulsera" value="<?= $event->getMostrar_comprobar_pulsera(); ?>">
    <br>
    <label for="registro_previo">Registro_previo: </label>
    <input type="" name="registro_previo" value="<?= $event->getRegistro_previo(); ?>">
    <br>
    <label for="registro_email">Registro_email: </label>
    <input type="" name="registro_email" value="<?= $event->getRegistro_email(); ?>">
    <br>
    <label for="registro_telefono">Registro_telefono: </label>
    <input type="" name="registro_telefono" value="<?= $event->getRegistro_telefono(); ?>">
    <br>

    <input type="submit">
</form>