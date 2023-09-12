<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curcuma</title>
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
                <div class="texto">
                    <h3 class="titulo">Sobre Nosotros</h3>

                    <p><span class="bold">Somos una familia</span> que comparte una pasión recién descubierta: los condimentos auténticos. Nos hemos embarcado en un emocionante
                        viaje culinario para ofrecerte los sabores más deliciosos y genuinos.</p>

                    <p><span class="bold">Nuestro compromiso es brindarte condimentos de alta calidad</span> que transformarán tus comidas en experiencias extraordinarias.
                        Únete a nosotros en este emocionante viaje y descubre el sabor que estamos compartiendo con el mundo.
                    </p>
                </div>
            </div>
        </section>
        <section class="trabajos">
            <div class="contenedor">
                <h3 class="titulo">Listas de Productos</h3>
                <div class="contenedor-trabajos">



                    <?php  foreach ($productos as $key => $p) : ?>

                        <div class="trabajo">
                            <div class="thumb">
                                <img src="<?= base_url('public/img/') . $p['imagen']; ?>" alt="">
                            </div>
                            <div class="descripcion">
                                <p class="nombre"><?=  $p['nombre']  ?></p>
                                <p class="categoria"><?=  $p['descripcion'] ?></p>
                                <a href=<?= base_url('producto/show/'); ?><?= $p['id'] ?> class="boton" >Ver</a>
                     
                            </div>
                        </div>

                    <?php  endforeach ?>

                </div>
            </div>
        </section>
    </section>

    <footer>
    <div class="constructor">
        <h5>Programador Web Avanzado Modulo 1</h5>
    <p>Copyright &copy; <?php echo date('Y'); ?> | Sebastian Laguilon</p>
  </div>
</footer>
</body>

</html>