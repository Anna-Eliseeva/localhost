<?php
//error_reporting(E_ALL);-сообщение обо всех ошибках в коде пхп
//итерация-увелечения данного значения на единицу
//инкрементация - уменьшение значения на единицу
//HEREDOC- аналог двойных кавычек.способ определния строк.Вместо экранирования..
//NOWDOC- аналог одинарных кавычк

//$str2 = 'lalalal 5454';

//$str2 = <<<HERE
//lalalal 5454
//HERE;
//echo $str2;kk
//$i = 1;
//echo '<table border = "1">';
//while($n <= 3) {
//    echo "<td>Row$i | Col - $n </td>";
//    $n++;
//}
//echo '</table>';
//$year = 1900;
//echo '<select>';
//while($year <= 2016) {
//    echo "<option value = '$year'>$year </option>";
//    $year++;
//}
//echo '</select>';
//$x = 1;
//echo '<table border = "1">';
//while($x < 10) {
//    $x++;
//    echo "<tr>";
//    $y = 1;
//    while($y < 10) {
//        echo "<td>$x * $y = " . $x * $y. "</td>";
//        $y++;
//    }
//    echo "<tr>";
//}
//Таблица умножения
//echo '</table>';

$a = [
    'second',
    'third',
    'first'
];
if(2 > 0) {
    echo 'first';
}
if(1 > 0) {
    echo 'second';
}
if(2 > 0) {
    echo 'third';
}
$gb = new PDO('mysql:host=localhost;database=anna', 'root', '');
var_dump($gb);
////Для того чтобы сделать обычный запрос мы его сначала подготавливаем
//$sql = "SELECT * FROM";
//$result = $gb->query($sql);//MYsql query
////Применяем метод featch,куда передаем тип данных
//echo "<h2> Вывод записей Базы данных</h2>";
//while($user = $result->fetch()) {
//    var_dump($user);
//    //Далее следует вывод на экран
////    echo "{$user["1"]}.Username :{$user['username']},Password {$user['password']}.<br>";
//}
//
//var_dump($gb);
$x = 1;
echo '<table border = "1">';
while($x < 10) {
    $x++;
    echo "<tr>";
    $y = 1;
    while($y < 10) {
        echo "<td>$x $y = " . $x * $y . "</td>";
$y++;
}
    echo "<tr>";
}