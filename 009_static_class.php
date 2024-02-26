<?php 
class staticClass {
    public static $name = 'Moomal Nadeem';
    public static function college() {
        echo "Superior College";
    }
}

class B extends staticClass{
    function accessStatic(){
     echo parent::$name;   // access static class members and methods fields
    }
}

echo staticClass::$name;
staticClass::college();
$obj = new B(); 
$obj->accessStatic();
?>