<?php
echo "Ingresando a la base de datos";
$servername = "127.0.0.1";
$db_username = "root";
$db_password = "";
$dbname = "Users";

// Conexión
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexion Completa";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

    // Corregir la consulta SQL para incluir todos los campos
    $sql = "INSERT INTO tblUsuarios (username, email, contraseña) VALUES (?, ?, ?)";

    // Ussar sentencias preparadas para mejorar la seguridad
    $stmt = $conn->prepare($sql);
    
    // Verificar si la preparación fue exitosa
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("sss", $nombre, $correo, $contraseña);

        if ($stmt->execute()) {
            echo "Datos guardados correctamente";
        } else {
            echo "Error al guardar datos: " . $stmt->error;
        }

        // Cerrar la sentencia preparada
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}

echo "Dirigiendo a HTML";
header("Location: http://localhost:8000/index.html");
exit();

echo "Cerrando la base de datos";
$conn->close();
?>
