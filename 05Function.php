<?php
// Simple function
echo "Function Data: <br>";

function hello()
{
    echo "Simple function  <br>";
}
hello();

// Parameterized function
$a = 10;
$b = 20;

function add($a, $b)
{
    echo " Parameterized function sum is :" . ($a + $b);
}
add($a, $b);

// Function with return value
function isOdd($num) {
    return $num % 2 !== 0;
}

$odd = isOdd(6);
echo $odd ? '<br> Odd' : '<br> Even';

// Function with return value
function printValue($val){
    return $val;
}

$val = printValue('<br> ok bye');
echo " <br> Return value from function: " . $val;

// Calculator function with two values and an operator
function cal($a, $op, $b){
    if($op == '-'){
        return $a - $b;
    } elseif($op == '/'){
        return $a / $b;
    } elseif($op == '+'){
        return $a + $b;
    } else{
        return '<br> Invalid Choice';
    }
}

$val = cal(20, '/', 2);
echo " <br> Calculator Result: " . $val;

// Pass by Value
function firstNum($num){
    return $num + 5;
}

$num = 10;
$resultByValue = firstNum($num);
echo " <br> Pass by Value Result: " . $resultByValue;

// Pass by Reference
function secondNum(&$num){
    return $num + 5;
}

$resultByReference = secondNum($num);
echo " <br> Pass by Reference Result: " . $resultByReference;

// Variable function in PHP
function checkName($name){
    return $name;
}

$name = 'checkName';
echo " <br> Variable function result: " . $name(' Variable functions successfully run');

// Anonymous function
$nameSecond = function ($name){
    return $name;
};

echo " <br> Anonymous function result: " . $nameSecond(' Anonymous function / function without name');

// Recursive functions (Factorial)
function fac($n) {
    if ($n == 1) {
        return 1;
    }

    return $n * fac($n - 1);
}

// Example usage:
$result = fac(5);
echo "<br> Factorial Result: " . $result;  // Output: 120 (5! = 5 * 4 * 3 * 2 * 1)

?>
