<?php
echo "Задание #3";
echo "<br>";
$age = -5;
const MAJORITY = 18;
const PENSION = 65;
if ($age >= MAJORITY && $age <= PENSION) {
    echo 'Вам еще работать и работать';
} elseif ($age > PENSION) {
    echo 'Вам пора на пенсию';
} elseif ($age > 0 && $age < MAJORITY) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
};
