<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '11';
echo '</td>';
echo '<td>';
    echo 'Создать семейство переменных $var1, $var2, $var3 и инициализировать значением 0.';
echo '</td>';
echo '<td>';
    echo 'Код на каппе';
echo '</td';
echo '<td>';
for ($i = 1; $i <= 3; $i++) {
    ${"var".$i} = 0;
    }
    echo $var1,"\n", $var2, "\n", $var3,"\n";
echo '</td>';
?>