<?php
class OverloadingClass {
    public function sum(...$numbers) {
        return array_sum($numbers);
    }
}

$obj = new OverloadingClass();
echo $obj->sum(1, 2);        // Output: 3
echo $obj->sum(1, 2, 3);     // Output: 6
echo $obj->sum(1, 2, 3, 4);  // Output: 10
?>
