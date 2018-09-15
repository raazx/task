<?php 

class Poly
{
    private $salary;

    public function setSalary($salary)
    {
        if ($salary <= 0) {
            $this->salary = 100;
        } else {
            $this->salary = ($salary * 100);
        }
    }

    public function getSalary()
    {
        echo $this->salary / 100;
    }

}


$object = new Poly();
$object->setSalary(2000);
$object->getSalary();