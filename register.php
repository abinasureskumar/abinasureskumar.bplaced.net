<?php
session_start();
$name = '';
$newEmail = '';
$newPassword = '';

// hier die Werte befüllen
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $newEmail = $_SESSION['newEmail'];
    $newPassword = $_SESSION['newPassword'];
}


// falls Sie den $benutzer nicht befült haben
// bekommt er hier einen  Initialwert
if (strlen($name) < 2) {
    $name = "initial";
}
$data = $name . "\n" . $newEmail . "\n" . $newPassword;


//hier die Daten speichern
$directorypfad = "model/";
$filename = $directorypfad . "user_" . $name . ".data";
file_put_contents($filename, $data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="view/icons/register.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="view/css/register.css" rel="stylesheet" />
</head>

<body>
    <section class="vh-100 bg-dark">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form action="controller/register-to-index.php" method="post" class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" required="required" class="form-control" /></input>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="newEmail" required="required" class="form-control" /></input>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="newPassword" required="required" class="form-control" /></input>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Repeat your password</label>
                                                <input type="password" name="rePassword" required="required" class="form-control" /></input>
                                            </div>
                                        </div>

                                        <!-- <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div> -->

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-dark btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="view/img/Shopping-Clipart-Background.png" class="img-fluid" alt="Shopping Clipart">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>