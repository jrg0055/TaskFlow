<?php
if (isset($_POST["nombre_contacto"])) {
    $nombre = htmlspecialchars($_POST["nombre_contacto"]);
} else {
    $nombre = "Nombre no proporcionado";
}
if (isset($_POST["email_contacto"])) {
    $email = htmlspecialchars($_POST["email_contacto"]);
} else {
    $email = "Email no proporcionado";
}
if (isset($_POST["mensaje_contacto"])) {
    $mensaje = htmlspecialchars($_POST["mensaje_contacto"]);
} else {
    $mensaje = "Mensaje no proporcionado";
}

echo "Nombre: " . $nombre . "<br>";
echo "Email: ". $email . "<br>";
if ($mensaje == "Mensaje no proporcionado <br>") {
    echo $mensaje;
} else {
    echo "Mensaje proporcionado correctamente. Lo procesaremos pronto. <br>";
}

?>