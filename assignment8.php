<?php
session_start();
if(isset($_POST['submit'])){
    for($row=0;$row<sizeof($_POST['degree']);$row++)
    {
        $education[$row][0]=$_POST['degree'][$row];
        $education[$row][1]=$_POST['university'][$row];
        $education[$row][2]=$_POST['start'][$row];
        $education[$row][3]=$_POST['end'][$row];
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $nrc=$_POST['nrc'];
    $dob=$_POST['dob'];
    $phno=$_POST['phno'];
    $uploadcerti=$_FILES['uploadcerti']['name'];
    $uploadcv=$_FILES['uploadcv']['name'];
    $_SESSION['education']=$education;
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['nrc']=$nrc;
    $_SESSION['dob']=$dob;
    $_SESSION['phno']=$phno;
    $_SESSION['uploadcerti']=$uploadcerti;
    $_SESSION['uploadcv']=$uploadcv;
    //echo '<script>location.href="assignment8_success.php"</script>';
}
if(isset($_POST['cerbtn'])){
    $filename=$_FILES['uploadcerti']['name'];
    $filetype=$_FILES['uploadcerti']['type'];
    $filesize=$_FILES['uploadcerti']['size'];
    $file_tmp=$_FILES['uploadcerti']['tmp_name'];
    $file_extension=explode('.',$filename);
    $actual_extension=end($file_extension);
    $allowed_files=['png','jpg','jpeg','svg'];
    $max_size=200000;
    if(in_array(strtolower($actual_extension),$allowed_files))
    {
        if($filesize<=$max_size)
        {
            $new_filename=time().$filename;
            move_uploaded_file($file_tmp,'uploads/'.$new_filename);
        }else
        {
           echo "File exceeds file size(2MB)";
        }
    }else
    {
        echo "File is not allowed";
    }
}

if(isset($_POST['cvbtn'])){
    $filename=$_FILES['uploadcv']['name'];
    $filetype=$_FILES['uploadcv']['type'];
    $filesize=$_FILES['uploadcv']['size'];
    $file_tmp=$_FILES['uploadcv']['tmp_name'];
    $file_extension=explode('.',$filename);
    $actual_extension=end($file_extension);
    $allowed_files=['png','jpg','jpeg','svg'];
    $max_size=200000;
    if(in_array(strtolower($actual_extension),$allowed_files))
    {
        if($filesize<=$max_size)
        {
            $new_filename=time().$filename;
            move_uploaded_file($file_tmp,'assignment8/'.$new_filename);
        }else
        {
           echo "File exceeds file size(2MB)";
        }
    }else
    {
        echo "File is not allowed";
    }
}

if(isset($_POST['submit'])){
    
    if(empty($_POST['name'])){
        $name_error="Please enter your Name";
    }else{
        $name=$_POST['name'];
    }
    if(empty($_POST['email'])){
        $email_error="Please enter your Email";
    }else{
        $email=$_POST['email'];
    }
    if(empty($_POST['nrc'])){
        $nrc_error="Please enter your NRC";
    }else{
        $nrc=$_POST['nrc'];
    }
    if(empty($_POST['dob'])){
        $dob_error="Please enter your Date of Birth";
    }else{
        $dob=$_POST['dob'];
    }
    if(empty($_POST['phno'])){
        $phno_error="Please enter your Phone Number";
    }else{
        $phno=$_POST['phno'];
    }
    if(empty($_POST['degree[]'])){
        $degree_error="Please enter your Degree Name";
    }else{
        $degree=$_POST['degree[]'];
    }
    if(empty($_POST['university[]'])){
        $university_error="Please enter your University Name";
    }else{
        $university=$_POST['university[]'];
    }
    if(empty($_POST['start[]'])){
        $start_error="Please enter your Start Date";
    }else{
        $start=$_POST['start[]'];
    }
    if(empty($_POST['end[]'])){
        $end_error="Please enter your End Date";
    }else{
        $end=$_POST['end[]'];
    }
    if(empty($_POST['uploadcerti'])){
        $uploadcerti_error="Please choose file";
    }else{
        $uploadcerti='uploads/'.$new_filename;
    }
    if(empty($_POST['uploadcv'])){
        $uploadcv_error="Please choose file";
    }else{
        $uploadcv=$_POST['uploadcv'];
    }
}

// if(isset($_POST['submit'])){
//     for($row=0;$row<sizeof($_POST['degree']);$row++){

//     }
// }

if(isset($_POST['submit'])){
    if(empty($_POST['name']))
    {
        $name_error="Please enter your Name";
    }elseif(empty($_POST['email']))
    {
        $email_error="Please enter your Email";
    }
    elseif(empty($_POST['nrc']))
    {
        $nrc_error="Please enter your NRC";
    }
    elseif(empty($_POST['dob']))
    {
        $dob_error="Please enter your Date of Birth";
    }elseif(empty($_POST['phno']))
    {
        $phno_error="Please enter your Phone Number";
    }
    // elseif(empty($_POST['degree[]']))
    // {
    //     $degree_error="Please enter your Degree Name";
    // }
    // elseif(empty($_POST['university[]']))
    // {
    //     $university_error="Please enter your University Name";
    // }
    // elseif(empty($_POST['start[]']))
    // {
    //     $start_error="Please enter your Start Date";
    // }
    // elseif(empty($_POST['end[]']))
    // {
    //     $end_error="Please enter your End Date";
    // }
    else{
        echo '<script>location.href="assignment8_success.php"</script>';
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
    <div class="container bg-light">
        <div class="row m-2">
            <div class="col-md-12">
                <h1 class="text-center fst-italic mt-2 text-warning">Profile</h1><hr>
            <form action="" enctype="multipart/form-data" method="post" class="mt-4">
                <div class="row">
                <div class="col-md-2">
                    <label for=""class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  value="<?php if(isset($name)) echo $name; ?>">
                    <span class="nameerror text-danger"><?php if(isset($name_error)) echo $name_error; ?></span>
                </div>
                <div class="col-md-2">
                    <label for=""class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email"  value="<?php if(isset($email)) echo $email; ?>">
                    <span class="emailerror text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>
                </div>
                <div class="col-md-2">
                    <label for=""class="form-label">NRC</label>
                    <input type="text" name="nrc" class="form-control" id="nrc"  value="<?php if(isset($nrc)) echo $nrc; ?>">
                    <span class="nrcerror text-danger"><?php if(isset($nrc_error)) echo $nrc_error; ?></span>
                </div>
                <div class="col-md-2">
                    <label for=""class="form-label">Date of birth</label>
                    <input type="date" name="dob" class="form-control"  id="dob"  value="<?php if(isset($dob)) echo $dob; ?>">
                    <span class="doberror text-danger"><?php if(isset($dob_error)) echo $dob_error; ?></span>
                </div>
                <div class="col-md-2">
                    <label for=""class="form-label">Phone Number</label>
                    <input type="number" name="phno" class="form-control" id="phno"  value="<?php if(isset($phno)) echo $phno; ?>">
                    <span class="phnoerror text-danger"><?php if(isset($phno_error)) echo $phno_error; ?></span>
                </div>
                </div>
                
            <div class="row mt-3">
            <div id="education">
                    <div class="row">
                    <div class="col-md-2">
                        <label for="" class="form-label">Degree Name</label>
                        <input type="text" name="degree[]" id="degree0" class="form-control" value="<?php if(isset($degree)) echo $degree; ?>">
                        <span class="degreeerror text-danger"><?php if(isset($degree_error)) echo $degree_error; ?></span>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">University Name</label>
                        <input type="text" name="university[]" id="university0" class="form-control" value="<?php if(isset($university)) echo $degree;?>">
                        <span class="unierror text-danger"><?php if(isset($university_error)) echo $university_error; ?></span>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Start Date</label>
                        <input type="date" name="start[]" id="start0" class="form-control" value="<?php if(isset($start)) echo $start;?>">
                        <span class="starterror text-danger"><?php if(isset($start_error)) echo $start_error; ?></span>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">End Date</label>
                        <input type="date" name="end[]" id="end0" class="form-control" value="<?php if(isset($end)) echo $end;?>">
                        <span class="enderror text-danger"><?php if(isset($end_error)) echo $end_error; ?></span>
                    </div>
                    <div class="col-md-2 my-4">
                    <button class="btn btn-primary" id="addbtn" name="addmore">Add More</button>
                    </div>
                    </div>
                    </div>  
            </div>   

            <div class="row mt-3">
                    <div class="col-md-6">
                        <div>
                            <label for="" class="form-label">Upload certificate</label>
                            <input type="file" name="uploadcerti" class="form-control" value="<?php if(isset($uploadcerti)) echo $uploadcerti; ?>">
                            <span class="text-danger"><?php if(isset($uploadcerti_error)) echo $uploadcerti_error; ?></span>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-primary" name="cerbtn">Upload</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="" class="form-label">Upload CV</label>
                            <input type="file" name="uploadcv" class="form-control">
                            <span class="text-danger"><?php if(isset($uploadcv_error)) echo $uploadcv_error; ?></span>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-primary" name="cvbtn">Upload</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-4">
                    <div class="col-md-2">
                    <button class="btn btn-primary" name="submit" id="submit">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/assign8.js"></script>
</body>
</html>