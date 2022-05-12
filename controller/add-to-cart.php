<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_planet";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_GET['name'];
$surface = $GET['rangeValue'];
$description = $_GET['newEmail'];
$price = $_GET['price'];
$sql = "INSERT INTO `cart_items` (`id`, `name`, `surface`, `description`, `price`) VALUES (NULL, '" . $username . "', '" . $useremail . "', '" . $userpassword . "');";

//NEW ROW
if (isset($_REQUEST["newRow"])) {
    $_SESSION["whatToDo"] = "New";
    $_SESSION["toChange"] = "";
    //WICHITG: Die Weiterleitungen funktionieren nur, 
    //wenn bis hier keinerlei Zeichen (HTML-Code) an 
    //den Browser geschickt wurden
    header('Location: demo_json_werk_detail.php');
}

//EDIT ROW
if (isset($_REQUEST["editRow"])) {
    $_SESSION["whatToDo"] = "Edit";
    $_SESSION["toChange"] = $_REQUEST["editRow"];
    //WICHITG: Die Weiterleitungen funktionieren nur, 
    //wenn bis hier keinerlei Zeichen (HTML-Code) an 
    //den Browser geschickt wurden
    header('Location: demo_json_werk_detail.php');
}



include 'view/include.werke-liste-unten.php';
include 'view/include.footer.php';
