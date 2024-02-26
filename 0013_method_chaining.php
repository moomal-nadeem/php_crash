<?php
class MethodChaning {
    public  function f1() {
        echo "function 1 run";
        return $this;
    }
    public  function f2() {
        echo "function 2 run";
        return $this;
    }
    public  function f3() {
        echo "function 3 run";
        return $this;
    }

}

$obj = new MethodChaning();
 $obj->f1()->f2()->f3();
?>