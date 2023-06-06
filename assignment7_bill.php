<?php
session_start();
$invoice=$_SESSION['invoice'];
var_dump($invoice);
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
                <table class="table p-3">
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
                       echo "<td>". $invoice[$row][0] . "</td>";
                       echo "<td>". $invoice[$row][1] . "</td>";
                       echo "<td>". $invoice[$row][2] . "</td>";
                       echo "<td>". $invoice[$row][1]*$invoice[$row][2] . "</td>";
                       echo $totalsub+=$invoice[$row][1]*$invoice[$row][2];
                    }
                       echo "<tr>";
                       echo "
                       <td colspan='3'>SubTotal</td>";
                        echo "<td>$totalsub</td>";
                        echo "</tr>";

                    
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>