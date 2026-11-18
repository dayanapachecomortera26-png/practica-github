<?php
// Página de Visión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Visión - Dulce </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #fff9fb;
            color: #5a2c43;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(135deg, #f8c8dc, #f4a5c1);
            padding: 30px;
            text-align: center;
        }
        header h1 {
            color: #942f54;
            font-size: 2.2rem;
        }
        .contenedor {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .contenido {
            background: #ffffff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(148, 47, 84, 0.1);
        }
        .contenido h2 {
            color: #b8416d;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .contenido p {
            font-size: 1.1rem;
            margin-bottom: 15px;
            text-align: justify;
        }
        .boton {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 30px;
            background-color: #b8416d;
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .boton:hover {
            background-color: #942f54;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: #946b7f;
            font-size: 0.9rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>✨ Nuestra Visión</h1>
    </header>

    <div class="contenedor">
        <div class="contenido">
            <h2>¿Hacia dónde vamos?</h2>
            <p>Ser la pastelería más querida y reconocida de la región, distinguida por nuestra calidad, sabor y calidez en el trato. Aspiramos crecer de manera sostenible, llegar a más hogares y convertirnos en la primera opción cuando busques algo dulce y especial.</p>
            <p>Imaginamos un futuro donde Dulce Anhelo sea sinónimo de confianza, tradición y momentos felices, innovando constantemente sin perder la esencia que nos hace únicos: el amor por lo que hacemos.</p>
            
            <a href="index.php" class="boton">← Volver al inicio</a>
        </div>
    </div>

    <footer>
        &copy; 2026 Dulce Anhelo · San Juan Bautista Tuxtepec, Oaxaca
    </footer>

</body>
</html>


