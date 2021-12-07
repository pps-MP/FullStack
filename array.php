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
