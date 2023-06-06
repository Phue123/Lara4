<?php
class Employee{
    public $name,$email,$phone,$position,$dept;
    private $basic_salary;
    function __construct($name,$email,$phone,$position,$dept){
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->position=$position;
        $this->dept=$dept;
        //$this->basic_salary=$basic_salary;
    }

    function displayInfo(){
        echo "Name :" . $this->name ." Email :" . $this->email ." Phone :". $this->phone ." Position :" . $this->position. " Department :" . $this->dept . " Basic Salary :" . $this->basic_salary;
         //echo $this->calculateNetSalary();
    }

    private function calculateNetSalary($absent_day=0){
        if($absent_day==0){
            $netsalary=30 + $this->basic_salary;
        }else{
            $daily_wages=$this->basic_salary/30;
            $netsalary=$this->basic_salary - ($absent_day * $daily_wages) ;
        }
        return $netsalary;
    }

    function getSalary(){
        return $this->basic_salary;
    }
    function setSalary($new_salary){
        $this->basic_salary=$new_salary;
    }
}

class Wages extends Employee{
    public $daily_wage;
    function __construct($name,$email,$phone,$position,$dept,$daily_wage){
        parent::__construct($name,$email,$phone,$position,$dept);
        $this->daily_wage=$daily_wage;
    }
}

class Staff extends Employee{
    public $bonus,$basic_salary;
    function __construct($name,$email,$phone,$position,$dept,$bonus,$basic_salary){
        parent::__construct($name,$email,$phone,$position,$dept);
        $this->bonus=$bonus;
        $this->basic_salary=$basic_salary;
    }
}

$employee1=new Employee("David","david@gmail.com","+2324209","PM","SE",4000);
$employee1->setSalary(10000);
$employee1->displayInfo();
//echo $employee1->calculateNetSalary(0);
echo "<br>";


$wages=new Wages("Tun Tun","tuntun@gmail.com","0942942","mgy","PM",9800);
$wages->displayInfo();

$employee2=new Employee("Bryn","bryn@gmail.com","+2300903","AM","Java",3000);
$employee2->displayInfo();
//echo $employee2->calculateNetSalary(3);
echo "<br>";


?>