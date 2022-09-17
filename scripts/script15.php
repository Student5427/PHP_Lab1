<?php
#Вывести результат сложения переменных $a и $str
include_once 'simple_start.php';
echo '<td>';
    echo '15';
echo '</td>';
echo '<td>';
    echo 'Вывести список файлов в текущей директории.';
echo '</td>';
echo '<td>';
    echo "echo shell_exec('ls -a');";
echo '</td>';
echo '<td>';
//Для linux - 'ls -a', для windows - 'dir /b'
    echo shell_exec('dir /b');
echo '</td>';
?>
