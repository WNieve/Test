<?php
$servername = "127.0.0.1";
$username = "root";
$dbname = "Usuarios";
$password = "";

// Conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT); // Hash de la contraseña
    $edad = $_POST["edad"];

    // Sentencia preparada para evitar inyección SQL
    $stmt = $conn->prepare("INSERT INTO nombre_de_tabla (nombre, correo, contraseña, edad) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $correo, $contraseña, $edad);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        echo "Datos guardados exitosamente.";
    } else {
        echo "Error al guardar datos: " . $stmt->error;
    }

    // Cerrar la conexión y la sentencia preparada
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
