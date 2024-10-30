<?php
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="papeleria.php"><img src="imagenes/Horizon Mobile Devices.png" alt="Papelería"></a>
        </div>
        <nav>
            <ul>
                <li><a href="papeleria.php">Papelería</a></li>
                <li><a href="productos.php">Catálogo de Productos</a></li>
                <li><a href="vender.php">Vender</a></li>
                <li><a href="index.php">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="papeleria">
            <div class="papeleria-inner">
                <h2>Artículos de Papelería</h2>
                <div class="video-container">
                    <video src="imagenes/AccesoriosPapeleria.mp4" autoplay muted loop playsinline></video>
                </div>
                <p>Los productos de nuestra tienda de papelería están diseñados para facilitar tus tareas escolares, de oficina y creativas.</p>
                <ul>
                    <li><strong>Lápices:</strong> Variedad de lápices para dibujo y escritura.</li>
                    <li><strong>Lapiceras:</strong> Lapiceras de diferentes colores y estilos.</li>
                    <li><strong>Colores:</strong> Amplia gama de colores para tus proyectos creativos.</li>
                    <li><strong>Sacapuntas:</strong> Sacapuntas de alta calidad para mantener tus lápices en óptimas condiciones.</li>
                    <li><strong>Borradores:</strong> Borradores efectivos y de larga duración.</li>
                    <li><strong>Pegamento:</strong> Pegamento en barra, líquido y en diferentes tamaños.</li>
                    <li><strong>Tijeras:</strong> Tijeras para cortes precisos y cómodos.</li>
                    <li><strong>Cartucheras:</strong> Diferentes modelos de cartucheras para organizar tu papelería.</li>
                    <li><strong>Memoria USB:</strong> Almacenamiento portátil para tus documentos y archivos.</li>
                </ul>
                <a href="#" class="learn-more-btn" onclick="openModal('modalGeneral')">Más información</a>
            </div>
            <img src="img/papeleria_image.png" alt="Papelería" class="device-img">
        </section>
        
        <section id="productos">
            <div class="producto" id="producto1">
                <h2>Lápices</h2>
                <img src="imagenes/lapiz.jpg" alt="Lápices">
                <p>Precio: $10</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalLapices')">Más información</a>
            </div>
            <div class="producto" id="producto2">
                <h2>Lapiceras</h2>
                <img src="imagenes/lapicera.jpg" alt="Lapiceras">
                <p>Precio: $15</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalLapiceras')">Más información</a>
            </div>
            <div class="producto" id="producto3">
                <h2>Colores</h2>
                <img src="imagenes/colores.jpg" alt="Colores">
                <p>Precio: $50</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalColores')">Más información</a>
            </div>
            <div class="producto" id="producto4">
                <h2>Sacapuntas</h2>
                <img src="imagenes/sacapuntas.jpg" alt="Sacapuntas">
                <p>Precio: $5</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalSacapuntas')">Más información</a>
            </div>
            <div class="producto" id="producto5">
                <h2>Borradores</h2>
                <img src="imagenes/borrador.jpg" alt="Borradores">
                <p>Precio: $8</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalBorradores')">Más información</a>
            </div>
            <div class="producto" id="producto6">
                <h2>Pegamento</h2>
                <img src="imagenes/pegamento.jpg" alt="Pegamento">
                <p>Precio: $20</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalPegamento')">Más información</a>
            </div>
            <div class="producto" id="producto7">
                <h2>Tijeras</h2>
                <img src="imagenes/tijeras.jpg" alt="Tijeras">
                <p>Precio: $30</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalTijeras')">Más información</a>
            </div>
            <div class="producto" id="producto8">
                <h2>Cartucheras</h2>
                <img src="imagenes/cartuchera.jpg" alt="Cartucheras">
                <p>Precio: $25</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalCartucheras')">Más información</a>
            </div>
            <div class="producto" id="producto9">
                <h2>Memoria USB</h2>
                <img src="imagenes/memoriausb.jpg" alt="Memoria USB">
                <p>Precio: $100</p>
                <a href="#" class="learn-more-btn" onclick="openModal('modalUSB')">Más información</a>
            </div>
        </section>

        <!-- Modales Específicos -->
        <div id="modalLapices" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapices')">&times;</span>
                <h2>Lápices</h2>
                <p>Una selección de lápices de alta calidad, perfectos para escribir y dibujar.</p>
            </div>
        </div>
        <div id="modalLapiceras" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Lapiceras</h2>
                <p>Lapiceras de tinta fluida, disponibles en varios colores y diseños.</p>
            </div>
        </div>
         <div id="modalColores" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Colores</h2>
                <p>Colores de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalSacapuntas" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Sacapuntas</h2>
                <p>Sacapuntas de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalBorradores" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Borradores</h2>
                <p>Borradores de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalCartuchera" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Cartuchera</h2>
                <p>Cartuchera de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalPegamento" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Pegamento</h2>
                <p>Pegamento de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalUsb" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Memoria Usb</h2>
                <p>Las mejores USB de la mas alta calidad, disponibles en varios colores y diseños.</p>
            </div>
        </div>
          <div id="modalTijeras" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modalLapiceras')">&times;</span>
                <h2>Tijeras</h2>
                <p>Tijeras de la mas alta calidad, disponibles en varios colores y diseños.</p>
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

