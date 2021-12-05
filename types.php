<?php

//use function

$name = 'Max';
echo $name . ' ' . gettype ($name) . ' ' . '<br>';

$age = 30;
echo $age . ' ' . gettype ($age) . ' ' . '<br>';

$money = 99.9;
echo $money . ' ' . gettype ($money) . ' ' . '<br>';

$is_rain = true;
echo $is_rain . ' ' . gettype ($is_rain) . ' ' . '<br>';

echo $is . ' ' . gettype ($is) . ' ' . '<br>';

echo '<hr>';

if ($name) {
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}
//  пересмотреть из репозитория
$name1 = null; 
if ($name1) {
    echo '$name1 true <br>';
} else {
    echo '$name1 false <br>';
}

if (0 == "") {
    echo '$0 == "" true <br>';
} else {
    echo '$0 == "" false <br>';
}

if (0 == "") {
    echo '$0 === "" true <br>';
} else {
    echo '$0 === "" false <br>';
}
// разница двойных и одинарных кавычек
$message1 = "Значение переменной name = $name";
echo $message1;
echo '<br>';
$message2 = 'Значение переменной name = $name';
echo $message2;
echo '<br>';

echo 'My name\'s Max <br>';  

