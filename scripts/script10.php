<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '10';
echo '</td>';
echo '<td>';
    echo 'Вывести значение переменной $a, используя синтаксис "переменные переменных". Для этого нужно создать новую переменную $name = "a". Вывести ${$name}';
echo '</td>';
echo '<td>';
    echo 'echo ${$name};';
echo '</td>';
echo '<td>';
    $name = "a";
    echo ${$name};
echo '</td>';
?>