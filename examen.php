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
// Defino las variables
$nombre_alumno = "Rodrigo Marin Jaime";
$modulo = "Desarrollo Web en Entorno Servidor";
$nota_media = 7.5;
$es_matriculado = true;

echo "<h1>Alumno: $nombre_alumno</h1>";
echo "<h2>Módulo: $modulo</h2>";
//Aqui hago la diferencia entre las comillas simples y dobles
echo "Mi nota media actual es: $nota_media <br>";
echo 'Mi nota media actual es: $nota_media';

// uso el if para la nota media, "si ha sacado mas de un 9 tiene un sobresaliente, si no..."
if ($nota_media >= 9) {
    echo "<p>Sobresaliente</p>";
} elseif ($nota_media >= 7) {
    echo "<p>Notable</p>";
} elseif ($nota_media >= 5) {
    echo "<p>Aprobado</p>";
} else {
    echo "<p>Suspenso</p>";
}

//compruebo si el alumno esta matriculado, pues es un boolean
if ($es_matriculado) {
    echo "<p>Estado: Alumno matriculado.</p>";
} else {
    echo "<p>Estado: Alumno no matriculado.</p>";
}


//hago la tabla con el bucle while

echo "<table>";

$i = 1;

while ($i <= 5) {
    echo "<tr>";
    echo "<td>fila numero</td>";
    echo "<td>$i</td>";
    echo "</tr>";
    
    $i++; //suma 1 al contador hasta llegar a 5, que es el limite que puse antes
}

echo "</table>";


?>


    
</body>
</html>

