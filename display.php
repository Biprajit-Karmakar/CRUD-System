<?php 
include 'connect.php';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Panel</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="index.php">Add User</a></button> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  <?php
      $sql = "Select * from `crud`";
      $result = mysqli_query($con,$sql);
      if($result){
        // $row = mysqli_fetch_assoc($result);</div>
        // echo $row['name'];
        // $row = mysqli_fetch_assoc($result);
        // echo $row['name'];
        while ($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '
            <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                  <button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php">Update</a></button>
                  <button class="btn btn-danger "><a class="text-light text-decoration-none" href="delete.php">Delete</a></button>
                </td>
            </tr>   
            ';
        }
      }    
  ?>
  
  </tbody>
</table>
</div>
    
</body>
</html>