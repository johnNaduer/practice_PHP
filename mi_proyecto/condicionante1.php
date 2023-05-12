<html>
<head>
<title>variables </title>
</head>
<body>
<?php

$num = 5;

if ($num > 10)
{
echo "$num es mayor<br>";
}
else
{
echo "$num es menor<br>";
}

$dato = rand(1,120);

echo "el valor sorteado es $dato<br>";

if ($dato < 10)
{
echo "el dato es de un digito";
}
else
{
if ($dato < 100)
{
echo "el dato es de dos digitos";
}
else
{
echo "el dato es de 3 digitos";
}
}
?>
</body>
</html>
