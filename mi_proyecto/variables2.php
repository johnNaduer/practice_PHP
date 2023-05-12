<html>
<head>
<title>variables </title>
</head>
<body>
<?php

$nombre = 'john';
echo $nombre . "<br>"; // Agregamos el salto de línea aquí
$edad = 30;
echo $edad . "<br>"; // Agregamos el salto de línea aquí

$nombre = 'John';
echo $nombre . PHP_EOL; // Agregamos la constante PHP_EOL para hacer el salto de línea
$edad = 30;
echo $edad . PHP_EOL; // Agregamos la constante PHP_EOL para hacer el salto de línea

$nombre = 'John';
$edad = 30;
var_dump($nombre);
var_dump($edad);

?>
</body>
</html>
