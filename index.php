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
                    <a class="selec" href="/">Inicio</a>
                    <a href="tienda.php">Tiendita</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
        </div>

        <div class="contenedor-hero">
            <div class="slider">
                <div class="slides">

                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
    
                    <div class="slide first">
                        <img id="slide1" src="build/img/oruga3.webp" alt="imagen hero">
                    </div>
                    <div class="slide">
                        <img id="slide2" src="build/img/Nenuco_de_apego1.webp" alt="imagen hero">
                    </div>
                    <div class="slide">
                        <img id="slide3" src="build/img/Pesebre_3_piezas1.webp" alt="imagen hero">
                    </div>
    
                    <div class="navegation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!-- <div class="fondo-hero"></div> -->
    
                </div> <!--end slides-->
                <div class="navegation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div> <!--end slider-->
        </div>
        
    </header>

    <!--INFO ENVIO-->

    <main class="contenedor-envio">
        <h1>Peluches de lana hechos a mano</h1>
        <div class="envio">
            <div class="svg-camion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="150" height="150" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                    <path d="M3 9l4 0" />
                </svg>
            </div>

            <p>Envíos solo a región Metropolitana de Chile</p>

            <div class="imagen-region">
                <picture>
                    <source srcset="build/img/region_m.webp" type="image/webp">
                    <source srcset="build/img/region_m.png" type="image/png">
                    <img src="build/img/region_m.png" alt="region metropolitana">
                </picture>
            </div>
        </div>
    </main>

    <!--TIENDA-->

    <section class="tienda-peluches">
        <h2>Nuestros Peluches</h2>
        <div class="contenido-tienda">
            <div class="tienda">
                <div class="producto">
                    <a href="osito_tuto.php">
                        <picture>
                            <source srcset="build/img/Osito_Tuto1.webp" type="image/webp">
                            <source srcset="build/img/Osito_Tuto1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Osito_Tuto1.jpg" alt="osito tuto">
                        </picture>
                        <p class="nombre">Osito Tuto</p>
                        <p class="precio">$10.500</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="rinoceronte_peluche.php">
                        <picture>
                            <source srcset="build/img/Rinoceronte_peluche1.webp" type="image/webp">
                            <source srcset="build/img/Rinoceronte_peluche1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Rinoceronte_peluche1.jpg" alt="Rinoceronte peluche">
                        </picture>
                        <p class="nombre">Rinoceronte peluche</p>
                        <p class="precio">$8.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="oruga.php">
                        <picture>
                            <source srcset="build/img/oruga1.webp" type="image/webp">
                            <source srcset="build/img/oruga1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/oruga1.jpg" alt="oruga">
                        </picture>
                        <p class="nombre">Oruga</p>
                        <p class="precio">$8.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="unicornio.php">
                        <picture>
                            <source srcset="build/img/unicornio1.webp" type="image/webp">
                            <source srcset="build/img/unicornio1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/unicornio1.jpg" alt="unicornio">
                        </picture>
                        <p class="nombre">Unicornio</p>
                        <p class="precio">$10.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="jirafa.php">
                        <picture>
                            <source srcset="build/img/jirafa1.webp" type="image/webp">
                            <source srcset="build/img/jirafa1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/jirafa1.jpg" alt="jirafa">
                        </picture>
                        <p class="nombre">Jirafa</p>
                        <p class="precio">$12.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="pesebre_3_piezas.php">
                        <picture>
                            <source srcset="build/img/Pesebre_3_piezas1.webp" type="image/webp">
                            <source srcset="build/img/Pesebre_3_piezas1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Pesebre_3_piezas1.jpg" alt="Pesebre 3 piezas">
                        </picture>
                        <p class="nombre">Pesebre 3 piezas</p>
                        <p class="precio">$24.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="pesebre_4_piezas.php">
                        <picture>
                            <source srcset="build/img/Pesebre_4_piezas1.webp" type="image/webp">
                            <source srcset="build/img/Pesebre_4_piezas1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Pesebre_4_piezas1.jpg" alt="Pesebre 4 piezas">
                        </picture>
                        <p class="nombre">Pesebre 4 piezas</p>
                        <p class="precio">$30.000</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="adornos_navidenos_pack.php">
                        <picture>
                            <source srcset="build/img/Adornos_navideños_pack1.webp" type="image/webp">
                            <source srcset="build/img/Adornos_navideños_pack1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Adornos_navideños_pack1.jpg" alt="Adornos navideños pack">
                        </picture>
                        <p class="nombre">Adornos navideños pack</p>
                        <p class="precio">$5.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="nenuco_de_apego.php">
                        <picture>
                            <source srcset="build/img/Nenuco_de_apego1.webp" type="image/webp">
                            <source srcset="build/img/Nenuco_de_apego1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Nenuco_de_apego1.jpg" alt="Nenuco de apego">
                        </picture>
                        <p class="nombre">Nenuco de apego</p>
                        <p class="precio">$9.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="bolso_trapillo.php">
                        <picture>
                            <source srcset="build/img/Bolso_Trapillo1.webp" type="image/webp">
                            <source srcset="build/img/Bolso_Trapillo1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/Bolso_Trapillo1.jpg" alt="Bolso Trapillo">
                        </picture>
                        <p class="nombre">Bolso Trapillo</p>
                        <p class="precio">$21.990</p>
                    </a>
                </div>
                <div class="producto">
                    <a href="llavero_einstein.php">
                        <picture>
                            <source srcset="build/img/llavero_einstein1.webp" type="image/webp">
                            <source srcset="build/img/llavero_einstein1.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/llavero_einstein1.jpg" alt="llavero einstein">
                        </picture>
                        <p class="nombre">llavero Einstein</p>
                        <p class="precio">$5.990</p>
                    </a>
                </div>
            </div> <!-- cierre tienda -->

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
        </div>
    </section>

<?php
    include 'include/templates/footer.php'
?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>