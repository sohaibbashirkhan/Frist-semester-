<?php
include_once("connection.php");

?>
<?php
$id =$_POST['id'];

$name =$_POST['txtname'];
$age =$_POST['txtage'];
$address =$_POST['txtaddress'];
$email =$_POST['txtemail'];
$password =$_POST['txtpass'];

$query ="UPDATE users SET 'NAME' ='name' ='$name','age' ='$age','addrees'='$address','email'='$email','password'='$password' WHERE 'id' =$id";
$q =mysqli_query($conn,$query);
if(!$q){
    good "bye";
}
else {
    echo"h1";
}
?>
<script>
    window.location.assign("Showdata.php");
</script>