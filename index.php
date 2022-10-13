<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];
    $sql = "insert into `crud` (name, email, mobile, password)
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    }else {
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>CRUD with PHP</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter Your Name</label>
                <input name="name" type="text" class="form-control" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Email</label>
                <input name="email" type="email" class="form-control" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Mobile Number</label>
                <input name="mobile" type="text" class="form-control" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name= "password" type="password" class="form-control">
            </div>
            <button name= "submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>