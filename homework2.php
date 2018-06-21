<?php

function resultOfAnd ($x, $y)
{
    if ($x && $y) {
        return 'true';
    } else {
        return 'false';
    }
}

function resultOfOr ($x, $y)
{
    if ($x || $y) {
        return 'true';
    } else {
        return 'false';
    }
}
function resultOfXor ($x, $y)
{
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
    <th> false </th> <td><?php echo resultOfAnd(false, false) ?> </td> <td><?php echo resultOfAnd(false, true)?> </td>
    <tr>
        <th> true </th> <td><?php echo resultOfAnd(true, false)?> </td><td><?php echo resultOfAnd(true, true)?></td>
</table>
    <br>
<table border="1" cellpadding="5">
<caption> Таблица истинности оператора || </caption>
<tr>
    <th>оператор || </th> <th> false </th><th> true </th>
</tr>
<th> false </th> <td><?php echo resultOfOr(false, false) ?> </td> <td><?php echo resultOfOr(false, true)?> </td>
<tr>
    <th> true </th> <td><?php echo resultOfOr(true, false)?> </td><td><?php echo resultOfOr(true, true)?></td>
    </table>
<br>
<table border="1" cellpadding="5">
    <caption> Таблица истинности оператора xor </caption>
    <tr>
        <th>оператор xor </th> <th> false </th><th> true </th>
    </tr>
    <th> false </th> <td><?php echo resultOfXor(false, false) ?> </td> <td><?php echo resultOfXor(false, true)?> </td>
    <tr>
        <th> true </th> <td><?php echo resultOfXor(true, false)?> </td><td><?php echo resultOfXor(true, true)?></td>
</table>
</body>

</html>