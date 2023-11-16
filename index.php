<?php
$servername = "127.0.0.1";
$db_username = "root";
$db_password = "";
$dbname = "Usuarios";

// Conexión
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT); 
    $edad = $_POST["edad"];

    // Corregir la consulta SQL para incluir todos los campos
    $sql = "INSERT INTO Usuarios (username, correo, contraseña, edad) VALUES ('$nombre', '$correo', '$contraseña', '$edad')";

    // Usar sentencias preparadas para mejorar la seguridad
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar datos: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
