<?php
echo "Задание #3";
echo "<br>";
$age = -5;
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age > 0 && $age < 18) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
};
