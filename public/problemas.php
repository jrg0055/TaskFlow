<?php

// Categoría 1
// Problema 1
$Nombre = "Jorge";
$Apellidos = "Ramos";
$Edad = 19;
$Altura = 1.75;
$Student = true;
echo "$Nombre, $Apellidos, $Edad, $Altura, $Student";

echo "<br>";
// Problema 2
$NombreProducto = "Aspiradora";
$Precio = 87.99;
$Stock = 6;
$Oferta = true;
echo "$NombreProducto, $Precio, $Stock, $Oferta";

echo "<br>";
// Problema 3
const NOMBRE_SITIO = "Mi tienda online";
const VERSION_APP = "1.0";
echo NOMBRE_SITIO . ", " . VERSION_APP;

echo "<br>";
// Categoría 2
// Problema 1
$num1 = 10;
$num2 = 5;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
echo "Suma: $suma, Resta: $resta, Multiplicación: $multiplicacion, División: $division";

echo "<br>";
// Problema 2
$stock = 100;
$vendidos = 25;
$llegada = 50;
$stockRestante = $stock - $vendidos + $llegada;
echo "Stock restante: $stockRestante";

echo "<br>";
//Problema 3
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";
$fraseCompleta = "El profesor $nombre $apellido imparte el curso de $curso.";
echo $fraseCompleta;

echo "<br>";
// Problema 4
$edad = 20;
$edadMinima = 18;
var_dump($edad >= $edadMinima);
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario);

echo "<br>";
// Problema 5
$numero = 7;
$espar = ($numero % 2 === 0);
echo "El número $numero es " . ($espar ? "par" : "impar");

echo "<br>";
// Categoría 3
// Problema 1
$edad = 17;
if ($edad >= 18) {
    echo "Puedes pasar.";
} else {
    echo "No puedes pasar.";
}

echo "<br>";
// Problema 2
$nota = 7.5;
if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota >= 7) {
    echo "Notable";
} elseif ($nota >= 5) {
    echo "Aprobado";
} else {
    echo "Suspenso";
}

echo "<br>";
// Problema 3
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes":
        echo "Lentejas";
        break;
    case "miércoles":
        echo "Paella";
        break;
    case "viernes":
        echo "Pescado al horno";
        break;
    default:
        echo "Hoy no hay menú especial";
        break;
}

echo "<br>";
// Problema 4
$rolUsuario = "admin";
$usuarioActivo = true;
if ($usuarioActivo && $rolUsuario === "admin") {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}

echo "<br>";
// Categoría 4
// Problema 1
for ($i = 1; $i <= 10; $i++) {
    echo $i*7 . " ";
}

echo "<br>";
// Problema 2
$i = 10;
while ($i>=1) {
    echo $i . " ";
    $i--;
}
echo "¡Feliz año nuevo!";

echo "<br>";
// Problema 3
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
foreach ($alumnos as $alumno) {
    echo "Hola, $alumno" . "<br>";
}

// Problema 4
$productos = [
["nombre" => "Teclado", "precio" => 50],
["nombre" => "Ratón", "precio" => 25],
["nombre" => "Monitor", "precio" => 200]
];
foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . "<br>";
}

// Categoría 5
// Problema 1
$usuario = ["nombre" => "Jorge", "edad" => 29, "email" => "jrg0055@alu.medac.es", "estudiante" => true];
echo "Nombre: " . $usuario["nombre"] . ". Edad: " . $usuario["edad"] . ". Email: " . $usuario["email"] . ". Estudiante: " . ($usuario["estudiante"] ? "Sí" : "No");

echo "<br>";

// Problema 2
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Nota: $nota - " . ($nota >= 5 ? "Aprobado" : "Suspenso") . "<br>";
    }
}
?>