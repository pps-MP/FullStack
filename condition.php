<?php
$number = 1;
if ($number > 5) {
    echo '10 > 5';
    echo '<br>';
    echo '!'; 
};

echo '<br>';
echo 'эта строка выводится всегда';

if ($number < 5) {
    echo '<br>';
    echo 'число < 5';
    echo '<br>';
} else {
    echo '<br>';
    echo 'число >= 5';
    echo '<br>';
}

if ($number > 5) {
    echo '<br>';
    echo 'число > 5';
    echo '<br>';
} else if ($number >3) {
    echo '<br>';
    echo 'число меньше или равно 5, но больше 3';
    echo '<br>';
}else if ($number >0) {
    echo '<br>';
    echo 'число либо 1, либо 2, либо 3';
    echo '<br>';
}else {
    echo '<br>';
    echo 'число равно 0 или отрицаательное';
    echo '<br>';
}

$secon_number = 0;
echo '<hr>';

// если И:  $$ = and
if ($number > 0 and $second_number == 0) {
    echo '<br>';
    echo '$number > 0, и $second_number = 0';
    echo '<br>';
}
// если ИЛИ: or 
if ($number > 0 or $second_number == 0) {
    echo '<br>';
    echo '$number > 0, и $second_number = 0';
    echo '<br>';
}

if ($number <= 5) {
    echo '<br>';
    echo 'число <= 5, МЕНЬШЕ ИЛИ РАВНО';
    echo '<br>';
}
if ($number != 5) {
    echo '<br>';
    echo 'число не равно 5';
    echo '<br>';
}
// вывести одно из 3 сообщений
// если возраст меньше 7: Вы дошкольник
// если возраст старше 6 и младше 19: Вы в школе
// если возраст старше 18: Вы закончили школу

echo '<hr>';

$age = 2;

echo '<br>';

if ($age < 7 ) {
    echo 'Вы дошкольник';
} else if ($age > 6 and $age <19) {
    echo 'Вы в школе';
} else {
    echo 'Вы закончили школу';
}
echo '<br>';

$number = 10;
$number++;
echo $number;
echo '<br>';
$number--;
echo $number;
echo '<br>';

$n = 20;
$new_n = $n++;// сначала присвоить новое $n к $new_n, а потом прибавить к $n 1; в итоге получим 20
echo $new_n;
echo '<br>';

$n = 20;
$new_n = ++$n;// сначала прибавить к $n 1, а потом присвоить новое $n к $new_n; в итоге получим 21
echo $new_n;
echo '<br>';

$n1 = -1;
if (++$n1) {
    echo 'true';
} else {
    echo 'false';
}

$n3 = 2;
$n3 = $n3 + 1;
$n3 += 1;
$n3 *= 2;
echo '<br>';

$name = 'Max';
$name .= ' Makc';
echo $name;

echo 