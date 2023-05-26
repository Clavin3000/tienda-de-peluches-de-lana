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
                    <a class="selec" href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor-nosotros">
        <h1>Sobre Nosotros</h1>

        <div class="fotos">
            <div>
                <img loading="lazy" src="build/img/Monica.webp" alt="Monica">
            </div>
            <div>
                <img loading="lazy" src="build/img/logo-transparente.webp" alt="logo">
            </div>
            <div>
                <img loading="lazy" src="build/img/Madre.webp" alt="Madre">
            </div>
        </div>

        <div class="descripcion">
            <h2>Como nace Hecho a Mano con Amor</h2>

            <div class="texto">
                <p>
                    Hola, Mi nombre es Mónica, soy la que aparece en la foto de campo, tengo 30 años y desde niña que amo las manualidades, pintar, tejer, todo lo que tenga que ver con "crear con mis manos". Hace ya un tiempo que decidí compartir lo que he aprendido con mas personas que tienen los mismos intereses, aprender de ellas e innovar. 
                </p>
                <p>
                    Soy feliz porque amo lo que hago, ahí esta la clave.
                </p>
                <p>
                    La de la playa es mi Madre, Orietta, tuve la suerte de tenerla a mi lado toda la infancia porque se dedicaba a la casa y a cuidarnos a mi hermano con discapacidad intelectual y a mi, ella  me ha enseñado todo lo que sé o la mayoría, tiene una paciencia infinita y es minuciosa en los detalles en extremo. maneja el crochet y los palillos como los Dioses. tengo chalecos tejidos por ella que tienen  mas de 20 años .
                </p>
                <p>
                    Juntas iniciamos este emprendimiento donde nuestras manos expresan emociones, arte, dedicación y amor, para que tu puedas regalar algo original, o aprender con nosotros y hacer que esta familia crezca cada día mas... así nace Hecho a Mano con Amor.
                </p>
            </div>
        </div>
    </main>

<?php
    include 'include/templates/footer.php'
?>

</body>
</html>