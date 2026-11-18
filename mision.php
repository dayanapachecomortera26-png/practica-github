<?php
// Página de Misión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Misión - Dulce</title>
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
        <h1>🌸 Nuestra Misión</h1>
    </header>

    <div class="contenedor">
        <div class="contenido">
            <h2>¿Qué nos impulsa?</h2>
            <p>Nuestra misión es ofrecer productos de repostería de la más alta calidad, elaborados con ingredientes seleccionados y mucho cariño, para endulzar los momentos especiales de cada persona. Buscamos brindar una experiencia única y deliciosa, superando siempre las expectativas de nuestros clientes con cada creación.</p>
            <p>Trabajamos con dedicación, responsabilidad y creatividad, manteniendo los más altos estándares de higiene y servicio. Queremos ser parte de tus celebraciones, compartiendo alegría y sabor en cada bocado.</p>
            
            <a href="index.php" class="boton">← Volver al inicio</a>
        </div>
    </div>

    <footer>
        &copy; 2026 Dulce Anhelo · San Juan Bautista Tuxtepec, Oaxaca
    </footer>

</body>
</html>
