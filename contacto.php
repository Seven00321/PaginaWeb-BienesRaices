<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!--    Main  -->
    <main class="contenedor seccion">
        <h1 class="">Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario">
            <!-- 1er fieldset-->
            <fieldset>
                <legend>Información Personal</legend>

                <!-- Nombre -->
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                <!-- Email -->
                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu email">

                <!-- Telefono -->
                <label for="telefono">E-mail</label>
                <input id="telefono" type="tel" placeholder="Tu telefono">

                <!-- Mensaje -->
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" rows="5" type="text" placeholder="Tu mensaje"></textarea>
            </fieldset>

            <!-- 2do fieldset-->
            <fieldset>
                <legend>Información sobre la Propiedad</legend>

                <!-- Vende o Compra -->
                <label for="opciones">Nombre</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <!-- Presupuesto -->
                <label for="presupuesto">Precio o Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu Precio o Presupuesto">
            </fieldset>

            <!-- 3er fieldset-->
            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <!-- Telefono -->
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <!-- Email -->
                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <!-- Fecha -->
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date">

                <!-- Hora -->
                <label for="hora">Hora</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>

            <!-- Boton - Enviar-->
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>


<?php
    incluirTemplate('footer');
?>