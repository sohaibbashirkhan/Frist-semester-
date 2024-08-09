<?php
$conn = mysqli_connect("localhost","root","","form");
if(!$conn){
    echo "connextion refuse";
}
else{
    echo " connected";
}

$qurey ="select * from users";

$q =mysqli_query($conn ,$qurey);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="2px" style "width: 60px;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Add</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
</tr>
<?php error_reporting(0); while($row = mysqli_fetch_assoc($q)){ ?>
            <tr>
                <td><?php echo $row ['ID']; ?> </td>
                <td> <?php echo $row ['name']; ?></td>
                <td> <?php echo $row ['age']; ?></td>
                <td><?php echo $row ['addrees']; ?></td>
                <td><?php echo $row ['email']; ?></td>
                <td><?php echo $row ['password'] ?></td>
                <td><a href="edit.php?id=<?=$row['id']?>">Edit</a></td>
                <td><a href="remove.php?id=<?=$row['id']?>">DELETE</a></td>
</tr>
<?php }?>


        </table>
    </center>
</body>
</html>