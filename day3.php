<?php
$employees=[
    [
        'name'=>'Kyaw Kyaw',
        'level'=>'Senior',
        'salary'=>700000,
        'photo'=>'images/leonardo.jpg'
    ],
    [
        'name'=>'Thiri',
        'level'=>'Junior',
        'salary'=>280000,
        'photo'=>'images/leonardo.jpg'
    ],
    [
        'name'=>'Htet Htet',
        'level'=>'Junior',
        'salary'=>350000,
        'photo'=>'images/leonardo.jpg'
    ],
    [
        'name'=>'David',
        'level'=>'Management',
        'salary'=>1200000,
        'photo'=>'images/leonardo.jpg'
    ],
];

for($row=0;$row<sizeof($employees);$row++)
{ $bonus=0;
    if($employees[$row]['level']=='Junior' && $employees[$row]['salary'] > 300000)
    {
        $bonus= 0.08 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Senior' && $employees[$row]['salary']>500000)
    {
        $bonus= 0.1 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Management' && $employees[$row]['salary']>1000000)
    {
        $bonus= 0.11 * $employees[$row]['salary'];
    }
    $net_salary=$bonus+$employees[$row]['salary'];
    echo $employees[$row]['name']. ":" . $net_salary . "<br>";

}

for($row=0;$row<sizeof($employees);$row++)
{ $bonus=0;
    if($employees[$row]['level']=='Junior' || $employees[$row]['salary'] > 300000)
    {
        $bonus= 0.08 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Senior' || $employees[$row]['salary']>500000)
    {
        $bonus= 0.1 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Management' || $employees[$row]['salary']>1000000)
    {
        $bonus= 0.11 * $employees[$row]['salary'];
    }
    $net_salary=$bonus+$employees[$row]['salary'];
    echo $employees[$row]['name']. ":" . $net_salary . "<br>";

}

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
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Salary</th>
                <th>Bonus</th>
                <th>Net Salary</th>
            </tr>
            <?php
            for($row=0;$row<sizeof($employees);$row++){
                $bonus=0;
                echo "<tr>";
                foreach($employees[$row] as $key=>$value)
                {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                }
                if($employees[$row]['level']=='Junior' && $employees[$row]['salary'] > 300000)
    {
        $bonus= 0.08 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Senior' && $employees[$row]['salary']>500000)
    {
        $bonus= 0.1 * $employees[$row]['salary'];
    }
    else if($employees[$row]['level']=='Management' && $employees[$row]['salary']>1000000)
    {
        $bonus= 0.11 * $employees[$row]['salary'];
    }
    $net_salary=$bonus+$employees[$row]['salary'];
    echo "<td>" . $bonus . "</td>";
    echo "<td>" . $net_salary . "</td>";
    echo "</tr>";

            }
            ?>
        </table>
      </div><br><br>

      <div class="row">
        <?php
        for($row=0;$row<sizeof($employees);$row++)
        {
            echo "<div class='col-md-4 border'>";
            echo "<div class='row'>";
            echo "<div class='col-md-4'>";
            echo "<img src='" . $employees[$row]['photo'] . "' width='100%'>";
            echo "</div>";
            echo "<div class='col-md-8'>";
            echo $employees[$row]['name']."<br>".$employees[$row]['level']."<br>".$employees[$row]['salary']."<br>";
                //$bonus=0;
                if($employees[$row]['level']=='Junior' && $employees[$row]['salary'] > 300000)
                {
                    $bonus= 0.08 * $employees[$row]['salary'];
                }
                else if($employees[$row]['level']=='Senior' && $employees[$row]['salary']>500000)
                {
                    $bonus= 0.1 * $employees[$row]['salary'];
                }
                else if($employees[$row]['level']=='Management' && $employees[$row]['salary']>1000000)
                {
                    $bonus= 0.11 * $employees[$row]['salary'];
                }
                $net_salary=$bonus+$employees[$row]['salary'];
                echo $net_salary;
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
      </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
<br><br>
</body>
</html>