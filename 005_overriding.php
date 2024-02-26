<?php
class parentClass{
   public $name = 'Dog';
   public function run(){
    echo "Dog run and walk";
   }
}
class childClass extends parentClass{
    public $name = 'Butter Fly';
    public function run(){
     echo "Butter Fly Fly ";
    }
 }
 $obj =new childClass();
 echo $obj->name;
 echo $obj->run();
?>