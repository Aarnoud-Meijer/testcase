<?php
// class test

interface basemodel{

//    public $somevar; // <- nope

    public function test();

    //private function anothertest(); // <- nope
    public function anothertest();

//    public function notexict(); // <- nope
}

interface secondbase extends basemodel { }

class childmodel implements secondbase{
    public function test(){

    }
    //private function anothertest(){ // <- nope

    public function anothertest(){

    }
}

class testmodel extends childmodel{
    // <- look ma, no methods, no error
}


echo "done ";
?>
