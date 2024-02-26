<?php
trait Fly {
    public function fly() {
        echo "Flying!";
    }
}

trait Swim {
    public function swim() {
        echo "Swimming!";
    }
}

class Bird {
    use Fly;
}

class Fish {
    use Swim;
}

class FlyingFish {
    use Fly, Swim;
}

$bird = new Bird();
$bird->fly(); // Output: Flying!

$fish = new Fish();
$fish->swim(); // Output: Swimming!

$flyingFish = new FlyingFish();
$flyingFish->fly(); // Output: Flying!
$flyingFish->swim(); // Output: Swimming!

?>