<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '17';
echo '</td>';
echo '<td>';
    echo 'Самостоятельно определить массив $mas_add. Склеить массивы $mas и $mas_add';
echo '</td>';
echo '<td>';
    echo 'var_dump($mas + $mas_add);';
echo '</td>';
echo '<td>';
    $mas_add = array( "key" => FALSE,
        6   => 54,
      "PI" => 3.14);
    $mas_add[] = "test";
    $mas_add["five"] = 5;
    var_dump($mas + $mas_add);
echo '</td>';
?>