<?php
class Animal {
    public function eat() {
        echo "Animal is eating.";
    }
}

class Mammal extends Animal {
    public function giveBirth() {
        echo "Mammal gives birth.";
    }
}

class Dog extends Mammal {
    public function bark() {
        echo "Dog is barking.";
    }
}

$dog = new Dog();
$dog->eat();       // Output: Animal is eating.
$dog->giveBirth(); // Output: Mammal gives birth.
$dog->bark();      // Output: Dog is barking.



?>