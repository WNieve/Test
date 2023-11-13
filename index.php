<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $username = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $edad = $_POST["edad"];

        $archivo = fopen("datos.txt", "a"); // Abre el archivo en modo "a" para añadir al final
        fwrite($archivo, "Username: $username - correo: $correo - contraseña: $contraseña - edad: $edad\n");
        fclose($archivo);
    
        echo "Datos guardados exitosamente.";
    }
?>