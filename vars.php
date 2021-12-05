<?php
$name = 'Max';
$age = '33';

echo $name;
echo '<br>';
echo $age;

$name = 'Fax';
echo '<br>';// переход на следующую строку
echo $name;
echo '<br>';
$lastName = 'Есть 1';
$last_name =  'Есть 2';
echo $last_name;
echo "<br>";
echo $lastName;
echo '<br>';

/** тратата
 * тата
 * та
 * та
 *  */
/** тратата
 * тата
 * та
 * та
 *  */
/** тратата
 * тата
 * та
 * та
 *  */

$full_name = $name . ' '. $lastName;
echo $full_name;
echo '<br>';

$word = 'lower_case';
$word = strtoupper($word);
echo $word;
echo '<br>';
$word = strtolower($word);
echo $word;
echo '<br>';

$password = ' qwerty ';
echo '!' . $password . '!';
echo '<br>';
echo trim($password) . '!';

$number = 5 * 5;
echo '<br>';
echo $number * 2;
echo '<br>';


//цена товара
$gamburger = 4.95;
$cocktail = 1.95;
$coca_cola = 0.85;
//количество товара 
$gamburger_q = 2;
$cocktail_q = 1;
$coca_cola_q = 1;

$tea_base = 0.075;
$nds_base = 0.16;

$summ = ($gamburger * $gamburger_q + $cocktail * $cocktail_q + $coca_cola * $coca_cola_q);
echo $summ;
echo '<br>';

$tea = $summ * $tea_base;
echo $tea;
echo '<br>';

$nds = ($summ + $tea) * $nds_base;  
echo $nds;
echo '<br>';

$final = $summ + $tea + $nds;
echo $final;
echo '<br>';

// чек
// yf gtxfnm
echo '<br>';
echo 'goods' . ' : ' . 'price' . '$ X ' . 'quantity' . ' = ' . 'sum' . '$';
echo '<br>';
echo 'gamburger' . ' : ' . $gamburger . '$ X ' . $gamburger_q . ' = ' . $gamburger * $gamburger . '$';
echo '<br>';
echo 'cocktail' . ' : ' . $cocktail . '$ X ' . $cocktail_q . ' = ' . $cocktail * $cocktail_q . '$';
echo '<br>';
echo 'coca_cola' . ' : ' . $coca_cola . '$ X ' . $coca_cola . ' = ' . $coca_cola * $coca_cola_q . '$';
echo '<br>';
echo 'tea' . ' : ' . $tea_base*100 . '% =  ' . $tea . '$';
echo '<br>';
echo 'nds' . ' : ' . $nds_base*100 . '% =  ' . $nds . '$';
echo '<br>';
echo 'final' . ' =  ' . $final . '$';
echo '<br>';