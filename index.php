<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <header class="header" id="inicio">
        <img class="hamburguer" src="img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Servicio</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Prueba tecnica "Exito"</h1>
            <p class="copy">Intentando pasar prueba</p>
        </div>
        
    </header>
    <main>
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="img/checklist.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Diseño web</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Productos</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Ventas</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    
                    <div class="service">
                        <h3 class="n-service"><span class="number">4</span>Reventa</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    
                    <div class="service">
                        <h3 class="n-service"><span class="number">5</span>Compra masiva</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab autem enim illum dolorum nisi. Aspernatur.</p>
                    
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="img/uno.jpg" class="img-galeria" alt="Hola">
                    <img src="img/dos.jpg" class="img-galeria" alt="">
                    <img src="img/tres.jpg" class="img-galeria" alt="">
                    <img src="img/cuatro.jpg" class="img-galeria" alt="">
                    <img src="img/cinco.jpg" class="img-galeria" alt="">
                    <img src="img/seis.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/pie_chart.svg" alt="">
                    <h3 class="n-expert">Analytics</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/search_engine.svg" alt="">
                    <h3 class="n-expert">SEO</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/security.svg" alt="">
                    <h3 class="n-expert">Security</h3>
                </div>
            </section>
        </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Jonathan Gomez</h2>
                    <p>zolaris21@hotmail.com</p>
                </div>
                <div class="social-media">
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a href="./" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>