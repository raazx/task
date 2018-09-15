<?php

require_once 'Parent.php';

class ChildClass extends ParentClass {

    public $weight = 200;

    public function __construct() {
        parent::__construct();
        echo 'Child Constructor' . "<br />";
    }

    public function run() {
        parent::run();
        echo 'Child run.' . "<br />";
    }


    public static function getName() {

    }

    public static function getAge() {
        self::getName();
    }

}



class ChildClass2 extends ChildClass {
    public function __construct() {
        // parent::__construct();
        $parent = new ParentClass();
        echo 'Child Child Constructor' . "<br />";
    }
}