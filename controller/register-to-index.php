<?php
session_start();
//checks if passwords are matching
if ($_REQUEST['newPassword'] != $_REQUEST['rePassword']) {
    echo ("Oops! Password did not match! Try again. ");
    header('location: ../register.php');
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_styleshop";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $username = $_REQUEST['name'];
    $userpassword = $_REQUEST['newPassword'];
    $useremail = $_REQUEST['newEmail'];
    $sql = "INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$username."', '".$useremail."', '".$userpassword."');";
    if ($conn->query($sql) === TRUE) {
        // echo "New user created successfully";
        header('location: ../login.php');
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../register.php');
    }
}


// header('location: ../index.php');

$conn->close();
