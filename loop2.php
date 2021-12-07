<?php
// циклы
// пока
$number = 0;
while ($number < 10) {
    echo $number . '<br>';
    $number += 1; // или $number = $number + 1; или $number++;
}

echo '<select>';
echo '<option selected disabled>-- Выберите значение --</option>';
for ($i = 1; $i < 10; $i++){
    echo "<option> $i </option>";
}
echo '</select>';

// задача по циклам

// температура от -50 до +50 по фарингейту, вода замерзает 23, вода закипает 212
// температура от  до  по Цельсию, вода замерзает 0, вода закипает 100
// Ф в Ц: вычитаем 32 и умножаем на 5 и делим на 9
// вывести все значение по ф от -50 до 50 и перевести сразу справа в Цельсий
// теперь наоборот

echo '<select>';
echo '<option selected disabled>-- Выберите значение --</option>';
for ($f = 0; $f < 10; $f++){
    echo "<option> $f </option>";
    echo
}
echo '</select>';

echo '<hr>';
$cel = 0;
$far = -50;
while ($far < 51){
    $cel = ($far - 32) * 5 / 9;
    echo $far . ' F = ' . round($cel, 2) . ' C' . '<br>';// round округление до 2х знаков после запятой
    $far++;
}

echo '<hr>';
$cel = -50;
$far = 0;
while ($cel < 51){
    $far = $cel * 9 / 5 + 32;
    echo $cel . ' C = ' . round($far, 2) . ' F' . '<br>';
    $cel++;
}