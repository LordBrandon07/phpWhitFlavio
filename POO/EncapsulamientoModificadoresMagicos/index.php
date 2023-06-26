<?php
class MyClass {
    private $myPrivateProperty;
    protected $myProtectedProperty;
    public $myPublicProperty;
    
    private function myPrivateMethod() {
        echo 'private';
    }
    
    protected function myProtectedMethod() {
        echo 'protected';
    }
    
    public function myPublicMethod() {
        echo 'public';
    }
}

$obj = new MyClass();
$obj->myPublicProperty = "Valor público";
$obj->myPublicMethod();
?>

<?php
class MyClass1 {
    private $myPrivateProperty;
    protected $myProtectedProperty;
    public $myPublicProperty;
    
    private function myPrivateMethod() {
        // código de la función
    }
    
    protected function myProtectedMethod() {
        // código de la función
    }
    
    public function myPublicMethod() {
        // código de la función
    }
    }

$obj = new MyClass1();
$obj->myPublicProperty = "Valor público";
$obj->myPublicMethod();
?>

<?php
class MyClass3 {
    private $myProperty;
    
    public function __construct() {
        // código del constructor
    }
    
    public function __get($name) {
        echo 'get';
    }
    
    public function __set($name, $value) {
        // código para establecer el valor de una propiedad inaccesible
    }
    
    public function __call($name, $arguments) {
        // código para manejar llamadas a métodos inexistentes
    }
    }

$obj = new MyClass3();
$obj->myProperty = "Valor";
echo $obj->myProperty;
$obj->undefinedMethod();
?>

<?php
function greet($name = "Usuario") {
    echo "¡Hola, $name!";
}

greet(); // Salida: ¡Hola, Usuario!
greet("Juan"); // Salida: ¡Hola, Juan!
?>

<?php
function greet1($name, $age) {
    echo "¡Hola, $name! Tienes $age años.";
}

greet1(age: 25, name: "Juan"); // Salida: ¡Hola, Juan! Tienes 25 años.
?>

<?php
$greet = function($name) {
    echo "¡Hola, $name!";
};

$greet("Juan"); // Salida: ¡Hola, Juan!
?>

<?php
$age = 20;
$isAdult = ($age >= 18) ? "Sí" : "No";
echo "¿Es mayor de edad? $isAdult";
?>

