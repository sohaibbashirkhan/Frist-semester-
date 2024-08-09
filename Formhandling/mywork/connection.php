<?php
$conn = mysqli_connect("localhost","root","","form");
if(!$conn){
    echo "connextion refuse";
}
else{
    echo " connected";
}
?>