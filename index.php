<?php
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Tabla de Multiplicar del 5</title>
</head>
<body>
    <div id="contenedor">
        <h1>Tabla de Multiplicar del 5</h1>
        <table>';

for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>5 x $i</td><td>" . (5 * $i) . "</td></tr>";
}

echo '</table>
    </div>
</body>
</html>';
?>

