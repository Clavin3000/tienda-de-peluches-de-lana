<?php
    include 'include/templates/head.php';
?>

<body>

    <!--HEADER-->

    <header class="header">
        <div class="header-logo">
            <a href="/">
                <picture>
                    <source srcset="build/img/logo_grande.webp" type="image/webp">
                    <source srcset="build/img/logo_grande.jpg" type="image/jpeg">
                    <img src="build/img/logo_grande.jpg" alt="logo">
                </picture>
            </a>
        </div>
        <div class="contenedor-navegacion">
            <div class="navegacion">
                <nav>
                    <a href="/">Inicio</a>
                    <a href="tienda.php">Tiendita</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    <!--PRODUCTO-->

    <main class="contenido-tienda">
        <div class="vista-producto">
            <div class="imagen">
                <picture class="imagen-producto">
                </picture>

                <div class="galeria">
                    <ul class="galeria-imagenes"></ul>
                </div>
            </div>
            <div class="descripcion">
                <div>
                    <h1>Osito Tuto</h1>
                    <h2>Descripción:</h2>
                    <p>Osito tuto, viene con mantita de apego y gorro removible. mide aprox 20 cms. Colores a pedido.</p>
                    <h2>Precio:</h2>
                    <p>$10.500</p>
                </div>
                <div class="contenedor-boton">
                    <a class="a" href="contacto.php">
                        <input class="boton" type="button" value="Contactar para comprar">
                    </a>
                </div>
            </div>
        </div>

        <div class="contenido-otros">
            <div class="otros">
                <div class="populares">
                    <h2>Populares</h2>
                    <div class="contenedor-imagen">
                        <a href="#">
                            <picture>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="nuevos">
                    <h2>Nuevos</h2>
                    <div class="contenedor-imagen">
                        <a href="#">
                            <picture>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    include 'include/templates/footer.php'
?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>