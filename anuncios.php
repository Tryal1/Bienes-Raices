<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion">
    <h1>Casas y Departamenteos en Ventas</h2>
        <?php
        $limite = 30;
        include 'includes/templates/anuncios.php';
        ?>
</main>

<?php incluirTemplate('footer'); ?>