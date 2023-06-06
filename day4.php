<?php
$mark1=80;
$mark2="67";

echo gettype($mark1);
echo gettype($mark2);

var_dump($mark1==$mark2); //equal value
var_dump($mark1===$mark2); // identical (value,type)
$mark2=50;
var_dump($mark1<=>$mark2); //spaceship greater than(1),lesssthan(-1),equal(0)

$result=$mark2 >75 ? "Distinction" : "Pass"; //ternary operator(if condition)

$result1=$mark1 && $mark2 >=50 ? "Pass" : "Fail";

echo "<br>".$result;
echo "<br>".$result1;


$mark=75;
$result2= $mark >= 75 ? "Distinction" : ($mark >=65 ? "Credit" : ($mark >=50 ? "Pass" : "Fail"));
echo "<br>".$result2;

$student=null;
$status1=$student ?? "default user";
echo "<br>".$status1;
echo "<br>";

switch(true){
    case ($mark1>=75): $status="Distinction";break;
    case ($mark1>=75): $status="Credit";break;
    case ($mark1>=50): $status="Pass";break;
    default: $status="Fail";
}
echo $status;
echo "<br>";

$quantity=200;
$unit_price=12000;
switch(true){
    case ($quantity>=200): $discount=0.1*$unit_price;break;
    case ($quantity>=150): $discount=0.08*$unit_price;break;
    case ($quantity>=100): $discount=0.05*$unit_price;break;
    case ($quantity>=50): $discount=0.03*$unit_price;break;
    default: $discount=0;
}
echo "<br> Discount ".$discount;
echo "<br> Total Discount ".$totaldis=$quantity*$discount;
echo "<br> Total ".$total=$quantity*$unit_price;
echo "<br> Total Cash ".$totalcash=$total-$totaldis;
echo "<br>";

$marks=[78,67,98,99];
$count=0;
$totalmarks=0;
while($count<sizeof($marks)){
    $totalmarks+=$marks[$count];
    $count++;
}
echo "<br> total marks:".$totalmarks;
echo "<br>";

$shopping=[
    [
        'name'=>'Ma Ma Noodle',
        'price'=>450,
        'qty'=>180
    ],
    [
        'name'=>'UFL book',
        'price'=>1780,
        'qty'=>130
    ],
    [
        'name'=>'Lucky Water bottle',
        'price'=>2200,
        'qty'=>12
    ]
    ];

//     //1: function definition
//    function calculate_total_cash() //no parameter return value
//     {
//         $total=0;
//         foreach($GLOBALS['shopping'] as $key=>$value) //GLOBALS local scope to global scope (used)
//         {
//             $total+=$value['price'] * $value['qty'];
//         }

//         switch(true){
//             case ($total>300000) : $discount=0.03*$total;break;
//             case ($total>150000) : $discount=0.01*$total;break;
//             default :$discount=0;
//         }

//         $total_cash=$total-$discount;
//         echo "<br> Total Cash is ". $total_cash;

//     }

//     //2: function call
//     calculate_total_cash();



// //1: function definition
// function calculate_total_cash($shopping_list) // parameter without return value
// {
//     $total=0;
//     foreach($shopping_list as $key=>$value) //$GLOBALS (not used)
//     {
//         $total+=$value['price'] * $value['qty'];
//     }

//     switch(true){
//         case ($total>300000) : $discount=0.03*$total;break;
//         case ($total>150000) : $discount=0.01*$total;break;
//         default :$discount=0;
//     }

//     $total_cash=$total-$discount;
//     echo "<br> Total Cash is ". $total_cash;

// }

// //2: function call
// calculate_total_cash($shopping);



//1: function definition
function calculate_total_cash($shopping_list) // parameter with return value
{
    $total=0;
    foreach($shopping_list as $key=>$value) //$GLOBALS (not used)
    {
        $total+=$value['price'] * $value['qty'];
    }

    switch(true){
        case ($total>300000) : $discount=0.03*$total;break;
        case ($total>150000) : $discount=0.01*$total;break;
        default :$discount=0;
    }

    $total_cash=$total-$discount;
    //echo "<br> Total Cash is ". $total_cash;
    return $total_cash;
}

//2: function call
$total_amount=calculate_total_cash($shopping);
echo "<br> Total amount : ". $total_amount;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>