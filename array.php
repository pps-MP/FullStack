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


echo '<pre>';
print_r($person);

unset($person['name']); // полностью удаляем ключ из массива
echo '<pre>';
print_r($person);


echo '<hr>';

$colors = ['red', 'green', 'blue'];
$output = '';

foreach ($colors as $color){
    $output = $output . ' ' . $color;
}

$string_colors = implode(', ', $colors);
echo "$string_colors<br>";

$new_str = 'предложение из 4 слов';
$array = explode(' ', $new_str);

echo '<hr>';

print_r($array);

$numbers = [2, 4, 6, 1, 3];
print_r($numbers);

sort($numbers);

print_r($numbers);

echo '<hr>';
print_r($person);
sort($person); // нельзя использовать для асоциативных массивов

print_r($person);

$person = [ // ассоциативный массив
    'name' => 'Voo',
    'age' => 30,
    'city' => 'London',
    'language' => 'php'
];

asort($person); // сортировка асоциативныых массивоов
print_r($person);

ksort($person);// сортировка по ключам
print_r($person);

rsort($numbers);// обратная сортировка
print_r($numbers);

krsort($person); // обратная сортировка по ключам
print_r($person);

echo '<hr>';


$person = [
    ['name' => 'Voo',
    'age' => 30,
    'city' => 'London',
    'language' => 'php'
    ],
    ['name' => 'Doo',
    'age' => 90,
    'city' => 'Paris',
    'language' => 'python'
    ],
    ['name' => 'Lola',
    'age' => 18,
    'city' => 'Milan',
    'language' => 'java']
];

function sortByAge($a, $b){
    if ($a['age'] > $b['age']){
        return 1;   
    } else if ($a['age'] < $b['age']){
        return -1;    
    } else{
        return 0;
    }
}

function sortBySity($a, $b){
    if ($a['city'] > $b['city']){
        return 1;   
    } else if ($a['city'] < $b['city']){
        return -1;    
    } else{
        return 0;
    }
}

print_r($person);
usort($person, 'SortByAge');
print_r($person);

function sortBySity_1($a, $b){
    return $a['city'] <=> $b['city'];
    }

print_r($person);
usort($person, 'SortByAge');
print_r($person);

echo '<hr>';
$nOne = 10;
$nTwo = 15;

if ($nOne > $nTwo){
    return 1;   
} else if ($nOne < $nTwo){
    return -1;    
} else{
    return 0;
}
print_r($person);
usort($person, 'SortByAge');
print_r($person);

echo '<hr>';

$names = arrey_column($persons, 'name');

print_r($names);

array_multisort($name);


