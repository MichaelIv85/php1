<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Операция не поддерживается';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Аргументы не переданы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$operation = $_GET['operation'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
        default:
        return 'Операция не поддерживается';
}

return $expression . $result;