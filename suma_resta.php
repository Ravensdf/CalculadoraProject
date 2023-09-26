<?php
// Obtener los valores ingresados por el usuario
$operando1 = $_POST['operando1'];
$operando2 = $_POST['operando2'];
$operador = $_POST['operador'];

// Realizar la operación según el operador seleccionado
switch ($operador) {
    case '+':
        $resultado = $operando1 + $operando2;
        break;
    case '-':
        $resultado = $operando1 - $operando2;
        break;
    case '*':
?>