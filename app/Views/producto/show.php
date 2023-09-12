<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $productos['nombre'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css/estilos.css'); ?>">
</head>

<body>
    <header>
        <div class="contenedor">
            <nav class="menu">
                <a href="#">Acerca de</a>
                <a href="#">Productos</a>
                <a href="#">Contacto</a>
            </nav>

            <div class="contenedor-texto">
                <div class="texto">
                    <h1 class="nombre">Sabores que Transforman</h1>
                    <h2 class="profecion"></h2>
                </div>
            </div>
        </div>
    </header>

    <section class="main">
        <section class="acerca-de">
            <div class="contenedor">
                <div class="foto">
                    <img src="<?php echo base_url('public/img/logo.png'); ?>" width="115" alt="Sebastian Laguilon">
                </div>

            </div>
        </section>
        <section class="trabajos">
            <div class="contenedor">
                <h3 class="titulo">Detalle Del Producto <?= $productos['nombre'] ?></h3>
                <div class="contenedor-trabajos">





                    <div class="contenedor">
                        <div class="col-12 col-sm-6 col-lg-3 mb-4 post">

                            <dii class="col-12">
                                <div class="card background-image">
                                    <img class="card-img-top big-image my-custom-ver" src="<?php echo base_url('/public/img/'); ?><?= $productos['imagen'] ?>" alt="">
                                    <div class="card-body1 text-center">
                                        <h3 class="card-title">Nombre: <?= $productos['nombre'] ?></h3>
                                        <h3 class="card-title">Descripcion: <?= $productos['descripcion'] ?></span>
                                            <h3 class="card-title">Precio: $<?= $productos['precio'] ?></span>
                                                <h3 class="card-title">Stock: <?= $productos['stock'] ?></span>
                                                    <p class="card-text"></p>

                                    </div>

                                </div>
                            </dii>
                        </div>
                    </div>
                </div>
                <a href=<?= base_url() ?> class="link" >Volver</a>

                    <footer>
                        <div class="constructor">
                            <h5>Programador Web Avanzado Modulo 1</h5>
                            <p>Copyright &copy; <?php echo date('Y'); ?> | Sebastian Laguilon</p>
                        </div>
                    </footer>

</body>

</html>