<?php
echo "Ingresando a la base de datos";
$servername = "127.0.0.1";
$db_username = "root";
$db_password = "";
$dbname = "Users";
// Conexión
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexion Completa";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
    $lugar = $_POST["lugar"];

    $sql = "INSERT INTO UsuariosTBL (username, email, contraseña,lugar) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    
    // Verificar si la preparación fue exitosa
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param($nombre, $correo, $contraseña,$lugar);

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

$result = $conn->query("SELECT * FROM UsuariosTBL");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Correo: " . $row["correo"] . "<br>";
        echo "Contraseña: " . $row["contraseña"] . "<br>";
        echo "lugar" . $row["lugar"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron datos.";
}
header("Location: http://localhost:8000/index.html");
exit();
$conn->close();
?>
