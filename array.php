<?php

#$name = 'Вася';
#$age = 99;
#$city = 'London';

#$name2 = 'Иван';

$numbers = [1, 2, 3, 4, 5];

echo $numbers [1];
echo '<br>';
$numbers [15];// ничего не выводит
echo '<br>';
var_dump($numbers [15]); // выведет null
echo '<br>';

$count = count($numbers); // выводим длинну массива
echo $count;
echo '<br>';
for ($i = 0; $i < $count; $i++){ // выводим элементы массива
    echo "$i $numbers[$i] <br>";
}
echo '<hr>';
// еще вариант вывода массива
foreach ($numbers as $number){
echo "$number <br>";
}
// еще вариант с выводом ключей массива
echo '<hr>';
foreach ($numbers as $key => $value ){
echo "$key : $value <br>";
}

$n_numbers = [];
for ($i = 0; $i < 10; $i++){ // заполняем массив значениями от 0 до 9
    $n_numbers[] = $i;
}

$n_numbers[10] = 100; // добавляем(заменяем) данные в массиве по индексу 10, будет ключ 10 со значением 100
$n_numbers[44] = 4 * 8;// добавляем(заменяем) данные в массиве , будет ключ 44 со значением 32

echo '<pre>';
print_r($n_numbers);

$person = [ // ассоциативный массив
    'name' => 'Voo',
    'age' => 30,
    'city' => 'London',
    'language' => 'php'
];
$person['car'] = true; // добавляем ключ car и значение true (1) в массив
$person[ = ''; // добавляем ключ car и значение true (1) в массив


echo '<pre>';
print_r($person);

unset($person['name']); // полностью удаляем ключ из массива
echo '<pre>';
print_r($person);