<?php
// class test

interface basemodel{

//    public $somevar; // <- nope

    public function test();

    //private function anothertest(); // <- nope
    public function anothertest();

//    public function notexict(); // <- nope
}


class childmodel implements basemodel{
    public function test(){

    }
    //private function anothertest(){ // <- nope

    public function anothertest(){

    }
}



echo "done ";
?>
