<?php
if(isset($_GET['submit']))
{
    if(empty($_GET['name_mm']))
    $name_mm_error="Please fill your name in myanmar!";
    else
    $name_mm=$_GET['name_mm'];

    if(empty($_GET['name_eng']))
    $name_eng_error="Please fill your name in english!";
    else
    $name_eng=$_GET['name_eng'];

    if(empty($_GET['birth']))
    $birth_error="Please fill your date of birth!";
    else
    $birth=$_GET['birth'];

    $program=$_GET['program'];

    if(empty($_GET['race']))
    $race_error="Please select your Nation!";
    else
    $race=$_GET['race'];

    if(empty($_GET['marital']))
    $marital_error="Please select your Marital Status!";
    else
    $marital=$_GET['marital'];

    if(empty($_GET['gender']))
    $gender_error="Please select your Gender!";
    else
    $gender=$_GET['gender'];

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
            <div class="col-md-12">
                <form action="" method="get">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div>
                                <label for="">Attended Subject <span class="text-danger">*</span></label>
                                <select name="program" class="form-select" id="">
                                    <option value="mba">Master of Business Adminitration</option>
                                    <option value="bba">Master of Business Adminitration</option>
                                    <option value="bbs">Master of Business Adminitration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="" class="form-label">Name (Myanmar)</label>
                            <input type="text" name="name_mm" class="form-control" (value="<?php if(isset($name_mm)) echo $name_mm; ?>")>
                            <span class="text-danger"><?php if(isset($name_mm_error)) echo $name_mm_error;?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name (English)</label>
                            <input type="text" name="name_eng" class="form-control" value="<?php if(isset($name_eng)) echo $name_eng; ?>">
                            <span class="text-danger"><?php if(isset($name_eng_error)) echo $name_eng_error;?></span>
                        </div>
                        <div class="col-md-4">
                        <label for="" class="form-label">Birthday</label>
                            <input type="date" name="birth" class="form-control" value="<?php if(isset($birth)) echo $birth; ?>">
                            <span class="text-danger"><?php if(isset($birth_error)) echo $birth_error;?></span>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="">Nation</label><br>
                            <?php

                            if(isset($race) && $race=="mm"){
                                echo '<input type="radio" name="race" class="form-check-input" checked value="mm"><label for="" class="form-check-level">Myanmar</label>';
                                echo '<input type="radio" name="race" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                            }else if(isset($race) && $race=="other"){
                              echo  '<input type="radio" name="race" class="form-check-input" value="mm"><label for="" class="form-check-level">Myanmar</label>';
                              echo  '<input type="radio" name="race" class="form-check-input" checked value="other"><label for="" class="form-check-level">Other</label><br>';
                            }else{
                                echo '<input type="radio" name="race" class="form-check-input" value="mm"><label for="" class="form-check-level">Myanmar</label>';
                                echo '<input type="radio" name="race" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                            }

                            ?>
                            <span class="text-danger"><?php if(isset($race_error)) echo $race_error;?></span>
                        </div>

                        <div class="col-md-4">
                        <label for="">Marital Status</label><br>
                        <?php
                        if(isset($marital) && $marital=="mariage"){
                          echo  '<input type="radio" name="marital" class="form-check-input" checked value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                          echo  '<input type="radio" name="marital" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                          echo  '<input type="radio" name="marital" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else if(isset($marital) && $marital=="single"){
                            echo '<input type="radio" name="marital" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" checked value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else if(isset($marital) && $marital=="other"){
                            echo '<input type="radio" name="marital" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" checked value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else{
                            echo '<input type="radio" name="marital" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }
                        ?>
                        <span class="text-danger"><?php if(isset($marital_error)) echo $marital_error;?></span>
                        </div>

                        <div class="col-md-4">
                        <label for="">Gender</label><br>
                        <?php
                        if(isset($gender) && $gender=='male'){
                            echo '<input type="radio" name="gender" class="form-check-input" checked value="male"><label for="" class="form-check-level">Male</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="female"><label for="" class="form-check-level">Female</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }elseif(isset($gender) && $gender=='female'){
                            echo '<input type="radio" name="gender" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input"checked value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>';
                        }else if(isset($gender) && $gender=='other'){
                            echo '<input type="radio" name="gender" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" checked value="other"><label for="" class="form-check-label">Other</label><br>';
                        }else{
                            echo '<input type="radio" name="gender" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>';
                        }
                        ?>
                        <span class="text-danger"><?php if(isset($gender_error)) echo $gender_error;?></span>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                        <button class="btn btn-primary" name="submit">Register</button>
                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<script src="js/bootstrap.min.js"></script>
</body>
</html>