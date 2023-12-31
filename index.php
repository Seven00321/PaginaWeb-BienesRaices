<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <!--    Main - Más Sobre Nosotros -->
    <main class="contenedor seccion">
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
    </main>

    <!--    Seccion - Casas y Depas en Venta -->
    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        
        <div class="contenedor-anuncios">
            <!--    ANUNCIO 1 - Casa -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                    <!--    Anuncio    -->
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!-- Conenido anuncio-->
            </div><!-- Anuncio 1-->

            <!--    ANUNCIO 2 - Casa -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                    <!--    Anuncio    -->
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!-- Conenido anuncio-->
            </div><!-- Anuncio 2-->

            <!--    ANUNCIO 3 - Casa -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                    <!--    Anuncio    -->
                    <a href="anuncios.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div> <!-- Conenido anuncio-->
            </div><!-- Anuncio 3-->

        </div><!-- Contenedor Anuncio-->

        <!-- Ver Todas  -->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>


    <!--    Seccion - Contactanos -->
    <section class="imagen-contacto">
        <h2>Encuentra la Casa de tus Sueños</h2>

        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>

        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>

    <!--    Seccion - BLOG -->
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <!--    BLOG 1 -->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpge">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>  

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>

                        <p class="informacion-meta">Escrito el: <span>19/11/2023</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores 
                            materiales y ahorrando dinero.
                        </p>
                    </a>
                </div>
            </article>

            <!--    BLOG 2 -->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpge">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>  

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>

                        <p class="informacion-meta">Escrito el: <span>19/11/2023</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio en tu hogar con estas guía, aprende a combinar muebles y 
                            colores para darle vida a tu espacio.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <!--    Seccion - Testimoniales -->
        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me 
                    ofrecieron cumple con todas mis espectativas.
                </blockquote>

                <p>- Richard Pereira</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>