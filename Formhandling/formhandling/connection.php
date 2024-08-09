<?php
$conn = mysqli_connect("localhost","root","","formhandling");
if(!$conn){
    echo "connextion refuse";
}
else{
    echo " connected";
}
?>