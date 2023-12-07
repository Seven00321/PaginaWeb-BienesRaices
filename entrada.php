<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!--    Main  -->
    <main class="contenedor seccion contenido-centrado">
        <h1 class="">Guia para la decoración de tu Hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>19/11/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
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