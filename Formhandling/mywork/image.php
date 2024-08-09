<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>images</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="image.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="txtname">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Image file</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Picture" name="txtpic">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
  $namee=$_POST['txtname'];
  $image=$_FILES['txtpic'];
  $imagename=$image['name'];
  $temimagename=$image['tmp_name'];
$conn = mysqli_connect("localhost", "root", "", "formhandling4");         //hostname username password databasename
if (!$conn) {
  echo "connection refuse";
} else {
  echo "connection established";
}
$query ="INSERT INTO `imageupload`(`id`, `name`, `image`) VALUES (null,'$namee','$imagename')";

move_uploaded_file($temimagename,'./image/' .$imagename.'');
mysqli_query($conn,$query);
};



?>



