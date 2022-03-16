<?php
require '../../includes/funciones.php';
$auth = autenticado();
if (!$auth) {
    header('location: /');
}

//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//consulta en la base
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//array de validacion
$errores = [];
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Guarda los valores del formulario con sus respectivos name
    //mysqli_real_escape_string hace que si le pasan isntrucciones de sql los transforme en string para no perjudicar la base de datos
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = $_POST['vendedor'];
    $creado = date('y/m/d');
    //asigan la imagena una variable
    $imagen = $_FILES['imagen'];

    //validacion que no este vacio
    if (!$titulo) {
        $errores[] = "El titulo es obligatorio";
    }
    if (!$precio) {
        $errores[] = "El Precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "la descripcion es obligatoria y debe tener mas de 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de estacionamiento es obligatorio";
    }
    if (!$vendedorId) {
        $errores[] = "Seleccione un vendedor";
    }
    //validar si tiene img
    if ($imagen['name'] === '') {
        echo '<pre>';
        var_dump($imagen);
        echo '</pre>';
        $errores[] = "Debe publicar una imagen";
        exit;
    }
    //validar tamano de la img ej 100kb
    //convierte de bytes a KB
    $medida = 1000 * 100;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    if (empty($errores)) {
        // Subida de archivos
        //crear carpeta
        $carpetaimagenes = '../../imagenes/';
        if (!is_dir($carpetaimagenes)) {
            //is_dir verifica si existe
            //mkdir crar la carpeta
            mkdir($carpetaimagenes);
        }

        //generar un nombre unico para img
        $nombreimagen = md5(uniqid(rand(), true)) . '.jpg';

        //subir la imagen
        //primer dato donde esta guardada la imagen temporalmente segundo dato donde la queremos guardar tercera dato el nombre que le damos
        move_uploaded_file($imagen['tmp_name'], $carpetaimagenes . $nombreimagen);
        //insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo,precio,imagen,descripcion,habitaciones,wc,estacionamiento,creado,vendedorId)
        VALUES ('$titulo','$precio','$nombreimagen','$descripcion','$habitaciones','$wc','$estacionamiento','$creado','$vendedorId')";

        //almacena en la base de datos
        //se le pasa la coneccion a la base y lugo lo que le insertas
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            //redirecciona el usuario al finalizar el formulario
            header("location: /admin?resultado=1");
        }
    }
}


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <!--Post no se ven los datos en la url y con get si se ven-->
    <!--action es la carpeta donde se guardan los datos-->
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion general</legend>

            <label for="titulo">Titulo</label>
            <input type="text" placeholder="Titulo" id="titulo" name="titulo" value="<?php echo $titulo; ?>">

            <label for="precio">Precio</label>
            <input type="number" placeholder="Precio" id="precio" name="precio" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" placeholder="Ej:2" id="habitaciones" name="habitaciones" min="1" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños</label>
            <input type="number" placeholder="Ej:2" id="wc" name="wc" min="1" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" placeholder="Ej:2" id="estacionamiento" name="estacionamiento" min="1" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="" disabled selected>--Selecciona--</option>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId == $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] . " " . $row['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" class="boton boton-verde" value="Crear propiedad">
    </form>

</main>

<?php incluirTemplate('footer'); ?>
<?php
//cerrar conceccion
mysqli_close($db);
?>