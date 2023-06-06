<?php
if(isset($_POST['submit'])){
    $filename=$_FILES['upload']['name'];
    $filetype=$_FILES['upload']['type'];
    $filesize=$_FILES['upload']['size'];
    $file_tmp=$_FILES['upload']['tmp_name'];
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
            echo "File exceed max size(2Mb)";
        }
    }else
    {
        echo "File is not allowed";
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
            <div class="col-md-6">
                <form action="" enctype="multipart/form-data" method="post">
                    <div>
                    <label for="" class="form-label">Upload CV</label>
                    <input type="file" name="upload" class="form-control">
                    </div>
                    <div class="my-3">
                    <button class="btn btn-primary" name="submit">Upload</button>
                    </div>
                </form> 
              </div> 
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>