<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/styleindex.css">
</head>
<body>
    <a href="./index.html"><img src="./img/back.png" alt=""class="back"></a>
</body>
</html>

<?php

$numero1 = intval($_POST['numero1']);
$numero2 = intval($_POST['numero2']);
$operacion = $_POST['operacion'];




if (empty($numero1) || empty($numero2)){
    echo 'escriba todo completo carehueva';
    echo '<br>';
}else{
    echo 'numero 1 es ', $numero1;
    echo '<br>';
    echo 'numero 2 es ', $numero2;
    echo '<br>';
};

if ($operacion == '+'){
    echo 'el resultado de la opeacion es: ',$numero1 + $numero2;
}elseif($operacion == '-'){
    echo 'el resultado de la opeacion es: ',$numero1 - $numero2;
}elseif($operacion == '*'){
    echo 'el resultado de la opeacion es: ',$numero1 * $numero2;
}elseif($operacion == '/'){
    echo 'el resultado de la opeacion es: ',$numero1 / $numero2;
} 




?>