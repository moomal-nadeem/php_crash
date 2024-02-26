<?php
class food{
public $name = 'fruit', $price;
function parentClass(){
    echo "Hi this is parent class";
}
}
class fruit extends food{
public $color;
function childClass(){
    echo "Hi this is child class";
}

}
$obj = new fruit();
echo $obj->parentClass();
echo $obj->name;

?>