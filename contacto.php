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
                    <a class="selec" href="contacto.php">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor-contacto">
        <h1>Queremos conocerte, contactanos</h1>

        <div class="contacto">
            <div class="informacion-contacto">
                <h2>Mónica Vasquez</h2>
                <div class="contacto-whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                    <p>+56942696174</p>
                </div>
                <div class="contacto-mail">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                    </svg>
                    <p>hechoamanoconamor17@gmail.com</p>
                </div>
                <div class="footer-redes_sociales">
                    <p>Nuestras redes sociales:</p>
                    <a href="https://www.facebook.com/crochetyamigurumisantiago/" target="_blank">
                        <picture>
                            <source srcset="build/img/logo_facebook.webp" type="image/webp">
                            <source srcset="build/img/logo_facebook.jpg"  type="image/jpeg">
                            <img src="build/img/logo_facebook.jpg" alt="logo facebook">
                        </picture>
                    </a>
                    <a href="https://www.instagram.com/crochetyamigurumi/" target="_blank">
                        <picture>
                            <source srcset="build/img/logo_instagram.webp" type="image/webp">
                            <source srcset="build/img/logo_instagram.jpg"  type="image/jpeg">
                            <img src="build/img/logo_instagram.jpg" alt="logo instagram">
                        </picture>
                    </a>
                </div>
            </div>

            <form class="formulario" id="formulario" name="contacto" method="POST" data-netlify="true" onSubmit="submit" data-netlify-honeypot="bot-field" action="/contacto-enviado.php">
                <input class="d-none" name="bot-field">
                <div class="campo">
                    <label class="campo-label" for="nombre">Nombre:</label>
                    <input class="campo-field" name="Nombre" id="nombre" type="text" placeholder="Ej: Carlos Guzman" required>
                    <div class="error"></div>
                </div>
                <div class="campo">
                    <label class="campo-label" for="telefono">Teléfono:</label>
                    <input class="campo-field" name="Telefono" id="telefono" type="tel" placeholder="Ej: +56912345678" pattern="[+]{1}[5]{1}[6]{1}[9]{1}[0-9]{8}" required>
                    <div class="error"></div>
                </div>
                <div class="campo">
                    <label class="campo-label" for="email">E-mail:</label>
                    <input class="campo-field" name="E-mail" id="email" type="email" placeholder="Ej: carlosguzman@gmail.com" pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$' required>
                    <div class="error"></div>
                </div>
                <div class="campo">
                    <label class="campo-label" for="tema">Tema:</label>
                    <input class="campo-field" name="Tema" id="tema" type="text" placeholder="Ej: Compra de peluches" required>
                    <div class="error"></div>
                </div>
                <div class="campo">
                    <label class="campo-label mensaje" for="mensaje">Mensaje:</label>
                    <textarea class="campo-field campo-mensaje" name="Mensaje" id="mensaje" rows="5" placeholder="Ej: Estoy interesado en comprar un Osito Tuto de color morado." required></textarea>
                    <div class="error"></div>
                </div>

                <div class="contenedor-boton">
                    <input class="boton-contacto" type="submit">
                </div>
            </form>
        </div>
    </main>

    <div class="politicas">
        <section class="devolucion">
            <h2>POLÍTICA DE DEVOLUCIÓN, REEMBOLSO Y STOCK</h2>
            <p>
                Si el producto llega con alguna mancha o falla en costuras puedes pedir el cambio del producto o reembolso dentro de 20 días desde efectuada la compra. Si no hay stock del producto se debe pedir con 2 semanas de anticipación.
            </p>
        </section>

        <section class="informacion-envio">
            <h2>INFORMACIÓN DEL ENVÍO</h2>
            <p>
                Despacho a convenir. Despacho a domicilio con costo adicional, segun la comuna.
            </p>
        </section>
    </div>

<?php
    include 'include/templates/footer.php'
?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>