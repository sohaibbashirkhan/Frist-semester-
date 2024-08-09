<?php
$conn = mysqli_connect("localhost", "root", "", "formhandling"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}


    $id = $_GET["id"];

    $query = "DELETE FROM `users` WHERE `id` = $id";

    mysqli_query($conn,$query);

    // header("Location: showData.php");   

?>

<script>
    window.location.assign("showData.php");
</script>