<?php

class Animal {
    public function eat() {
        echo "Animal is eating. parent class method";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog is barking. child class method";
    }
}

$dog = new Dog();
$dog->eat();  // Output: Animal is eating.
$dog->bark(); // Output: Dog is barking.

?>