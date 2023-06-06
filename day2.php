<?php
define('pi',3.141);
echo pi;

$name="David";
echo $name;

const pi1=3.141;
echo pi1;
//pi1=3.141;
//arithemetic operators
//+,-,*,/,**
$marks=[56,78,20,57];
$total=$marks[0]+$marks[1]+$marks[2]+$marks[3];
$avg=$total/count($marks);
echo "<br>";
echo "total is $total <br>";
echo "avg is $avg <br>";

$student_marks=[
    [45,38,29,85],
    [43,65,87,59],
    [65,89,90,67],
    [98,78,77,85]
];

for ($row=0; $row <sizeof($student_marks); $row++) 
{ 
    $total_marks=0;
    for ($col=0;$col<sizeof($student_marks[$row]) ; $col++)
    { 
        $total_marks=$total_marks+$student_marks[$row][$col];
    }
   $avg_mark=$total_marks/sizeof($student_marks[$row]);
   echo "<br> average mark is $avg_mark";
}

$categories=["Herbs","Electrical device","Medicine","Foods","Cosmetics","Fruits"];

$invoice=[
    [
        'name'=>'Monthly subscriptiion',
        'price'=>15,
        'qty'=>3
    ],
    [
        'name'=>"Theme Customization",
        'price'=>50,
        'qty'=>1
    ],
    [
        'name'=>"Addition Service",
        'price'=>35,
        'qty'=>2
    ]
]
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
            <div class="col-md-6">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>Sub1</th>
                    <th>Sub2</th>
                    <th>Sub3</th>
                    <th>Avg</th>
                    <th>Total</th>
                    <th>sub1_avg</th>
                    </tr>
                </thead>
                <?php
                for ($row=0; $row <sizeof(($student_marks)) ; $row++) 
                { 
                    $total_marks=0;
                   echo "<tr>";
                   echo "<td>".($row+1)."</td>";
                   for($col=0; $col<sizeof(($student_marks[$row]));$col++)
                   {
                    echo "<td>";
                    echo $student_marks[$row][$col];
                    echo "</td>";
                    $total_marks=$total_marks+$student_marks[$row][$col];
                   }
                   echo "<td>$total_marks</td>";
                   echo "<td>". $total_marks/sizeof($student_marks[$row]) . "</td>";

                  if(($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row])) <=0){
                    echo "<td class='bg-danger'>". ($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row])) ."</td>"; 
                  }else{
                    echo "<td>". ($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row])) ."</td>";
                  }
                  
                   echo "<td>". ($student_marks[$row][0]-$total_marks/sizeof($student_marks[$row]))**2 ."</td>";
                   echo "</tr>";
                }
                ?>
                </table>
            </div>
        </div><br>

        <div class="row">
        <?php
        for($col=0;$col<sizeof($categories);$col++)
        {
            if($col%2!=0)
            {
            echo "<div class='col-2 border bg-warning'>";
            echo $categories[$col];
            echo "</div>";
            }
            else{
                echo "<div class='col-2'>";
            echo $categories[$col];
            echo "</div>";
            }
        }
        ?>
        </div><br>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <?php
                    $totalsub=0;
                    for($row=0;$row<sizeof($invoice);$row++)
                    {  
                       echo "<tr>";
                       echo "<th>". $invoice[$row]['name'] . "</th>";
                       echo "<th>". $invoice[$row]['price'] . "</th>";
                       echo "<th>". $invoice[$row]['qty'] . "</th>";
                       echo "<th>". $invoice[$row]['price']*$invoice[$row]['qty'] . "</th>";
                       $totalsub += $invoice[$row]['price'] * $invoice[$row]['qty'];
                    }
                       echo "<tr>";
                       echo "<th></th>
                       <th></th>
                       <th>SubTotal</th>";
                        echo "<th>$totalsub</th>";
                        echo "</tr>";

                    
                    ?>
                </table>
            </div>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>