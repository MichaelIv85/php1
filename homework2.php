<?php

function rez1 ($x, $y){
    if ($x && $y) {
        return 'true';
    } else {
        return 'false';
    }
}

function rez2 ($x, $y){
    if ($x || $y) {
        return 'true';
    } else {
        return 'false';
    }
}
function rez3 ($x, $y){
    if ($x xor $y) {
        return 'true';
    } else {
        return 'false';
    }
}
?>
<html>
<head>
    <title> Таблица истинности </title>
</head>
    <body>
<table border="1" cellpadding="5">
    <caption> Таблица истинности оператора && </caption>
    <tr>
        <th>оператор &&</th> <th> false </th><th> true </th>
    </tr>
    <th> false </th> <td><?php echo rez1 (false, false) ?> </td> <td><?php echo rez1 (false, true)?> </td>
    <tr>
        <th> true </th> <td><?php echo rez1 (true, false)?> </td><td><?php echo rez1 (true, true)?></td>
</table>
    <br>
<table border="1" cellpadding="5">
<caption> Таблица истинности оператора || </caption>
<tr>
    <th>оператор || </th> <th> false </th><th> true </th>
</tr>
<th> false </th> <td><?php echo rez2 (false, false) ?> </td> <td><?php echo rez2 (false, true)?> </td>
<tr>
    <th> true </th> <td><?php echo rez2 (true, false)?> </td><td><?php echo rez2 (true, true)?></td>
    </table>
<br>
<table border="1" cellpadding="5">
    <caption> Таблица истинности оператора xor </caption>
    <tr>
        <th>оператор xor </th> <th> false </th><th> true </th>
    </tr>
    <th> false </th> <td><?php echo rez3 (false, false) ?> </td> <td><?php echo rez3 (false, true)?> </td>
    <tr>
        <th> true </th> <td><?php echo rez3 (true, false)?> </td><td><?php echo rez3 (true, true)?></td>
</table>
</body>

</html>