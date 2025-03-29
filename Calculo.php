<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;

    if ($num1 > 0 && $num2 > 0) {
        echo "<h3>Resultados:</h3>";
        echo "Suma: " . ($num1 + $num2) . "<br>";
        echo "Resta: " . ($num1 - $num2) . "<br>";
        echo "Multiplicación: " . ($num1 * $num2) . "<br>";
        echo "División: " . ($num2 != 0 ? ($num1 / $num2) : "No se puede dividir entre 0") . "<br>";
    } else {
        echo "<p style='color: red;'>Ambos números deben ser mayores que 0.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cálculo PHP</title>
</head>
<body>
    <h2>Ingrese dos números</h2>
    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" step="any" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" step="any" required><br><br>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
