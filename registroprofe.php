<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "escuela";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$idprofesor = $_POST["idProfesor"];
$nombre = $_POST["Nombre"];
$apaterno = $_POST["A_Paterno"];
$amaterno = $_POST["A_Materno"];
$domicilio = $_POST["Domicilio"];

// Insertar datos en la base de datos
$sql = "INSERT INTO profesores (idProfesor, Nombre, A_Paterno, A_Materno, Domicilio) VALUES ('$idprofesor', '$nombre', '$apaterno', '$amaterno', '$domicilio')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
