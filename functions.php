<?php

function say_Hello(){
    echo 'Hello<br>';
}
say_hello();

function plus_one ($a){
    echo ++$a . '<br>';
}

function multy_play($a, $b){
    echo $a * $b . '<br>';
}

plus_one(55);
$numb = 18;
plus_one($numb);

multy_play(10, 16);

function sum_num($a, $b, $c = 0){ // $C=0 необязательный параметр 
    echo $a + $b + $c . '<br>';
}

sum_num(1, 2, 3);
sum_num(1, 2);

function return_plus_1($a){ // $C=0 необязательный параметр 
    return ++$a;
}

echo return_plus_1(4);

$result = return_plus_1(5);
echo '<br>';
echo "Результатат = $result ";
echo '<br>';
var_dump(return_plus_1(5));

function return_plus_2($a){ // $C=0 необязательный параметр 
    return [
        'old' => $a,
        'new' => ++$a
    ];
}

echo return_plus_2(4);

$numbers = [1, 2, 3, 9, 5, 6];
echo '<br>';   

function max_number(array $numbers){
    $max = $numbers[0];
    foreach ($numbers as $numbers){
        if ($numbers > $max){
            $max = $numbers;
        }
    }
    return $max;
}

echo max_number($numbers) . '<br>';

function sum_num_1(Array $numbers){
    $res = 0;
    foreach ($numbers as $numbers){
        $res = $res + $numbers;
        //$res += $numbers;
    }
    return $res;
}
echo sum_num_1($numbers);


