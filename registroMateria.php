<?php
// Conexión a la base de datos
$servername = "localhost";
$dbname = "escuela";

$conn = new mysqli($servername,$dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$idprofesor = $_POST["idProfesor"];
$nombre = $_POST["Nombre"];

// Insertar datos en la base de datos
$sql = "INSERT INTO profesores (idProfesor, Nombre) VALUES ('$idprofesor', '$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
