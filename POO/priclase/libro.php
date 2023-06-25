<?php

declare (strict_types = 1);

function saltos(){
    echo'<br><br><br><br><br>';
};

class Libro{
    private string $titulo;
    private string $editorial;
    private string $autor;
    private float $precio_base;
    private float $descuento;
    private float $impuesto;

    public function __construct(string $titulo, string $editorial, string $autor, float $precio_base, float $descuento, float $impuesto)
    {
        $this->titulo = $titulo;
        $this->editorial = $editorial;
        $this->autor = $autor;
        $this->precio_base = $precio_base;
        $this->descuento = $descuento;
        $this->impuesto = $impuesto;
        saltos();
    }

    //metodo  getter y setter

    public function set_titulo($titulo) {
        $this->titulo = $titulo;
    }
    public function get_titulo() {
        return $this->titulo;
    }

    public function set_editorial($editorial) {
        $this->editorial = $editorial;
    }
    public function get_editorial() {
        return $this->editorial;
    }

    public function set_autor($autor) {
        $this->autor = $autor;
    }
    public function get_autor() {
        return $this->autor;
    }

    public function set_precio_base($precio_base) {
        $this->precio_base = $precio_base;
    }
    public function get_precio_base() {
        return $this->precio_base;
    }

    public function set_descuento($descuento) {
        $this->descuento = $descuento;
    }
    public function get_descuento() {
        return $this->descuento;
    }

    public function set_aimpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }
    public function get_impuesto() {
        return $this->impuesto;
    }
};

$libro_angelo = New Libro(
    'la liada', 'panamericana', 'homero', 50000, 0.5, 0.19
);

echo '<br>titulo: ', $libro_angelo->get_titulo();
echo '<br>editorial: ', $libro_angelo->get_editorial();
echo '<br>autor: ', $libro_angelo->get_autor();
echo '<br>precio base: ', $libro_angelo->get_precio_base();
echo '<br> descuento: ', $libro_angelo->get_descuento();
echo '<br> impuesto: ', $libro_angelo->get_impuesto();


$libro_angelo->set_precio_base(55000);
$libro_angelo->set_descuento(0.6);

echo '<br> nuevo precio: ', $libro_angelo->get_precio_base();
echo '<br> nuevo descuento: ', $libro_angelo->get_descuento();


$libro_insectosaurio = New Libro(
    'into the spiderverse', 'marvel comics', 'stean lee', 100000, 0.2, 0.19
);

echo '<br> titulo: ', $libro_insectosaurio->get_titulo();
echo '<br>editorial: ', $libro_insectosaurio->get_editorial();
echo '<br>autor: ', $libro_insectosaurio->get_autor();
echo '<br>precio base: ', $libro_insectosaurio->get_precio_base();
echo '<br>descuento: ', $libro_insectosaurio->get_descuento();
echo '<br>impuesto: ', $libro_insectosaurio->get_impuesto();

$libro_insectosaurio->set_precio_base(98000);
$libro_insectosaurio->set_descuento(0.7);

echo '<br> nuevo precio: ', $libro_insectosaurio->get_precio_base();
echo '<br> nuevo descuento: ', $libro_insectosaurio->get_descuento();

$libro_luigi = New Libro(
    'la odisea', 'panamericana', 'homero', 80000, 0.8, 0.19
);

echo '<br>titulo: ', $libro_luigi->get_titulo();
echo '<br>editorial: ', $libro_luigi->get_editorial();
echo '<br>autor: ', $libro_luigi->get_autor();
echo '<br>precio base: ', $libro_luigi->get_precio_base();
echo '<br>descuento: ', $libro_luigi->get_descuento();
echo '<br>impuesto: ', $libro_luigi->get_impuesto();

$libro_luigi->set_precio_base(40000);
$libro_luigi->set_descuento(0.2);

echo '<br> nuevo precio: ', $libro_luigi->get_precio_base();
echo '<br> nuevo descuento: ', $libro_luigi->get_descuento();

echo '<br>', '<br><br>viva colombia, viva falcao';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>luis diaz</title>
    <link rel="stylesheet" href="./style/clase1style.css">
</head>
<body>
    
</body>
</html>
