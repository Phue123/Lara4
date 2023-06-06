<?php
if(isset($_GET['submit'])){
    if(isset($_GET['name_mm'])){
        $name_mm=$_GET['name_mm'];
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
                            <input type="text" name="name_mm" id="name_mm" class="form-control focused" autofocus value="<?php if(isset($name_mm)) echo $name_mm; ?>">
                            <span class="text-danger" id="name_error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Name (English)</label>
                            <input type="text" name="name_eng" id="name_eng" class="form-control">
                            <span class="text-danger" id="eng_name_error"></span>
                            </div>
                        <div class="col-md-4">
                        <label for="" class="form-label">Birthday</label>
                            <input type="date" name="birth" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <label for="">Nation</label><br>
                            <input type="radio" name="race" id="mm" class="form-check-input" value="mm"><label for="" class="form-check-label">Myanmar</label>
                            <input type="radio" name="race" id="othernation" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>
                            <div id="other_nation" class="d-none">
                                <input type="text" name="other_nation" id="text_nation" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                        <label for="">Marital Status</label><br>
                        <input type="radio" name="marital" id="mariage" class="form-check-input" value="mariage"><label for="" class="form-check-label">Mariage</label><br>
                        <input type="radio" name="marital" id="single" class="form-check-input" value="single"><label for="" class="form-check-label">Single</label><br>
                        <input type="radio" name="marital" id="other"  class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br>
                        <div id="other_marital" class="d-none">
                            <input type="text" name="other_marital" id="text_other" class="form-comtrol">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <label for="">Gender</label><br>
                        <input type="radio" name="gender" id="male" class="form-check-input" value="male"><label for="" class="form-check-label">Male</label><br>
                        <input type="radio" name="gender" id="female" class="form-check-input" value="female"><label for="" class="form-check-label">Female</label><br>
                        <input type="radio" name="gender" id="othergender" class="form-check-input" value="other"><label for="" class="form-check-label">Other</label><br> 
                        <div id="other_gender" class="d-none">
                            <input type="text" name="othergender" id="text_gender" class="form-control">
                        </div>
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
<script src="js/myscript.js"></script>
</body>
</html>