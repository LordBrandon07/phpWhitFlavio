<?php
class Calculadora
{
    public function suma($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function resta($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplicacion($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function division($num1, $num2)
    {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: División entre cero no está permitida.";
        }
    }
}

$calculadora = new Calculadora();

$num1 = intval($_POST['num1'] ?? 0);
$num2 = intval($_POST['num2'] ?? 0);
$operacion = $_POST['operacion'] ?? '';

$suma = $calculadora->suma($num1, $num2);
$resta = $calculadora->resta($num1, $num2);
$multiplicacion = $calculadora->multiplicacion($num1, $num2);
$division = $calculadora->division($num1, $num2);

$resultado = '';
if ($operacion == 'add') {
    $resultado = "Suma: " . $suma;
} elseif ($operacion == 'subtract') {
    $resultado = "Resta: " . $resta;
} elseif ($operacion == 'multiply') {
    $resultado = "Multiplicación: " . $multiplicacion;
} elseif ($operacion == 'divide') {
    $resultado = "División: " . $division;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div>
        <p class="new">CALCULADORA3000</p>

        <form class="formulario" method="POST">
            <fieldset>
                <legend>Datos</legend>
                <label for="num1">Numero 1</label><br>
                <input type="number" id="num1" name="num1" required><br>

                <label for="num2">Numero 2</label><br>
                <input type="number" id="num2" name="num2" required><br>

                <div class="operacion">
                    <input type="radio" id="add" name="operacion" value="add" checked>
                    <label for="add">+</label>
                    
                    <input type="radio" id="subtract" name="operacion" value="subtract">
                    <label for="subtract">-</label>
                    
                    <input type="radio" id="multiply" name="operacion" value="multiply">
                    <label for="multiply">*</label>
                    
                    <input type="radio" id="divide" name="operacion" value="divide">
                    <label for="divide">/</label>
                </div>

                <input class="boton" type="submit" id="enviar" name="enviar" value="Enviar datos">
            </fieldset>
        </form>

        <?php if (!empty($resultado)) : ?>
            <p><?php echo $resultado; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
