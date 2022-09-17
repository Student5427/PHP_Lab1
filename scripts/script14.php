<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '14';
echo '</td>';
echo '<td>';
    echo 'Выполнить $str=$HOST, $str=@$HOST';
echo '</td>';
echo '<td>';
    echo 'echo $str = @$HOST;';
echo '</td>';
echo '<td>';
    #echo $str = $HOST, ' ';
    echo $str = @$HOST;
echo '</td>';
?>