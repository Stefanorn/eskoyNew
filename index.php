<?php

require 'config/paths.php';


function my_autoloader($class) {
    include 'libs/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    include 'libs/' . $class . '.php';
});


$app = new bootstrap();