<!-- late static binding -->

<?php 
class staticClass {
    public static $name = 'Moomal Nadeem';
    public static function showName() {
        echo static::$name;  //show data of the class from where is is called
        // echo self::$name;    show itself class date
    }
}

class B extends staticClass{
    public static $name = 'Nimra Nadeem';
}

$obj = new B(); 
$obj->showName();
?>