<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!--    Main  -->
    <main class="contenedor seccion contenido-centrado">
        <h1 class="">Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>

        <div class="resumen-propiedad">
            <!--    Precio -->
            <p class="precio">$3,000,000</p>

            <!--    Caracteristicas -->
            <ul class="iconos-caracteristicas">
                <!--    Baños -->
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>

                <!--    Estacionamientos -->
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>

                <!--    Dormitorios -->
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                    <p>3</p>
                </li>
            </ul>

            <!--    Descripcion     -->
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>