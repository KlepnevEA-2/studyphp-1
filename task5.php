<?php
echo "Задание #5";
echo "<br>";
$bmw["name"] = "BMW";
$bmw["mode"] = "X5";
$bmw["speed"] = "120";
$bmw["doors"] = "5";
$bmw["year"] = "2015";


$toyota = ["name" => "toyota", "mode" => "25", "speed" => "120", "doors" => 5, "year" => "1980"];
$opel = ["name" => "opel", "mode" => "25", "speed" => "45", "doors" => 1, "year" => "1900"];
print_r($bmw);
echo "<br>";
print_r($toyota);
echo "<br>";
print_r($opel);

$cars = [$bmw, $toyota, $opel];
echo "<br>";
print_r($cars);

for ($i = 0; $i < count($cars); $i++) {
    echo "<br>";
    echo "CAR: {$cars[$i]["name"]}<br>";
    foreach ($cars[$i] as $key => $value) {
        if ($key != "name") {
            echo "<b>$value </b>";
        }
    }
}
