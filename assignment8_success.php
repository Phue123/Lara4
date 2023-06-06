<?php
session_start();
//echo "assignment success";
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$nrc=$_SESSION['nrc'];
$dob=$_SESSION['dob'];
$phno=$_SESSION['phno'];
$uploadcerti=$_SESSION['uploadcerti'];
$uploadcv=$_SESSION['uploadcv'];
$education=$_SESSION['education'];
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
    <div class="container bg-light">
        <div class="row m-4">
            <h1 class="text-center fst-italic mt-2 text-warning">Profile</h1>
            <div class="col-md-12 my-3">
                <table class="table table-borderlessed">
                    <?php
                    echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<td colspan=4>". $name ."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Email</th>";
                    echo "<td colspan=4>". $email ."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>NRC</th>";
                    echo "<td colspan=4>". $nrc ."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Date of birth</th>";
                    echo "<td colspan=4>". $dob ."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Phone Number</th>";
                    echo "<td colspan=4>". $phno ."</td>";
                    echo "</tr>";

                    for($row=0;$row<sizeof($education);$row++)
                    {  
                       echo "<tr>";
                       echo "<th>Degree :</th>";
                       echo "<td>". $education[$row][0] . "</td>";
                       echo "<td>". $education[$row][1] . "</td>";
                       echo "<td>". $education[$row][2] . "</td>";
                       echo "<td>". $education[$row][3] . "</td>";
                       echo "</tr>";
                    }

                    echo "<tr>";
                    echo "<th colspan='5'>*Successfully Uploaded ". $uploadcerti ." and ". $uploadcv ." *</th>";
                    echo "</tr>";

                    ?>
                </table>
            </div>
        </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>