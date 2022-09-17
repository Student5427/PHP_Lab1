<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '12';
echo '</td>';
echo '<td>';
    echo 'Изменить значение переменной $a, используя "присвоение по ссылке".';
echo '</td>';
echo '<td>';
    echo '$ref=&$a;';
echo '</td>';
echo '<td>';
    $ref=&$a;
    $ref = 14;
    echo $a;
echo '</td>';
?>