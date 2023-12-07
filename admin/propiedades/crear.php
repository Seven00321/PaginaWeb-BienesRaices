<?php
    // Base de datos
    require '../../includes/config/database.php';

    $db = conetarDB();

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <!--    Main  -->
    <main class="contenedor seccion">
        <h1 class="">Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>


        <!--    Formulario  -->
        <form class="formulario" method="GET" action="/admin/propiedades/crear.php">
            <!--    1er Fieldset  -->
            <fieldset>
                <legend>Informacion General</legend>

                <!-- Titulo -->
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                
                <!-- Precio -->
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <!-- Imagen -->
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="imagen/jpeg, image/png">

                <!-- Descripcion -->
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <!--    2do Fieldset  -->
            <fieldset>
                <legend>Informacion de la Propiedad</legend>

                <!-- Habitaciones -->
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <!-- Baños -->
                <label for="baños">Baños:</label>
                <input type="number" id="baños" placeholder="Ej: 2" min="1" max="9">
                
                <!-- Estacionamientos -->
                <label for="estacionamientos">Estacionamientos:</label>
                <input type="number" id="estacionamientos" placeholder="Ej: 1" min="1" max="9">
                
            </fieldset>

            <!--    3er Fieldset  -->
            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="1">Richard Mikhael</option>
                    <option value="2">Karen</option>
                </select>         
            </fieldset>

            <!--    Boton de Envio  -->
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>


<?php
    incluirTemplate('footer');
?>