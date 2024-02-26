<?php
class Test {
    public $name;
}

class Test2 {
    function intType(int $value) {
        return $value;
    }

    function stringType(string $value) {
        return $value;
    }

    function booleanType(bool $value) {
        return $value;
    }

    function floatType(float $value) {
        return $value;
    }

    function arrayType(array $value) {
        return $value;
    }

    function objectType(Test $value) {
        return $value;
    }

    function callableType(callable $value) {
        return $value();
    }

    function iterableType(iterable $value) {
        foreach ($value as $item) {
            echo $item . " ";
        }
    }

    function mixedType(mixed $value) {
        return $value;
    }

    function unionType(int|float $value) {
        return $value;
    }
}

$obj = new Test2();

echo $obj->intType(99) . "<br>";                 // Output: 99
echo $obj->stringType('Hello') . "<br>";         // Output: Hello
echo $obj->booleanType(true) . "<br>";           // Output: 1
echo $obj->floatType(3.14) . "<br>";             // Output: 3.14

$arr = [1, 2, 3];
print_r($obj->arrayType($arr));                  // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
echo "<br>";

$obj1 = new Test();
$obj1->name = "John";
echo $obj->objectType($obj1)->name . "<br>";     // Output: John

echo $obj->callableType(function() {
    return "Hello, World!";
}) . "<br>";                                    // Output: Hello, World!

$arr = [1, 2, 3];
$obj->iterableType($arr);                       // Output: 1 2 3
echo "<br>";

echo $obj->mixedType('Mixed') . "<br>";          // Output: Mixed
echo $obj->mixedType(123) . "<br>";              // Output: 123

echo $obj->unionType(5) . "<br>";                // Output: 5
echo $obj->unionType(3.14) . "<br>";             // Output: 3.14
?>
