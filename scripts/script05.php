<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '5';
echo '</td>';
echo '<td>';
    echo 'Сравнить результат вывода переменных $s1 и $s2';
echo '</td>';
echo '<td>';
#Разбиваемая и неразбиваемая строки
    echo "echo $s1, '|', $s2;";
echo '</td>';
echo '<td>';
    echo $s1, "\n", $s2;
echo '</td>';
?>