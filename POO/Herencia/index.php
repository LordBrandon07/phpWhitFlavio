<?php

class Animal{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function identifiquese(){
        echo '<br>soy un re animal<br>';
    }
}

class Perro extends Animal{
    public $raza;

    public function __construct($raza)
    {
        $this->raza = $raza;
        echo '<br>', $raza;
    }
    public function get_raza(){
        return $this->raza;
    }
}

$firulais = New Perro('French puddle');
$firulais->identifiquese();
$firulais->get_raza();

$lukas = New Perro('Criollo');
$firulais->identifiquese();
$firulais->get_raza();