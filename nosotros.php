<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="img-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="imagen/webp">
                <source srcset="build/img/nosotros.jpg" type="imagen/jepg">
                <img loadind="lazy" src="src/img/nosotros.jpg" alt="Foto nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sapiente ipsa natus fuga, nihil consectetur nostrum asperiores,
                temporibus consequuntur vitae illum dolores. Sint aliquam numquam fugit vel, accusamus non quisquam! Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Ad, illo sed. Nesciunt doloribus molestias sed assumenda consectetur commodi veniam soluta laboriosam,
                ratione labore architecto dolore corrupti atque minus? Eos, quod! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptatibus
                optio eum alias odio exercitationem dolore sunt aliquam sit. Molestiae reiciendis officia perspiciatis officiis dolores ab corrupti,cupiditate
                exercitationem nulla! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid exercitationem atque autem suscipit
                reprehenderit dolorum et labore ullam rerum sunt, corporis minus ipsum adipisci. Sit ipsum voluptatum facere totam molestiae?
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
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
</section>

<?php incluirTemplate('footer'); ?>