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

    <main class="contenedor-contacto">
        <div class="enviado">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-fast" width="100" height="100" viewBox="0 0 24 24" stroke-width="1" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 7h3" />
                <path d="M3 11h2" />
                <path d="M9.02 8.801l-.6 6a2 2 0 0 0 1.99 2.199h7.98a2 2 0 0 0 1.99 -1.801l.6 -6a2 2 0 0 0 -1.99 -2.199h-7.98a2 2 0 0 0 -1.99 1.801z" />
                <path d="M9.8 7.5l2.982 3.28a3 3 0 0 0 4.238 .202l3.28 -2.982" />
            </svg>
            </svg>

            <h2>Su mensaje ha sido enviado con exito</h2>
        </div>
    </main>

<?php
    include 'include/templates/footer.php'
?>

</body>
</html>