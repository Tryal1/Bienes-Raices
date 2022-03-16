<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Blog</h1>
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
                    <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Consejos para construir terrazas en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>
        <!--Fin art-->
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
                    <h4>Construye una pileta para tu hogar</h4>
                    <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Maximisa el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu hogar</p>
                </a>
            </div>
        </article>
        <!--Fin art-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="imagen/webp">
                    <source srcset="build/img/blog3.jpg" type="imagen/jepg">
                    <img loadind="lazy" src="src/img/blog3.jpg" alt="Foto teraza">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Maximisa el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu hogar</p>
                </a>
            </div>
        </article>
        <!--Fin art-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="imagen/webp">
                    <source srcset="build/img/blog4.jpg" type="imagen/jepg">
                    <img loadind="lazy" src="src/img/blog4.jpg" alt="Foto teraza">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu habitacion</h4>
                    <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Maximisa el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu hogar</p>
                </a>
            </div>
        </article>
        <!--Fin art-->
    </section>
</main>

<?php incluirTemplate('footer'); ?>