<?php

if(isset($_GET['calculate'])){
    if(empty($_GET['meter_no'])){
        $meter_no_error="Please fill meter number!";
    }else
    $meter_no=$_GET['meter_no'];

    if(empty($_GET['computer_code'])){
        $computer_code_error="Please fill computer code!";
    }else
    $computer_code=$_GET['computer_code'];

    if(empty($_GET['previous_meter_unit'])){
        $previous_meter_error="Please fill previous meter unit!";
    }else
    $previous_meter=$_GET['previous_meter_unit'];

    if(empty($_GET['current_meter_unit'])){
        $current_meter_error="Please fill current meter unit!";
    }else
    $current_meter=$_GET['current_meter_unit'];
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
            <div class="col-md-12 my-3">
            <label for="" class="h4">Meter Unit Form</label>
                <form action="" method="get">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <label for="" class="form-level">Meter No :</label>
                            <input type="text" name="meter_no" class="form-control" value="<?php if(isset($meter_no)) echo $meter_no; ?>">
                            <span class="text-danger"><?php if(isset($meter_no_error)) echo $meter_no_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-level">Computer Code :</label>
                            <input type="text" name="computer_code" class="form-control" value="<?php if(isset($computer_code)) echo $computer_code; ?>">
                            <span class="text-danger"><?php if(isset($computer_code_error)) echo $computer_code_error; ?></span>
                        </div>
                        <div class="col-md-4 my-4">
                            <div class="col-md-2">
                                <button class="btn btn-primary" name='calculate'>Calculate</button>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="" class="form-level">Previous Meter Unit :</label>
                            <input type="number" min=1 name="previous_meter_unit" class="form-control" value="<?php if(isset($previous_meter)) echo $previous_meter; ?>">
                            <span class="text-danger"> <?php if(isset($previous_meter_error)) echo $previous_meter_error; ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-level">Current Meter Unit :</label>
                            <input type="number" min=1 name="current_meter_unit" class="form-control" value="<?php if(isset($current_meter)) echo $current_meter; ?>">
                            <span class="text-danger"><?php if(isset($current_meter_error)) echo $current_meter_error; ?></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<script src="js/bootstrap.bundle.mid.js"></script>
</body>
</html>