<?php
echo "Задание #1";
echo "<br>";
$name = 'Федор';
$age = 89;
echo "Меня зовут $name";
echo "<br>";
echo "Мне $age лет!" ;
echo "<br>";
echo "“!|\/’”\\";
echo "<hr>";
echo "Задание #2";
const PICTURE = 80;
const FELT_PEN = 23;
const PENCILS = 40;
const PAINTS = PICTURE - (FELT_PEN + PENCILS);
echo "<br>";
echo 'выполненные красками '.PAINTS. ' рисунков';
echo "<hr>";
echo "Задание #3";
echo "<br>";
$age = -5;
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
};
echo "<hr>";
echo "Задание #4";
echo "<br>";
$day = 8;
switch ($day) {
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "<hr>";
echo "Задание #5";
echo "<br>";
$bmw["name"] = "BMW";
$bmw["mode"] = "X5";
$bmw["speed"] = "120";
$bmw["doors"] = "5";
$bmw["year"] = "2015";


$toyota = array("name" => "toyota", "mode" => "25", "speed" => "120", "doors" => 5, "year" => "1980");
$opel = array("name" => "opel", "mode" => "25", "speed" => "45", "doors" => 1, "year" => "1900");
print_r($bmw);
echo "<br>";
print_r($toyota);
echo "<br>";
print_r($opel);

$cars = [$bmw, $toyota, $opel];
echo "<br>";
print_r($cars);

for($i = 0; $i< count($cars); $i++ ) {
    echo "<br>";
    echo "CAR {$cars[$i]["name"]}<br>";
    foreach ($cars[$i] as $key => $value) {
        if($key != "name") {
            echo "<b>$value</b> ";
        }
    }
}

echo "<hr>";
echo "Задание #6";
echo "<br>";
echo "<table>";
for($i = 1; $i<=10; $i++) {
    echo "<tr>";
        for($j = 1; $j<=10; $j++) {
            if($i%2 == 0 && $j%2 == 0) {
                echo '<td>('.$i*$j.')</td>';
            }
            elseif ($i%2 == 1 && $j%2 == 1) {
                echo '<td>['.$i*$j.']</td>';
            }
            else {
                echo '<td>'.$i*$j.'</td>';
            }
        }
    echo "</tr>";
}
echo "</table>";