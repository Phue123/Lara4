<?php
include_once 'day9_1_oop.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$dept=$_POST['dept'];
$basic_salary=$_POST['basic_salary'];

$emp=new Employee($name,$email,$phone,$position,$dept,$basic_salary);
$emp->displayInfo();
echo $emp->calculateNetSalary(3);
?>