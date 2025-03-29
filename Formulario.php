<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $edad = trim($_POST['edad']);
    
    if (empty($nombre)) {
        $errores[] = "El nombre no puede estar vacío.";
    }
    
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }
    
    if (!is_numeric($edad) || $edad <= 0) {
        $errores[] = "La edad debe ser un número mayor que 0.";
    }
    
    if (empty($errores)) {
        echo "<p style='color: green;'>Hola $nombre, tus datos han sido registrados correctamente.</p>";
    } else {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Ingrese sus datos</h2>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

