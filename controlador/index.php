<?php

require_once '../vista/calculadora.php';

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $calculator = new Calculator($num1, $num2, $operation);
    $result = $calculator->calculate();
} else {
    $result = '';
}

include '../modelo/dise.php';


