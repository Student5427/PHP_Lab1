<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '4';
echo '</td>';
echo '<td>';
    echo 'Вывести результат сравнения переменных $nol и $pusto с использованием операторов == и ===';
echo '</td>';
echo '<td>';
#На выводы пусто, потому что переменные не равны ни по типу(===), ни по значению(==)
    echo "echo $nol == $pusto, $nol === $pusto;";
echo '</td>';
echo '<td>';
    echo $nol == $pusto, "\n", $nol === $pusto;
echo '</td>';
?>