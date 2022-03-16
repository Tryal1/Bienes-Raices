<?php
//importar la concecciont
require __DIR__ . '/../config/database.php';
$db = conectarDB();
//consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";
//resultado
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while ($propiedades = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">
            <img laading="lazy" src="/imagenes/<?php echo $propiedades['imagen']; ?>" alt="Anuncio 3">
            <div class="contenido-anuncio">
                <h3><?php echo $propiedades['titulo']; ?></h3>
                <p><?php echo $propiedades['descripcion']; ?></p>
                <p class="precio">$<?php echo $propiedades['precio']; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono-prop" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $propiedades['wc']; ?></p>
                    </li>
                    <li>
                        <img class="icono-prop" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p><?php echo $propiedades['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono-prop" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio ">
                        <p><?php echo $propiedades['habitaciones']; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $propiedades['id']; ?>" class="boton boton-amarillo">Ver propiedad</a>
            </div>
            <!--contenido anuncio-->
        </div>
        <!--Fin anuncio-->
    <?php endwhile; ?>
</div>
<!--Fin contenedor anuncio-->

<?php
//cerrar conceccion
mysqli_close($db);
?>