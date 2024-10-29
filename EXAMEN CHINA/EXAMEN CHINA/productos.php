<?php
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="logo">
            <a href="papeleria.php"><img src="imagenes/Horizon Mobile Devices.png" alt="Horizon Mobile Devices"></a>
        </div>
        <nav>
            <ul>
                <li><a href="papeleria.php">Papeleria</a></li>
                <li><a href="productos.php">Catalago de Productos</a></li>
                <li><a href="vender.php">Vender</a></li>
                <li><a href="index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="horizon-mobile">
            <div class="horizon-mobile-inner">
                <h2></h2>
                <div class="video-container">
                    <video src="imagenes/12 Accesorios ESENCIALES para tu Hprizon Mobile!!.mp4" autoplay muted loop playsinline></video>
                </div>
                <p>Los accesorios de Horizon Mobile Devices están diseñados para complementar y mejorar tu experiencia con tus dispositivos favoritos.</p>
                <ul>
                    <li><strong>Fundas y Estuches:</strong> Protege tus dispositivos con una variedad de fundas y estuches elegantes y duraderos.</li>
                    <li><strong>Protectores de Pantalla:</strong> Mantén tu pantalla libre de arañazos y daños con nuestros protectores de pantalla de alta calidad.</li>
                    <li><strong>Cargadores:</strong> Desde cargadores rápidos hasta inalámbricos, mantén tus dispositivos siempre cargados y listos para usar.</li>
                    <li><strong>Cables:</strong> Conectividad garantizada con una amplia gama de cables de alta durabilidad y rendimiento.</li>
                    <li><strong>Teclados:</strong> Aumenta tu productividad con teclados inalámbricos y ergonómicos.</li>
                    <li><strong>Ratones:</strong> Ratones precisos y cómodos para mejorar tu experiencia de navegación y trabajo.</li>
                    <li><strong>Adaptadores:</strong> Soluciones de conectividad para todas tus necesidades de dispositivos y periféricos.</li>
                    <li><strong>AirTags:</strong> Localiza tus objetos personales con nuestros rastreadores compactos y eficientes.</li>
                    <li><strong>Correas para Horizon Watch:</strong> Personaliza tu Apple Watch con una variedad de correas de diferentes estilos y materiales.</li>
                    <li><strong>Altavoces y Auriculares:</strong> Disfruta de un sonido superior con nuestra gama de altavoces y auriculares de alta calidad.</li>
                </ul>
                <a href="#" class="learn-more-btn" onclick="openModal('modalGeneral')">Más información</a>
            </div>
            <img src="img/accesorios_image.png" alt="Accesorios" class="device-img">
        </section>
        
        <section id="productos">
            <div class="producto" id="producto1">
                <h2>Fundas y Estuches</h2>
                <img src="imagenes/funda.webp" alt="Fundas y Estuches">
                <p>Precio: $70</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalFundas')">Más información</a>
            </div>
            <div class="producto" id="producto2">
                <h2>Protectores de Pantalla</h2>
                <img src="imagenes/protectorpantalla.jpg" alt="Protectores de Pantalla">
                <p>Precio: $25</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalProtectores')">Más información</a>
            </div>
            <div class="producto" id="producto3">
                <h2>Cargadores</h2>
                <img src="imagenes/cargador.webp" alt="Cargadores">
                <p>Precio: $300</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalCargadores')">Más información</a>
            </div>
            <div class="producto" id="producto4">
                <h2>Cables</h2>
                <img src="imagenes/cable.jpg" alt="Cables">
                <p>Precio: $30</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalCables')">Más información</a>
            </div>
            <div class="producto" id="producto5">
                <h2>Teclados</h2>
                <img src="imagenes/teclado.png" alt="Teclados">
                <p>Precio: $100</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalTeclados')">Más información</a>
            </div>
            <div class="producto" id="producto6">
                <h2>Ratones</h2>
                <img src="imagenes/raton.jpg" alt="Ratones">
                <p>Precio: $500</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalRatones')">Más información</a>
            </div>
            <div class="producto" id="producto7">
                <h2>Adaptadores</h2>
                <img src="imagenes/adaptadorjh.webp" alt="Adaptadores">
                <p>Precio: $50</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalAdaptadores')">Más información</a>
            </div>
            <div class="producto" id="producto8">
                <h2>AirTags</h2>
                <img src="imagenes/airtag.jpg" alt="AirTags">
                <p>Precio: $70</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalAirTags')">Más información</a>
            </div>
            <div class="producto" id="producto9">
                <h2>Correas para Horizon Watch</h2>
                <img src="imagenes/correa2.webp" alt="Correas para Horizon Watch">
                <p>Precio: $50</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalCorreas')">Más información</a>
            </div>
            <div class="producto" id="producto10">
                <h2>Altavoces y Auriculares</h2>
                <img src="imagenes/homepod__eam53jjm772a_large.jpg" alt="Altavoces y Auriculares">
                <p>Precio: $499</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalAltavoces')">Más información</a>
            </div>
        </section>

        <!-- Modal General -->
        <div id="modalGeneral" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalGeneral')">&times;</span>
                <h2>Accesorios</h2>
                <p>Los accesorios de Horizon Mobile Devices incluyen una variedad de productos diseñados para mejorar tu experiencia con tus dispositivos favoritos. Ya sea que necesites proteger tu dispositivo, aumentar su funcionalidad o simplemente personalizarlo, tenemos lo que necesitas.</p>
            </div>
        </div>

        <!-- Modales Específicos -->
        <div id="modalFundas" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalFundas')">&times;</span>
                <h2>Fundas y Estuches</h2>
                <p>Nuestras fundas y estuches están diseñados para ofrecer la máxima protección y estilo a tus dispositivos. Hechos con materiales de alta calidad, garantizan durabilidad y resistencia a impactos.</p>
            </div>
        </div>
        <div id="modalProtectores" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalProtectores')">&times;</span>
                <h2>Protectores de Pantalla</h2>
                <p>Mantén tu pantalla en perfectas condiciones con nuestros protectores de pantalla de alta calidad. Protegen contra arañazos, polvo y caídas, asegurando una visibilidad clara y sin interrupciones.</p>
            </div>
        </div>
        <div id="modalCargadores" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalCargadores')">&times;</span>
                <h2>Cargadores</h2>
                <p>Nuestros cargadores están diseñados para ofrecer una carga rápida y eficiente. Disponibles en varias configuraciones, incluyendo cargadores inalámbricos y de carga rápida, siempre tendrás energía cuando la necesites.</p>
            </div>
        </div>
        <div id="modalCables" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalCables')">&times;</span>
                <h2>Cables</h2>
                <p>Nuestros cables de alta durabilidad garantizan una conectividad estable y rápida. Disponibles en diferentes longitudes y tipos, siempre tendrás el cable adecuado para cualquier situación.</p>
            </div>
        </div>
        <div id="modalTeclados" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalTeclados')">&times;</span>
                <h2>Teclados</h2>
                <p>Los teclados de Horizon Mobile Devices están diseñados para proporcionar comodidad y eficiencia. Con opciones inalámbricas y ergonómicas, mejorarás tu productividad y experiencia de uso.</p>
            </div>
        </div>
        <div id="modalRatones" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalRatones')">&times;</span>
                <h2>Ratones</h2>
                <p>Nuestros ratones ofrecen precisión y comodidad. Diseñados para uso prolongado, son ideales para el trabajo y el entretenimiento, garantizando una experiencia de usuario óptima.</p>
            </div>
        </div>
        <div id="modalAdaptadores" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalAdaptadores')">&times;</span>
                <h2>Adaptadores</h2>
                <p>Los adaptadores de Horizon Mobile Devices proporcionan soluciones de conectividad para todas tus necesidades. Compatibles con una amplia gama de dispositivos, aseguran una conexión rápida y estable.</p>
            </div>
        </div>
        <div id="modalAirTags" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalAirTags')">&times;</span>
                <h2>AirTags</h2>
                <p>Localiza tus objetos personales con nuestros AirTags compactos y eficientes. Con una conectividad fiable y una precisión excepcional, nunca más perderás tus pertenencias.</p>
            </div>
        </div>
        <div id="modalCorreas" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalCorreas')">&times;</span>
                <h2>Correas para Horizon Watch</h2>
                <p>Personaliza tu Horizon Watch con nuestras correas de diferentes estilos y materiales. Desde opciones deportivas hasta elegantes, siempre tendrás una correa adecuada para cada ocasión.</p>
            </div>
        </div>
        <div id="modalAltavoces" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalAltavoces')">&times;</span>
                <h2>Altavoces y Auriculares</h2>
                <p>Disfruta de un sonido superior con nuestra gama de altavoces y auriculares de alta calidad. Diseñados para ofrecer una experiencia de audio envolvente, son perfectos para el entretenimiento y el trabajo.</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Daniel y Ramon. Todos los derechos reservados.</p>
    </footer>
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        window.onclick = function(event) {
            var modals = document.getElementsByClassName('modal');
            for (var i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
