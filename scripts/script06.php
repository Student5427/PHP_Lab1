<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '6';
echo '</td>';
echo '<td>';
    echo 'Вывести $mas["one"], $mas[2], $mas[3]';
echo '</td>';
echo '<td>';
//нет ключа 3
    echo $mas["one"], "\n", $mas[2], "\n", $mas["three"];
echo '</td>';
?>