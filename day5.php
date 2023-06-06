<?php
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

    function calSubTotal($shopping_list){ //function in function
        $total=0;
        foreach($shopping_list as $key=>$value)
        {
            $total+=$value['price'] * $value['qty'];
        }
        function calTax($amount,$rate){
            $tax=$amount * $rate/100;
            return $tax;
        }
        return $total;
    }
    $subtotal=calSubTotal($shopping);

    $rate=12.5;
    $subtax=calTax($subtotal,$rate);

    $totalall=$subtotal+$subtax;
    echo "Total all: $totalall";
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