<?php 

class ParentClass {
    public $hairColor = "black";
    public $tall = 200;

    public function __construct() {
        echo 'Parent Constructor' . "<br />";
    }
    
    protected function run() {
        echo 'Run quickly.';
    }

    public function walk() {
        $this->run();
        echo 'Walk normally.';
    }
}