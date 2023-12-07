<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <!--    Header  -->
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor <?php echo $inicio ? 'contenido-header' : ''; ?>">
            <!--    Barra   -->
            <div class="barra">
                <!--    Logo  -->
                <a href="index.php">
                    <img src="/build/img/logo.svg" class="logo-center" alt="Logotipo Bienes Raíces">
                </a>
                
                <!--    Logo menu -->
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu resposive">
                </div>

                <!--    Navegacion  -->
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Boton Oscuro">

                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                
                
            </div>

            
            <?php if($inicio) {?>
                <h1>Venta de Casas y Departamentos Exclusivos De Lujo</h1>
            <?php } ?>
        </div>
    </header>