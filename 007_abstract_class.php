<?PHP
abstract class A{
    public $name ="Moomal";
    protected $age = 25;
    function college(){
     echo "Superior College";
    }
    abstract protected function subject();
}
class B extends  A{
function getAge(){
return $this->age;
}
function setAge(){
    return $this->age = 22;
    }
public function subject(){
    echo "Math";
}
}

$obj  = new B();
echo $obj->name;
echo $obj->getAge();
echo $obj->setAge();
echo $obj->college();
echo $obj->subject();

?>