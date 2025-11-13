<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor Rodrigo Marin Jaime</title>
</head>
<h1>Examen Servidor Rodrigo Marin Jaime</h1>
<body>
<?php
$nombre_alumno = "Rodrigo Marin Jaime";
$modulo = "Desarrollo Web en Entorno Servidor";
$nota_media = 7.5;
$es_matriculado = true;

echo "<h1>Alumno: $nombre_alumno</h1>";
echo "<h2>Módulo: $modulo</h2>";
echo "Mi nota media actual es: $nota_media <br>";
echo 'Mi nota media actual es: $nota_media';

if ($nota_media >= 9) {
    echo "<p>Sobresaliente</p>";
} elseif ($nota_media >= 7) {
    echo "<p>Notable</p>";
} elseif ($nota_media >= 5) {
    echo "<p>Aprobado</p>";
} else {
    echo "<p>Suspenso</p>";
}

if ($es_matriculado) {
    echo "<p>Estado: Alumno matriculado.</p>";
} else {
    echo "<p>Estado: Alumno no matriculado.</p>";
}



echo "<table>";

$i = 1;

while ($i <= 5) {
    echo "<tr>";
    echo "<td>fila numero</td>";
    echo "<td>$i</td>";
    echo "</tr>";
    
    $i++;
}

echo "</table>";


?>


    
</body>
</html>

