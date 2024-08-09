<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="about.php" method="post">
    <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder= "Enter Your Name" name ="txtname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Age" name ="txtage">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Addrees</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Adddress" name ="txtaddress">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name ="txtemail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name ="txtpass">
  </div>
  </fieldset>
  
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php
error_reporting(0);
$name =$_POST['txtname'];
$age =$_POST['txtage'];
$address =$_POST['txtaddress'];
$email = $_POST['txtemail'];
$password =$_POST['txtpass'];

$conn =mysqli_connect("localhost","root","","form");

$query ="insert into users values (null,'$name','$age','$address','$email','$password')";
$q = mysqli_query ($conn , $query)







?>