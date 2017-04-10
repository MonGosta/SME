<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="../../../public/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="../../../public/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/xenon-core.css">
    <link rel="stylesheet" href="../../../public/css/xenon-forms.css">
    <link rel="stylesheet" href="../../../public/css/xenon-components.css">
    <link rel="stylesheet" href="../../../public/css/xenon-skins.css">
    <link rel="stylesheet" href="../../../public/css/custom.css">

    <script src="../../../public/js/jquery-1.11.1.min.js"></script>

</head>
<body>


<form method="POST">
    <label for="nombre">Nombre: </label>
    <input type="" name="nombre" value="<?=$user->getNombre(); ?>">
    <br>

    <label for="usuario">usuario: </label>
    <input type="" name="usuario" value="<?= $user->getUsuario(); ?>">
    <br>
    <label for="contrasena">contraseña: </label>
    <input type="" name="contrasena" value="<?= $user->getContrasena(); ?>">
    <br>
    <label for="email">email: </label>
    <input type="" name="email" value="<?= $user->getEmail(); ?>">
    <br>
    <label for="telefono">telefono: </label>
    <input type="" name="telefono" value="<?= $user->getTelefono(); ?>">
    <br>
    <label for="dni">dni: </label>
    <input type="" name="dni" value="<?= $user->getDni(); ?>">
    <br>
    <input type="submit">
</form>

<!-- Bottom Scripts -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/TweenMax.min.js"></script>
    <script src="../public/js/resizeable.js"></script>
    <script src="../public/js/joinable.js"></script>
    <script src="../public/js/xenon-api.js"></script>
    <script src="../public/js/xenon-toggles.js"></script>
    <script src="../public/js/jquery-validate/jquery.validate.min.js"></script>
    <script src="../public/js/toastr/toastr.min.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="../public/js/xenon-custom.js"></script>
</body>
</html>