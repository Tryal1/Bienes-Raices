<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamenteos en Ventas</h2>
    <?php
    $limite = 3;
    include 'includes/templates/anuncios.php';
    ?>
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuntra la casa de tus sueños</h2>
    <p>LLena el formulario de contacto y un asecor estara en contacto con tigo</p>
    <a href="contacto.php" class="boton-amarillo">Contacto</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="imagen/webp">
                    <source srcset="build/img/blog1.jpg" type="imagen/jepg">
                    <img loadind="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Consejos para construir terrazas en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="imagen/webp">
                    <source srcset="build/img/blog2.jpg" type="imagen/jepg">
                    <img loadind="lazy" src="src/img/blog2.jpg" alt="Foto teraza">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Maximisa el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu hogar</p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimonios">
        <h2>Testimonios</h2>
        <div class="contenido-testimonios">
            <blockquote>El personal se comporto de una exelente forma, muy buena atencion y la casa que me ofrecieron cuneta con todas mis espectativas</blockquote>
            <p class="alinear-derecha">-Thomas Carreno</p>
        </div>
    </section>
</div>

<?php incluirTemplate('footer'); ?>