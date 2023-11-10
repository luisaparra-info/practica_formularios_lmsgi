<!-- procesar.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h2>Información procesada</h2>

    <?php
    // Verificar si se han enviado datos desde el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $campos = array_keys($_POST);
        
        // Mostrar la información en una tabla
        echo "<table>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";

        foreach ($campos as $campo) {
            $valor = $_POST[$campo];
            echo "<tr><td>$campo</td><td>$valor</td></tr>";
        }

        echo "</table>";
    } else {
        // Si no se han enviado datos, mostrar un mensaje
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

</body>
</html>
