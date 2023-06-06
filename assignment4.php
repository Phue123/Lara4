<?php

$history=
[
    [   'description'=>'Previous',
        'unit'=>3692,
    ],
    [
        'description'=>'Current',
        'unit'=>3900,
    ]
];
echo $history[1]['unit']-$history[0]['unit'];

// $units=234;
// switch(true){
//     case($units>=1 && $units<=100) : $cash=$units*100;break;
//     case($units>100 && $units<=200) :$first=100*100;$remain=$units-100;$cash=$first+($remain*200);break;
//     case($units>200) : $first=(100*100)+(100*200);$remain=$units-200;$cash=$first+($remain*300);
// }
// echo $cash;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Account</th>
                            <th>12/47/53</th>
                            <th>Meter No(TL-371877)</th>
                            <th>Rate</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Rate</th>
                            <th>1</th>
                            <th>1 to 100 units</th>
                            <th>200 MMK</th>
                            <th><?php echo cal_electrical_bill($history)[0]; ?></th>
                        </tr>
                        <tr>
                            <th>Meter Reading day</th>
                            <th>03/01/2016</th>
                            <th>100 to 200 units</th>
                            <th>250 MMK</th>
                            <th><?php echo cal_electrical_bill($history)[1];?></th>
                        </tr>
                        <tr>
                            <th colspan='2'></th>
                            <th>200 above</th>
                            <th>300 MMK</th>
                            <th></th>
                        </tr>
                        
                        <?php
                        
                        function cal_electrical_bill($history){
                        $different=$history[1]['unit']-$history[0]['unit'];
                         switch(true){
                         case($different>=1 && $different<=100) : $cash=$different*20;break;
                         case($different>100 && $different<=200) : $firstcal=100*200; $remain=$different-100; $secondcal=$remain*250; $cash=$firstcal+$secondcal;break;
                         case($different>200) : $firstcal=(100*200)+(100*250); $remain=$different-200; $secondcal=$remain*300; $cash=$firstcal+$secondcal;
                        } 

                        return array($firstcal,$secondcal,$cash);
                        } 
                        $subtotal=cal_electrical_bill($history)[2];
                        
                        function calTax($amount,$rate){
                            $tax=$amount * $rate/100;
                            return $tax;
                        }

                        $rate=12.5;
                        $subtax=calTax($subtotal,$rate);
                        
                        $total2=$subtotal+$subtax;

                        for($row=0;$row<sizeof($history);$row++){
                            
                            echo "<tr>";
                            echo "<td>". $history[$row]['description']. "</td>";
                            echo "<td>". $history[$row]['unit']. "</td>";
                            echo "<td colspan='3'></td>";
                            echo "</tr>";
                        }  
                        $different=0;
                        echo "<tr>
                        <th>Different</th>";
                        echo "<th>". $different=$history[1]['unit']-$history[0]['unit']. "</th>";
                        echo "<th colspan='3'></th>";
                        echo "</tr>";
                           
                          //$total_cash=cal_electrical_bill($different);
                          $maintainance_fee=500;
                          echo "<tr>
                          <th colspan='2'></th>
                          <th colspan='2'> Total :</th>";
                          echo "<th>". cal_electrical_bill($history)[2] ." MMK </th>";
                          echo "</tr>";

                          echo "<tr>
                          <th colspan='2'></th>
                          <th colspan='2'> Maintenance Fee :</th>";
                          echo "<th>". $maintainance_fee ." MMK </th>";
                          echo "</tr>";

                          echo "<tr>
                          <th colspan='2'></th>
                          <th colspan='2'> Total with maintenance :</th>";
                          echo "<th>". $total1=cal_electrical_bill($history)[2]+$maintainance_fee ." MMK </th>";
                          echo "</tr>";

                          echo "<tr>
                          <th> Tax :</th>
                          <th> 12.5 % </th>
                          <th colspan='2'> Total with tax :</th>";
                          echo "<th>". $total2 ." MMK </th>";
                          echo "</tr>";
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
<script src="js/bootstrap.min.js"></script>
</body>
</html>