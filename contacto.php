<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="imagen/webp">
        <source srcset="build/img/destacada3.jpg" type="imagen/jepg">
        <img loadind="lazy" src="build/img/destacada3.jpg" alt="Texto entrada blog">
    </picture>
    <h2>LLena el formulario para contactarnos</h2>
    <form class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" placeholder="Nombre Completo">

            <label for="email">E-mail</label>
            <input id="email" type="email" placeholder="Tu E-mail">

            <label for="telefono">Telefono</label>
            <input id="telefono" type="tel" placeholder="Tu Telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion sobre propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="compra">Compra</option>
                <option value="venta">Venta</option>
            </select>
            <label for="presupuesto">Precio o Presupuesto</label>
            <input id="presupuesto" type="number" placeholder="Tu precio o presupuesto">
        </fieldset>
        <fieldset>
            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">Email</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>

            <p>Si elijio telefono complete lo siguiente</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">

        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>