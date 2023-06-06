<?php
if(isset($_GET['register']))
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

    if(empty($_GET['email']))
    $email_error="Please enter your email!";
    else
    $email=$_GET['email'];

    if(empty($_GET['phno']))
    $phno_error="Please enter your Phone number!";
    else
    $phno=$_GET['phno'];

    if(empty($_GET['nrc']))
    $nrc_error="Please enter your NRC or Passport!";
    else
    $nrc=$_GET['nrc'];

    if(empty($_GET['fulladdress']))
    $fulladdress_error="Please enter your Full Address!";
    else
    $fulladdress=$_GET['fulladdress'];

    if(empty($_GET['viber']))
    $viber_error="Please enter your Viber or WhatsApp!";
    else
    $viber=$_GET['viber'];

    if(empty($_GET['township']))
    $township_error="Please enter your Township!";
    else
    $township=$_GET['township'];

    if(empty($_GET['city']))
    $city_error="Please enter your City!";
    else
    $city=$_GET['city'];

    if(empty($_GET['region']))
    $region_error="Please enter your Region!";
    else
    $region=$_GET['region'];

    if(empty($_GET['state']))
    $state_error="Please enter your State!";
    else
    $state=$_GET['state'];

        if(!empty($_GET['country'])) {
          $selected = $_GET['country'];
        } else {
          $error="Please Select";
        }
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
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
    <div class="container">
        <img src="images/BG-1.png" id="bg" alt="">
        <h1 >School Form</h1>
        
        <ul class="progressbar">
        <li class="active" id="progress">Account Setup</li>
        <li id="progress1">Social Profiles</li>
        <li id="progress2">Personal Details</li>
        <li id="progress3">Work Experience</li>
        </ul>
        
        <div class="row">
            <div class="col-md-12">
                <form action="" method="get" id="row1" class="bg-light">
                    <div class="row m-3">
                        <div class="col-md-12">
                            <div>
                                <label for="">Attended Subject <span class="text-danger">*</span></label><br>
                                <select name="program" class="form-select" id="">
                                    <option value="mba">Master of Business Adminitration</option>
                                    <option value="bba">Master of Business Adminitration</option>
                                    <option value="bbs">Master of Business Adminitration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3 m-3">
                        <div class="col-md-4">
                            <label for="" class="form-label">Name (Myanmar)</label>
                            <input type="text" name="name_mm" class="form-control" value="<?php if(isset($name_mm)) echo $name_mm; ?>">
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
                    <div class="row my-3 m-3">
                        <div class="col-md-4">
                            <label for="">Nation</label><br>
                            <?php

                            if(isset($race) && $race=="mm"){
                                echo '<input type="radio" name="race" id="mm" class="form-check-input" checked value="mm"><label for="" class="form-check-level">Myanmar</label>';
                                echo '<input type="radio" name="race" id="othernation" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                            }else if(isset($race) && $race=="other"){
                              echo  '<input type="radio" name="race" id="mm" class="form-check-input" value="mm"><label for="" class="form-check-level">Myanmar</label>';
                              echo  '<input type="radio" name="race" id="othernation" class="form-check-input" checked value="other"><label for="" class="form-check-level">Other</label><br>';
                            }else{
                                echo '<input type="radio" name="race" id="mm" class="form-check-input" value="mm"><label for="" class="form-check-level">Myanmar</label>';
                                echo '<input type="radio" name="race" id="othernation" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                            }

                            ?>
                            <div id="other_nation" class="d-none">
                                <input type="text" name="other_nation" id="text_nation" class="form-control">
                            </div>
                            <span class="text-danger"><?php if(isset($race_error)) echo $race_error;?></span>
                        </div>

                        <div class="col-md-4">
                        <label for="">Marital Status</label><br>
                        <?php
                        if(isset($marital) && $marital=="mariage"){
                          echo  '<input type="radio" name="marital" id="mariage" class="form-check-input" checked value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                          echo  '<input type="radio" name="marital" id="single" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                          echo  '<input type="radio" name="marital" id="other" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else if(isset($marital) && $marital=="single"){
                            echo '<input type="radio" name="marital" id="mariage" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" id="single" class="form-check-input" checked value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" id="other" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else if(isset($marital) && $marital=="other"){
                            echo '<input type="radio" name="marital" id="mariage" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" id="single" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" id="other" class="form-check-input" checked value="other"><label for="" class="form-check-level">Other</label><br>';
                        }else{
                            echo '<input type="radio" name="marital" id="mariage" class="form-check-input" value="mariage"><label for="" class="form-check-level">Mariage</label><br>';
                            echo '<input type="radio" name="marital" id="single" class="form-check-input" value="single"><label for="" class="form-check-level">Single</label><br>';
                            echo '<input type="radio" name="marital" id="other" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }
                        ?>
                        <div id="other_marital" class="d-none">
                            <input type="text" name="other_marital" id="text_other" class="form-control">
                        </div>
                        <span class="text-danger"><?php if(isset($marital_error)) echo $marital_error;?></span>
                        </div>

                        <div class="col-md-4">
                        <label for="">Gender</label><br>
                        <?php
                        if(isset($gender) && $gender=='male'){
                            echo '<input type="radio" name="gender" id="male" class="form-check-input" checked value="male"><label for="" class="form-check-level">Male</label><br>';
                            echo '<input type="radio" name="gender" id="female" class="form-check-input" value="female"><label for="" class="form-check-level">Female</label><br>';
                            echo '<input type="radio" name="gender" id="othergender" class="form-check-input" value="other"><label for="" class="form-check-level">Other</label><br>';
                        }elseif(isset($gender) && $gender=='female'){
                            echo '<input type="radio" name="gender" id="male" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" id="female" class="form-check-input"checked value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" id="othergender" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>';
                        }else if(isset($gender) && $gender=='other'){
                            echo '<input type="radio" name="gender" id="male" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" id="female" class="form-check-input" value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" id="othergender" class="form-check-input" checked value="other"><label for="" class="form-check-label">Other</label><br>';
                        }else{
                            echo '<input type="radio" name="gender" id="male" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>';
                            echo '<input type="radio" name="gender" id="female" class="form-check-input" value="female"><label for="" class="form-check-label">Female</label><br>';
                            echo '<input type="radio" name="gender" id="othergender" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>';
                        }
                        ?>
                        <span class="text-danger"><?php if(isset($gender_error)) echo $gender_error;?></span>
                        <div id="other_gender" class="d-none">
                            <input type="text" name="other_gender" id="text_gender" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row my-3 m-3">
                        <div class="col-md-3">
                        <label for=""class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
                        <span class="text-danger"><?php if(isset($email_error)) echo $email_error ?></span>
                        </div>
                        <div class="col-md-3">
                        <label for=""class="form-label">Phone Number</label>
                        <input type="number" name="phno" class="form-control" value="<?php if(isset($phno)) echo $phno; ?>">
                        <span class="text-danger"><?php if(isset($phno_error)) echo $phno_error ?></span>
                        </div>
                        <div class="col-md-3">
                        <label for=""class="form-label">NRC or Passport</label>
                        <input type="text" name="nrc" class="form-control" value="<?php if(isset($nrc)) echo $nrc; ?>">
                        <span class="text-danger"><?php if(isset($nrc_error)) echo $nrc_error; ?></span>
                        </div>
                        <div class="col-md-3">
                        <label for=""class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="<?php if(isset($facebook)) echo $facebook; ?>">
                        <span class="text-danger"><?php if(isset($facebook_error)) echo $facebook_error; ?></span>
                        </div>
                    </div>
                    <div class="row my-3 m-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Full Address</label>
                            <input type="text" name="fulladdress" class="form-control" value="<?php if(isset($fulladdress)) echo $fulladdress; ?>">
                            <small>Home no,Street name</small> <span class="text-danger"><?php if(isset($fulladdress_error)) echo $fulladdress_error; ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Viber/WhatsApp No</label>
                            <input type="number" name="viber" class="form-control" value="<?php if(isset($viber)) echo $viber; ?>">
                            <span class="text-danger"><?php if(isset($viber_error)) echo $viber_error; ?></span>
                        </div>
                    </div>
                    <div class="row my-4 m-3">
                        <div class="col-md-6">
                            <input type="text" name="township" class="form-control" value="<?php if(isset($township)) echo $township; ?>">
                            <small>Township</small> <span class="text-danger"><?php if(isset($township_error)) echo $township_error; ?></span>

                            <div class="row my-3">
                                <div class="col-md-4">
                                    <input type="text" name="city" class="form-control" value="<?php if(isset($city)) echo $city; ?>">
                                    <small>City</small> <span class="text-danger"><?php if(isset($city_error)) echo $city_error; ?></span>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="region" class="form-control" value="<?php if(isset($region)) echo $region; ?>">
                                    <small>Region</small> <span class="text-danger"><?php if(isset($region_error)) echo $region_error; ?></span>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="state" class="form-control" value="<?php if(isset($state)) echo $state; ?>">
                                    <small>State</small> <span class="text-danger"><?php if(isset($state_error)) echo $state_error; ?></span>
                                </div>
                            </div>
                            <div class="row p-2">
                            <select name="country" id="" class="form-select">
                                        <option value=""><?php if(isset($selected)) echo $selected?></option>
                                        <option value="United State">United States</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Maxico">Maxico</option>
                                        <option value="Norway">Norway</option>
                                        <option value="France">France</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Southkorea">Sourth Korea</option>
                                        <option value="Australia">Australia</option>
                            </select>
                            <span class="text-danger"><?php if(isset($error)) echo $error; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">လူကြီးမင်းထံဆက်သွယ်မှုအဆင်ပြေဆုံးပုံစံ</label>
                            <div class="row">
                                <div class="form-check-group">
                                <input type="checkbox" name="cfackbook" class="form-check-input"><label for="" class="form-check-label">Facebook</label><br>
                                <input type="checkbox" name="cviber" class="form-check-input"><label for="" class="form-check-label">Viber</label><br>
                                <input type="checkbox" name="cphno" class="form-check-input"><label for="" class="form-check-label">Phone Number</label><br>
                                <input type="checkbox" name="cemail" class="form-check-input"><label for="" class="form-check-label">Email</label><br>
                                <input type="checkbox" name="cwhatsapp" class="form-check-input"><label for="" class="form-check-label">WhatsApp</label><br>
                                <input type="checkbox" name="cother" class="form-check-input"><label for="" class="form-check-label">Other</label>
                                </div>
                            </div>
                        </div>
                    <div class="row my-3 m-3">
                        <div class="col-md-2">
                        <button class="btn btn-primary" id="register" value="submit" name="register">Register</button>
                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form action="" id="row2" class="bg-light p-4">
    <div class="row">
            <div class="col-md-12">
                <form action="" id="addform">
                    <div class="row" id="add">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="addname" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="addemail" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <button class="btn btn-success" id="addbtn">Add More</button>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="previous2">Previous</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="submit2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </form>
    
    <form action="" id="row3" class="bg-warning rounded-3 p-3">
    <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="previous3">Previous</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="submit3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    
    <form action="" id="row4" class="bg-secondary rounded-3 p-3">
    <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <label for="" class="form-label">Personal Info</label>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="previous4">Previous</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="submit4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>