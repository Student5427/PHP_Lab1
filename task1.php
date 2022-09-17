
<?php
echo '<html land = ru>';
    echo'<head>';
    echo '<meta charset = ""utf-8>';
    echo '<title> PHP lab1 </title>';
    echo '<link href="style2.css" rel="stylesheet" type="text/css">';
    echo '</head>';
    echo '<body>';
        echo'<table class = "table">';
        #Вариант с регулярными выражениями и include вместо shell_exec
        /*foreach(glob("scripts\script*.php") as $filename)
        {
            echo '<tr>';
            include($filename);
            echo '</tr>';
        }*/
        #1-ые 2 элемента в списке после скандир - '.' и '..',  '.' - указывает на текущую директорию, '..' - на директорию уровнем выше. Это не пхп файлы, поэтому нахуй не нужны эти точки, вырезаем через аррау_слисе.
        foreach(array_slice(scandir("scripts"), 2) as $filename)
        {
            echo '<tr>';
            try {
            echo(shell_exec("php scripts/$filename"));
            } catch (Exception $e) {
                echo "Выброшено исключение: $e";
            }
            echo '</tr>';
        }
        echo'</table>';
    echo '</body>';
echo '</html>';
?>