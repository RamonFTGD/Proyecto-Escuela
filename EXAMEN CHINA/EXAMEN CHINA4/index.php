<?php
    include "functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Papeleria.css">
</head>
<body>

<button id="toggleMusic">🔊 Reproducir Música</button>

<audio id="backgroundAudio" loop>
    <source src="musica/𝘧𝘪𝘧𝘵𝘺-𝘧𝘪𝘧𝘵𝘺--slowed-to-perfection.mp3" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>

<video id="background-video" autoplay muted loop>
    <source src="imagenes/Mega Haul ✨ Aesthetic ✨ ft. TEMU.mp4" type="video/mp4">
    Tu navegador no soporta reproducción de video.
</video>


<div class="login-container" id="loginContainer">
        <h2>Iniciar Sesión</h2>
        <form method="POST">

            <label for="gmail">Numero de Identificacion:</label>
            <input type="gmail" id="gmail" name="gmail" required>



            <label for="password">Codigo de Acceso:</label>
            <input type="password" id="password" name="password" required>


            <button type="submit" name="login">Ingresar al Sistema</button>
        </form>
        <p>¿No tienes tu Codigo de Acceso? <a href="register.php">Volver a Solicitar el Codigo</a></p>
    </div>

    <div class="subtitle" id="subtitle">Presiona La Tecla X Para Enlazar Al Sistema</div>

    <script>
        const loginContainer = document.getElementById('loginContainer');
        const subtitle = document.getElementById('subtitle');
        const backgroundAudio = document.getElementById('backgroundAudio');

       
        document.getElementById('toggleMusic').addEventListener('click', () => {
           
            if (backgroundAudio.paused) {
                backgroundAudio.play(); // Reproduce la música
                backgroundAudio.loop = true; // Habilita el loop
                console.log('Música iniciada');
            } else {
                backgroundAudio.pause(); // Pausa la música
                console.log('Música pausada');
            }
        });

        document.addEventListener('keydown', (event) => {
    if (event.key === 'x' || event.key === 'X') {
        console.log('Tecla X presionada, mostrando el contenedor'); // Verifica que se activa
        loginContainer.classList.add('show');
        subtitle.style.display = 'none'; // Oculta el subtítulo
    }
});
    </script>
</body>
</html>