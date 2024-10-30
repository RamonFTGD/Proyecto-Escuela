<?php
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Torneo de Artes Marciales</title>
    <link rel="stylesheet" href="css/Papeleria.css">
    <style>
        .register-container {
            display: block;
            opacity: 1; /* Cambiado a 1 para que sea visible */
            border: 2px solid rgba(133, 156, 156, 0.7);
            border-radius: 15px;
            width: 350px;
            padding: 30px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.3), 0 0 15px rgba(255, 255, 255, 0.2);
            background: linear-gradient(135deg, rgba(40, 40, 45, 0.95), rgba(10, 10, 10, 0.85));
            color: #e0e0e0;
            font-family: 'Arial', sans-serif;
            text-align: center;
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid rgba(133, 156, 156, 0.4);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #e0e0e0;
            transition: 0.3s ease;
        }
        
        .register-container input[type="text"]:focus,
        .register-container input[type="email"]:focus,
        .register-container input[type="password"]:focus {
            border-color: rgba(0, 255, 255, 0.5);
            outline: none;
        }
        
        .register-container button {
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .register-container button:hover {
            background: linear-gradient(45deg, #0072ff, #00c6ff);
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }
        
        .register-container a {
            color: #00c6ff;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .register-container a:hover {
            color: #0072ff;
        }
    </style>
</head>
<body>
<button id="toggleMusic">🔊 Reproducir Música</button>

<audio id="backgroundAudio" loop>
    <source src="musica/𝘧𝘪𝘧𝘵𝘺-𝘧𝘪𝘧𝘵𝘺--slowed-to-perfection.mp3" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>

    <div class="register-container">
        <h2>Registrarse</h2>
        <?php if (isset($error)):?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Numero de Identificacion:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Codigo  de Acceso:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="register">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
