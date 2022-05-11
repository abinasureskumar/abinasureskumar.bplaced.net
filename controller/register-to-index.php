<!-- register to login page -->
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
    $database = "db_planet";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $username = $_REQUEST['name'];
    $userpassword = $_REQUEST['newPassword'];
    $useremail = $_REQUEST['newEmail'];
    $sql = "INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`) VALUES (NULL, '" . $username . "', '" . $useremail . "', '" . $userpassword . "');";

    $check_email = mysqli_query($conn, "SELECT email FROM `tbl_users` where 'email' = '" . $useremail . "' ");
    if ($check_email) {
        header('location: ../register.php');
    } else if ($conn->query($sql) === TRUE) {
        // echo "New user created successfully";
        header('location: ../index.php');
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../register.php');
    }
    // if ($conn->query($sql) === TRUE) {
    //     // echo "New user created successfully";
    //     header('location: ../index.php');
    // } else {
    //     // echo "Error: " . $sql . "<br>" . $conn->error;
    //     header('location: ../register.php');
    // }

    $sql2 = "SELECT * FROM `tbl_users`;";

    $db_test = mysqli_query($conn, $sql2);
    if (!$db_test) {
        die('Ungültige Abfrage: ');
    }

    while ($check_email = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
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
        header('location: ../home.php');
    } else {
        header('location: ../index.php');
    }
}


// header('location: ../index.php');

$conn->close();
