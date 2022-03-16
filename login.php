<?php
require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

//autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = 'El email es obligatorio';
    }
    if (!$password) {
        $errores[] = 'El password es obligatorio';
    }
    if (empty($errores)) {
        //revisar si existe el usuario
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            //revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            //verifica si el password es correcto o no
            //se le pasa el password que puso y el usuario y dps el hasheado
            $auth = password_verify($password, $usuario['password']);
            if ($auth) {
                //el usuario se autentico
                session_start();
                //LLena el arreglo de la seccion 
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header('location: /admin');
            } else {
                $errores[] = 'El password es incorrecto';
            }
        } else {
            $errores[] = 'El usuario no existe';
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>
    <form class='formulario' method="POST" novalidate>
        <fieldset>
            <legend>Email y Password</legend>
            <label for="email">E-mail</label>
            <input name="email" id="email" type="email" placeholder="Tu E-mail" require>

            <label for="password">Password</label>
            <input name="password" id="password" type="password" placeholder="Tu password" require>

            <input type="submit" value="Iniciar sesion" class="boton boton-verde">
        </fieldset>
    </form>
</main>

<?php incluirTemplate('footer'); ?>