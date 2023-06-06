<?php 
class Customer{
    public $name,$email,$phone,$address,$creditLimit;

    function __construct($name,$email,$phone,$address){
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->address=$address;
    }
    function display(){
        echo "Name :" . $this->name . " Email :" . $this->email;
    }

    function setData(){
        $this->name="Phue";
        $this->email="phue@gmail.com";
    }

    function setData2(){
        $this->name="David";
        $this->email="david@gmail.com";
        $this->creditLimit=500000000;
    }
}
//object creation
// $customer1=new Customer();//customer object
// $customer2=new Customer();
// //call instance method
// $customer1->setData();
// $customer1->display();

// //set instance attributes
// $customer1->phone="0928293333";
// $customer1->creditLimit=20000000;

// echo "<br>";
// echo "Phone :" . $customer1->phone;
// echo " CreditLimit :" . $customer1->creditLimit;

// //customer 2 => David,david@gmail.com, 500000000
// $customer2->name="David";
// $customer2->email="david@gmail.com";
// $customer2->creditLimit=500000000;

// echo "<br>";
// echo " Name :" . $customer2->name;
// echo " Email :" . $customer2->email;
// echo " CreditLimit :" . $customer2->creditLimit;
// echo "<br>";

// $customer2->setData2();
// $customer2->display();

$customer1=new Customer("Phue","phue@gmial.com","09294834","mgy");
$customer2=new Customer("David","david@gmail.com","02392048","sg");

$customer1->display();
$customer2->display();
?>

