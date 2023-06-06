<?php
session_start();
if(isset($_POST['calculate'])){
    $description=$_POST['description'];
    for($row=0;$row<sizeof($_POST['description']);$row++)
    {
        $invoice[$row][0]=$_POST['description'][$row];
        $invoice[$row][1]=$_POST['quantity'][$row];
        $invoice[$row][2]=$_POST['price'][$row];
    }
    $_SESSION['invoice']=$invoice;
    echo '<script>location.href="assignment7_bill.php"</script>';
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div id="invoice">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="form-label">Description</label>
                            <input type="text" name="description[]" id="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number" name="quantity[]" id="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" name="price[]" id="" class="form-control">
                        </div>
                        <div class="col-md-3 mt-4">
                            <button class="btn btn-primary" id="addbtn">Add More</button>
                        </div>
                    </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success" name="calculate">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/assignment7.js"></script>
</body>
</html>