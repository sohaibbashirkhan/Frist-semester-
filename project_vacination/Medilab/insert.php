<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['message']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['weight']) && isset($_POST['age'])) {
        
        $username = $_POST['username'];
        $message = $_POST['message'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $weight = $_POST['weight'];
        $phone = $_POST['age'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "medilab";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, vaccination, gender, email, weight, age) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $message, $gender, $email, $weight, $phone);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>