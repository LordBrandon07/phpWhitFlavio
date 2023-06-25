<?php

class Automovil {
    private $marca;
    private $modelo;
    private $matricula;
    private $precio;

    public function __construct($marca, $modelo, $matricula, $precio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->matricula = $matricula;
        $this->precio = $precio;
        echo '<br><br>Desde el contructor';
    }

    //metodo  getter y setter

    public function set_marca($marca) {
        $this->marca = $marca;
    }
    public function get_marca() {
        return $this->marca;
    }

    public function set_modelo($modelo) {
        $this->modelo = $modelo;
    }
    public function get_modelo() {
        return $this->modelo;
    }

    public function set_matricula($matricula) {
        $this->matricula = $matricula;
    }
    public function get_matricula() {
        return $this->matricula;
    }

    public function set_precio($precio) {
        $this->precio = $precio;
    }
    public function get_precio() {
        return $this->precio;
    }
};

$auto_angelo = New Automovil(
    'Ferrari', '2023', 'ANG200', 200000000.00
);

echo '<br>', $auto_angelo->get_marca();
echo '<br>', $auto_angelo->get_modelo();
echo '<br>', $auto_angelo->get_matricula();
echo '<br>', $auto_angelo->get_precio();

$auto_angelo->set_marca('hotwells');
$auto_angelo->set_modelo('2015');

echo '<br>', $auto_angelo->get_marca();
echo '<br>', $auto_angelo->get_modelo();

$auto_insectosaurio = New Automovil(
    'renault', '1990', 'VGS360', 10000000
);

echo '<br>', $auto_insectosaurio->get_marca();
echo '<br>', $auto_insectosaurio->get_modelo();
echo '<br>', $auto_insectosaurio->get_matricula();
echo '<br>', $auto_insectosaurio->get_precio();

$auto_luigi = New Automovil(
    'chevrolet', '2000', 'LPG654', 15000000
);

echo '<br>', $auto_luigi->get_marca();
echo '<br>', $auto_luigi->get_modelo();
echo '<br>', $auto_luigi->get_matricula();
echo '<br>', $auto_luigi->get_precio();
echo '<br>', '<br><br>viva colombia, viva falcao';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vizca barsa</title>
    <link rel="stylesheet" href="./style/clase1style.css">
</head>
<body>
    
</body>
</html>
