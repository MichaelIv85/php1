<?php

var_dump (3/1);// Целое число 
var_dump (1/3);
var_dump ('20cats' +40);
var_dump (18%4);
echo '<br>'; echo '<br>';

echo ($a = 2); // значением этого выражения является число 2 ст типом int
echo '<br>';
$x = ($y = 12) - 8; echo $x;// значением этого выражения является число 4 с типом int
echo '<br>'; echo '<br>';

var_dump (1 == 1.0); //не строгое сравнение, поэтому true
var_dump (1 === 1.0);// строгое сравнение, поэтому false
var_dump ('02' == 2);// здесь php пытается сначала привести строку со значением 02 к числу, а затем сравнивает нестогим сравнением и результатом будет true
var_dump ('02' === 2);// здесь php строго сравнивает значения по количеству байт. в результате число 02 не равно 2, то есть false
var_dump ('02' == '2');// тут сроки приводятся к числам и в результате нестрого сравнения результатом будет true
echo '<br>'; echo '<br>';

$x = true xor true;
var_dump ($x);// не понимаю почему здесь результат true.. Должен же быть false
