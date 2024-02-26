<?php
// priority 2
trait Run {
    public function run() {
        echo "Traid function run";
    }
}
// priority 3
class BaseClass{
    public function run() {
        echo "Base class function run";
    }
}
// priority 1
class derivedClass extends BaseClass{
    use Run;
    public function run() {
        echo "Derived class function run";
    }
}

$obj = new derivedClass();
$obj->run();

?>