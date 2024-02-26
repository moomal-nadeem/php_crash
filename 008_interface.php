<?php
interface interfaceOne{
    function interfaceOneFun1();
    function interfaceOneFun2();
}
interface interfaceTwo{
    function interfaceTwoFun1();
    function interfaceTwoFun2();
}


class testInterface implements interfaceOne, interfaceTwo{
    function interfaceOneFun1(){
        echo "interfaceOneFun1 run";
    }
    function interfaceOneFun2(){
        echo "interfaceOneFun2 run";
    }
    function interfaceTwoFun1(){
        echo "interfaceTwoFun1 run";
    }
    function interfaceTwoFun2(){
        echo "interfaceTwoFun2 run";
    }
}
$obj =new testInterface();
$obj->interfaceOneFun1();
$obj->interfaceOneFun2();
$obj->interfaceTwoFun1();
$obj->interfaceTwoFun2();
?>