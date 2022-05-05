<?php
session_start();

// Hier die Formulardaten in die Session speichern
// $email = "";
// $password = "";
// if (isset($_REQUEST['submit'])) {
//     $_SESSION['email'] = $_REQUEST['email'];
//     $email = $_REQUEST['email'];
//     $_SESSION['password'] = $_REQUEST['password'];
//     $password = $_REQUEST['password'];
// }

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_styleshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$sql = "SELECT * FROM `tbl_users`;";

$db_erg = mysqli_query($conn, $sql);
if (!$db_erg) {
    die('Ungültige Abfrage: ');
}
// echo "Daten vorhanden";
// echo "<br>name:".$_REQUEST['email'];
// echo ", password:".$_REQUEST['password'];

while ($zeile = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
    //   echo "<br>". $zeile['email'];
    //   echo " ". $zeile['password'];
    if ($zeile['email'] == $_REQUEST['email']) {
        //   echo "<br> email gefunden";
        if ($zeile['password'] == $_REQUEST['password']) {
            //   echo "<br> password gefunden";
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['password'] = $_REQUEST['password'];
            break;
        }
    }
}

if (isset($zeile['password'])) {
    header('location: ../index.php');
} else {
    header('location: ../login.php');
}

mysqli_free_result($db_erg);