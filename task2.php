<?php
echo "Задание #2";
const PICTURE = 80;
const FELT_PEN = 23;
const PENCILS = 40;
const PAINTS = PICTURE - FELT_PEN - PENCILS;
echo "<br>";
echo 'выполненные красками '.PAINTS. ' рисунков';
