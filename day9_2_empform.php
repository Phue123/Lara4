
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
                <form action="create_emp.php" method="post">
                    <div class="my-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Position</label>
                        <input type="text" name="position" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Department</label>
                        <input type="text" name="dept" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-label">Basic Salary</label>
                        <input type="text" name="basic_salary" class="form-control">
                    </div>
                    <div >
                        <button class="btn btn-primary" name="sublit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>