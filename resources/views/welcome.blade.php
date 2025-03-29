<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alianza Lima</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --alianza-blue: #0a3b82;
            --alianza-white: #ffffff;
            --text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        
        body {
            background-color: var(--alianza-blue);
            color: var(--alianza-white);
            overflow-x: hidden;
        }
        
        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background-color: var(--alianza-blue);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            height: 80px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin: 0 15px;
        }
        
        nav ul li a {
            color: var(--alianza-white);
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: all 0.3s ease;
            padding: 8px 15px;
            border-radius: 5px;
        }
        
        nav ul li a:hover {
            background-color: var(--alianza-white);
            color: var(--alianza-blue);
            transform: translateY(-3px);
        }
        
        .hero-section {
            position: relative;
            height: 80vh;
            overflow: hidden;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('club-alianza-lima-flag-seamless-looping-background-looped-bump-texture-cloth-waving-slow-motion-3d-rendering-free-video.jpg');
            background-size: cover;
            background-position: center;
            animation: zoomEffect 20s infinite alternate;
            filter: brightness(0.7);
        }
        
        @keyframes zoomEffect {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            padding: 20px;
        }
        
        .main-title {
            font-size: 5rem;
            text-transform: uppercase;
            margin-bottom: 30px;
            text-shadow: var(--text-shadow);
            letter-spacing: 5px;
            animation: titleAnimation 1.5s ease-out;
        }
        
        @keyframes titleAnimation {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .main-title span {
            display: inline-block;
            animation: letterWave 2s infinite;
            animation-delay: calc(0.1s * var(--i));
        }
        
        @keyframes letterWave {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .club-description {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 40px;
            line-height: 1.6;
            text-shadow: var(--text-shadow);
            animation: fadeIn 2s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .cta-button {
            background-color: var(--alianza-white);
            color: var(--alianza-blue);
            font-size: 1.2rem;
            font-weight: bold;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
            animation: float 3s infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .cta-button:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .content-section {
            padding: 80px 20px;
            background-color: var(--alianza-white);
            color: var(--alianza-blue);
        }
        
        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background-color: var(--alianza-blue);
            border-radius: 10px;
        }
        
        .history-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .history-text {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }
        
        .history-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        
        .history-image {
            flex: 1;
            min-width: 300px;
            height: 400px;
            background-color: var(--alianza-blue);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateY(10deg);
            transition: transform 0.5s ease;
        }
        
        .history-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        .history-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .history-image:hover img {
            transform: scale(1.1);
        }
        
        .gallery-section {
            padding: 80px 20px;
            background-color: var(--alianza-blue);
            color: var(--alianza-white);
        }
        
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .gallery-item {
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay h3 {
            margin-bottom: 10px;
        }
        
        footer {
            background-color: #041e44;
            color: var(--alianza-white);
            padding: 40px 20px;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .footer-logo {
            flex: 1;
            min-width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .footer-logo img {
            height: 100px;
            margin-bottom: 20px;
        }
        
        .footer-links {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
        }
        
        .footer-links h3 {
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .footer-links h3::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--alianza-white);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links ul li {
            margin-bottom: 10px;
        }
        
        .footer-links ul li a {
            color: var(--alianza-white);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links ul li a:hover {
            color: #ccc;
            padding-left: 5px;
        }
        
        .footer-social {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--alianza-white);
            color: var(--alianza-blue);
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .copyright p {
            font-size: 16px;
            color: #ccc;
        }
        
        .credits {
            margin-top: 10px;
            font-size: 14px;
            color: #aaa;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 3rem;
            }
            
            .club-description {
                font-size: 1.2rem;
            }
            
            nav {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
        }
        
        /* Mobile menu */
        .mobile-menu-toggle {
            display: none;
            color: var(--alianza-white);
            font-size: 24px;
            cursor: pointer;
        }
        
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background-color: var(--alianza-blue);
            z-index: 200;
            padding: 50px 20px;
            transition: right 0.3s ease;
        }
        
        .mobile-menu.active {
            right: 0;
        }
        
        .mobile-menu ul {
            list-style: none;
        }
        
        .mobile-menu ul li {
            margin-bottom: 20px;
        }
        
        .mobile-menu ul li a {
            color: var(--alianza-white);
            text-decoration: none;
            font-size: 20px;
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .close-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            color: var(--alianza-white);
            font-size: 30px;
            cursor: pointer;
        }
        
        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }
        
        .animate-on-scroll.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <?php
    // Datos dinámicos (podrían venir de una base de datos)
    $clubName = "Alianza Lima";
    $fundationYear = 1901;
    $current_year = date("Y");
    $years = $current_year - $fundationYear;
    
    // Historia del club
    $clubHistory = "Alianza Lima es uno de los clubes más antiguos y tradicionales del Perú, fundado el 15 de febrero de 1901. Originalmente llamado Sport Alianza, el club representaba a los trabajadores del barrio de La Victoria en Lima. A lo largo de sus más de {$years} años de historia, Alianza Lima se ha consolidado como uno de los equipos más populares del país, obteniendo numerosos títulos nacionales y siendo conocido por su distintivo estilo de juego.";
    
    // Jugadores históricos
    $historicPlayers = [
        "Teófilo Cubillas" => "Considerado el mejor futbolista peruano de todos los tiempos, 'El Nene' dejó un legado imborrable en Alianza Lima.",
        "César Cueto" => "Conocido como 'El Poeta de la Zurda', deslumbró con su técnica y creatividad en el mediocampo.",
        "Jefferson Farfán" => "La 'Foquita' comenzó su carrera en Alianza Lima antes de triunfar en Europa, regresando para cerrar su ciclo en el club de sus amores."
    ];
    
    // Títulos nacionales (ejemplo)
    $nationalTitles = 24; // Actualizar según corresponda
    ?>

    <div class="container">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Escudo_del_Club_Alianza_Lima.svg/800px-Escudo_del_Club_Alianza_Lima.svg.png" alt="Logo Alianza Lima" class="logo">
            
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#historia">Historia</a></li>
                    <li><a href="#galeria">Galería</a></li>
                    <li><a href="#titulos">Títulos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
            
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </header>
        
        <div class="mobile-menu">
            <div class="close-menu">×</div>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#historia">Historia</a></li>
                <li><a href="#galeria">Galería</a></li>
                <li><a href="#titulos">Títulos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        
        <section id="inicio" class="hero-section">
            <div class="hero-background"></div>
            <div class="hero-content">
                <h1 class="main-title">
                    <?php
                    $title = "Viva Alianza Lima";
                    $letters = str_split($title);
                    foreach ($letters as $index => $letter) {
                        echo "<span style='--i: {$index}'>{$letter}</span>";
                    }
                    ?>
                </h1>
                <p class="club-description">
                    El equipo más tradicional del fútbol peruano, con más de <?= $years ?> años de historia, gloria y pasión. ¡Arriba Alianza!
                </p>
                <button class="cta-button">Conoce más</button>
            </div>
        </section>
        
        <section id="historia" class="content-section">
            <h2 class="section-title animate-on-scroll">Historia</h2>
            <div class="history-content">
                <div class="history-text animate-on-scroll">
                    <p><?= $clubHistory ?></p>
                    <p>El club lleva los colores azul y blanco, que se han convertido en símbolos de la institución y son reconocidos en todo el país. La base de seguidores de Alianza Lima es conocida como "La Hinchada de Alianza" o "El Pueblo Aliancista", considerada una de las más fieles y numerosas del Perú.</p>
                    <p>A lo largo de sus <?= $years ?> años de existencia, el club ha pasado por momentos de gran gloria y también por tragedias que han forjado su carácter y aumentado la pasión de sus seguidores. Entre ellas, el accidente aéreo de 1987, que marcó a toda una generación de peruanos.</p>
                </div>
                <div class="history-image animate-on-scroll">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Estadio_Alejandro_Villanueva.jpg/800px-Estadio_Alejandro_Villanueva.jpg" alt="Estadio Alejandro Villanueva">
                </div>
            </div>
        </section>
        
        <section id="galeria" class="gallery-section">
            <h2 class="section-title animate-on-scroll">Galería</h2>
            <div class="gallery-container">
                <?php
                // Array simulado de imágenes (en un caso real vendrían de una base de datos)
                $gallery_images = [
                    ["url" => "https://www.rcrperu.com/wp-content/uploads/2022/02/YFUYIYI.jpg", "title" => "Equipo Histórico", "description" => "Alineación histórica de Alianza Lima"],
                    ["url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Comando_Sur_%28Alianza_Lima%29.jpg/800px-Comando_Sur_%28Alianza_Lima%29.jpg", "title" => "Hinchada", "description" => "La fiel hinchada aliancista"],
                    ["url" => "https://1.bp.blogspot.com/-BDxioaAhJtY/UFljuviLFwI/AAAAAAAAGlw/vi4peRIwNpA/s1600/EscudoAL.gif", "title" => "Escudo", "description" => "El emblemático escudo del club"],
                    ["url" => "https://th.bing.com/th/id/R.86400887d8a2c9d38bf8b4bbd6a8764f?rik=oLfrf1sEjP2qVw&pid=ImgRaw&r=0", "title" => "Estadio", "description" => "El estadio Alejandro Villanueva, 'Matute'"]
                ];
                
                foreach ($gallery_images as $index => $image) {
                    echo "
                    <div class='gallery-item animate-on-scroll'>
                        <img src='{$image['url']}' alt='{$image['title']}'>
                        <div class='gallery-overlay'>
                            <h3>{$image['title']}</h3>
                            <p>{$image['description']}</p>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </section>
        
        <section id="titulos" class="content-section">
            <h2 class="section-title animate-on-scroll">Títulos Nacionales</h2>
            <div class="history-content">
                <div class="history-text animate-on-scroll">
                    <p>A lo largo de su centenaria historia, Alianza Lima ha obtenido <?= $nationalTitles ?> títulos nacionales, convirtiéndose en uno de los clubes más laureados del fútbol peruano.</p>
                    <p>Su estilo de juego característico, conocido como el "juego bonito" aliancista, ha dejado huella en el fútbol peruano y ha sido parte fundamental de su tradición futbolística.</p>
                    <h3>Jugadores históricos:</h3>
                    <ul>
                        <?php
                        foreach ($historicPlayers as $name => $description) {
                            echo "<li><strong>{$name}</strong>: {$description}</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="history-image animate-on-scroll">
                    <img src="https://www.rcrperu.com/wp-content/uploads/2022/02/YFUYIYI.jpg" alt="Equipo histórico de Alianza Lima">
                </div>
            </div>
        </section>
        
        <footer id="contacto">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="https://th.bing.com/th/id/OIP.oBHlGA_aTfr4YDtPR-wAdAFiFi?rs=1&pid=ImgDetMain">
                    <p>El equipo del pueblo</p>
                </div>
                
                <div class="footer-links">
                    <h3>Enlaces</h3>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#historia">Historia</a></li>
                        <li><a href="#galeria">Galería</a></li>
                        <li><a href="#titulos">Títulos</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-social">
                    <h3>Síguenos</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">FB</a>
                        <a href="#" class="social-icon">TW</a>
                        <a href="#" class="social-icon">IG</a>
                        <a href="#" class="social-icon">YT</a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>© <?= date("Y") ?> Alianza Lima. Todos los derechos reservados.</p>
                <div class="credits">
                    <p>Desarrollado por: David Maldonado Pizarro</p>
                </div>
            </div>
        </footer>
    </div>
    
    <script>
        // Función para manejar el menú móvil
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const closeMenu = document.querySelector('.close-menu');
            
            if (mobileMenuToggle && mobileMenu && closeMenu) {
                mobileMenuToggle.addEventListener('click', function() {
                    mobileMenu.classList.add('active');
                });
                
                closeMenu.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                });
            }
            
            // Animación al hacer scroll
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            
            function checkIfInView() {
                animateElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition.top < windowHeight * 0.9) {
                        element.classList.add('active');
                    }
                });
            }
            
            // Ejecutar al cargar la página
            checkIfInView();
            
            // Ejecutar al hacer scroll
            window.addEventListener('scroll', checkIfInView);
            
            // Animación del botón CTA
            const ctaButton = document.querySelector('.cta-button');
            if (ctaButton) {
                ctaButton.addEventListener('click', function() {
                    const historiaSection = document.getElementById('historia');
                    if (historiaSection) {
                        historiaSection.scrollIntoView({behavior: 'smooth'});
                    }
                });
            }
            
            // Enlaces de navegación suaves
            const navLinks = document.querySelectorAll('nav a, .mobile-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        // Cerrar el menú móvil si está abierto
                        mobileMenu.classList.remove('active');
                        
                        // Scroll suave a la sección
                        targetSection.scrollIntoView({behavior: 'smooth'});
                    }
                });
            });
            
            // Efecto parallax en el fondo del hero
            const heroBackground = document.querySelector('.hero-background');
            if (heroBackground) {
                window.addEventListener('scroll', function() {
                    const scrollPosition = window.pageYOffset;
                    heroBackground.style.transform = `translateY(${scrollPosition * 0.4}px)`;
                });
            }
            
            // Efecto de contador para los títulos
            let hasAnimated = false;
            
            function animateCounter() {
                const titulosSection = document.getElementById('titulos');
                const titulosPosition = titulosSection.getBoundingClientRect();
                
                if (titulosPosition.top < window.innerHeight * 0.8 && !hasAnimated) {
                    hasAnimated = true;
                    
                    const titlesText = document.querySelector('#titulos .history-text p:first-child');
                    if (titlesText) {
                        const nationalTitles = <?= $nationalTitles ?>;
                        let currentCount = 0;
                        
                        const counterInterval = setInterval(() => {
                            currentCount++;
                            titlesText.innerHTML = `A lo largo de su centenaria historia, Alianza Lima ha obtenido ${currentCount} títulos nacionales, convirtiéndose en uno de los clubes más laureados del fútbol peruano.`;
                            
                            if (currentCount >= nationalTitles) {
                                clearInterval(counterInterval);
                            }
                        }, 100);
                    }
                }
            }
            
            window.addEventListener('scroll', animateCounter);
            
            // Efecto de aparición gradual para la galería
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>