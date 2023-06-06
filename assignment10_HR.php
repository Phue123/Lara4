<?php
abstract class Employee{
    public $name,$dob,$phone,$education,$address,$nrc,$working_day,$holiday,$absent_day,$date;
    public static $employee;

    function __construct($name,$dob,$phone,$education,$address,$nrc,$date,$working_day,$holiday,$absent_day){
        $this->name=$name;
        $this->dob=$dob;
        $this->phone=$phone;
        $this->education=$education;
        $this->address=$address;
        $this->nrc=$nrc;
        $this->working_day=$working_day;
        $this->holiday=$holiday;
        $this->absent_day=$absent_day;
        $this->date=$date;
        self::$employee++;

    }
    function displayInfo(){
        echo "Name : " .$this->name ."<br>";
        echo "Phone : " .$this->phone ."<br>";
        echo "Education :" .$this->education ."<br>";
        echo "Absent Day :" .$this->absent_day ."<br>";
    }
    abstract function attendance_day();
}

class Permanent extends Employee{
    public $pos;
    public static $permanent;
    public static $stafflist;
    function __construct($name,$dob,$phone,$education,$address,$nrc,$date,$pos,$working_day,$holiday,$absent_day)
    {
        parent::__construct($name,$dob,$phone,$education,$address,$nrc,$date,$working_day,$holiday,$absent_day);
        $this->pos=$pos;
        self::$permanent++;
        self::$stafflist[]=$this;
    }

    function attendance_day(){
        $attendant_day=($this->working_day + $this->holiday) - $this->absent_day;
        return $attendant_day;
       }

    static function displayStaff(){
        foreach(Permanent::$stafflist as $staff){
            echo "Name :" .$staff->name .":" .$staff->dob.":". $staff->phone.":".$staff->education.":".$staff->address.":".$staff->nrc.":".$staff->date.":".$staff->pos.":".$staff->working_day.":".$staff->holiday.":".$staff->absent_day ."<br>";
        }
    }
}

class Wages extends Employee{
   public $basic_salary;
   public static $wage;
   public static $wagelist;
   function __construct($name,$dob,$phone,$education,$address,$nrc,$date,$basic_salary,$working_day,$holiday,$absent_day)
   {
    parent::__construct($name,$dob,$phone,$education,$address,$nrc,$date,$working_day,$holiday,$absent_day);
    $this->basic_salary=$basic_salary;
    self::$wage++;
    self::$wagelist[]=$this;
   }

   function displayWage(){
    foreach(Wages::$wagelist as $wages){
        echo "Name :" .$wages->name .":" .$wages->dob.":". $wages->phone.":".$wages->education.":".$wages->address.":".$wages->nrc.":".$wages->date.":".$wages->basic_salary.":".$wages->working_day.":".$wages->holiday.":".$wages->absent_day ."<br>";
    }
   }

   function attendance_day(){
    $attendant_day=($this->working_day + $this->holiday) - $this->absent_day;
    return $attendant_day;
   }

   public function netSalary(){
    $salary_per_day=$this->basic_salary / 30;
    if($this->absent_day==0){
        $net_salary=($this->attendance_day() * $salary_per_day)+1000;
    }else{
        $net_salary=$this->attendance_day() * $salary_per_day;
    }
    return $net_salary;
   }
}
$staff1=new Permanent("Phue","15.6.98","09238974340","B.C.Sc","mgy","8/makana(N)123456","8.5.20","Web Developer",22,8,0);
$staff2=new Permanent("Poe","12.9.98","09238982430","B.C.Tech","mgy","8/makana(N)234567","23.8.20","Junior Developer",22,8,3);

$wage1=new Wages("Tun Tun","12.2.99","00234349035","First year","mgy","8/makana(N)234567","1.1.23",180000,22,8,2);
$wage2=new Wages("Aung Aung","3.4.99","09287323678","Second year","mgy","8/tataka(N)234598","2.1.23",180000,22,8,0);

echo "Total Number of Employee : " .Employee::$employee ."<br>";
echo "Total Number of Permanent : " .Permanent::$permanent ."<br>";
echo "Total Number of Wages : " .Wages::$wage ."<br>";
echo "<br>";

Permanent::displayStaff();
echo "<br>";

Wages::displayWage();
echo "<br>";

echo "Staff 1 of attendance day :" .$staff1->attendance_day() ."<br>";
echo "<br>";

echo "Staff 2 of attendance day :" .$staff2->attendance_day() ."<br>";
echo "<br>";

echo "Wage 1 of attendance day :" .$wage1->attendance_day() ."<br>";
echo "Net Salary for wage 1 :" . $wage1->netSalary() ."<br>";
echo "<br>";


echo "Wage 2 of attendance day :" .$wage2->attendance_day() ."<br>";
echo "Net Salary for wage 2 :" . $wage2->netSalary() ."<br>";
?>