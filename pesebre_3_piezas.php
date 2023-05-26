<?php
    include 'include/templates/head.php';
?>

<body>

    <!--HEADER-->

    <header class="header">
        <div class="header-logo">
            <a href="/">
                <picture>
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
                    <source srcsrt="build/img/Osito Tuto1.webp" type="image/webp">
                    <source srcsrt="build/img/Osito Tuto1.jpg" type="image/jpg">
                    <img src="build/img/Osito Tuto1.jpg" alt="osito tuto">
                </picture>

                <div class="galeria">
                    <ul class="galeria-imagenes"></ul>
                </div>
            </div>
            <div class="descripcion">
                <div>
                    <h1>Pesebre 3 piezas</h1>
                    <h2>Descripción:</h2>
                    <p>Pesebre 3 piezas, incluye San José, María y niño Jesus en Brazos, en caja de carton con paja.</p>
                    <h2>Precio:</h2>
                    <p>$24.990</p>
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