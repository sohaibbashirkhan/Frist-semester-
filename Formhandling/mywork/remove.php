<?php
include_once("connection.php");

if(!$conn){
    echo "connection refuse";
}
else{
    echo "connection established";
}

$id =$_GET["id"];

$query ="DELETE FROM 'users' WHERE 'id' =$id";
mysqli_query($conn ,$query);


?>
<script>
    window.location.assign("Showdata.php");
</script>