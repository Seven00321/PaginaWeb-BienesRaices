<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!--    Main  -->
    <main class="contenedor seccion">
        <h1 class="">Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">

                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id.
                
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dicta minus eius,
                    mollitia aliquid suscipit voluptatibus modi, dignissimos at soluta libero harum labore 
                    iure perferendis! Vitae neque iure id.
                </p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1 class="">Más Sobre Nosotros</h1>

        <!--    Iconos  -->
        <div class="iconos-nosotros">
            <!--    Iconos 1  -->
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam libero vel cupiditate, 
                    officiis beatae error, odio dolor repellendus quia veritatis excepturi inventore,
                    praesentium voluptas modi! Quaerat quod aliquid possimus? Doloribus?
                </p>
            </div>

            <!--    Iconos 2  -->
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam libero vel cupiditate, 
                    officiis beatae error, odio dolor repellendus quia veritatis excepturi inventore,
                    praesentium voluptas modi! Quaerat quod aliquid possimus? Doloribus?
                </p>
            </div>
            <!--    Iconos 3  -->
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam libero vel cupiditate, 
                    officiis beatae error, odio dolor repellendus quia veritatis excepturi inventore,
                    praesentium voluptas modi! Quaerat quod aliquid possimus? Doloribus?
                </p>
            </div>

        </div>
    </section>

<?php
    incluirTemplate('footer');
?>