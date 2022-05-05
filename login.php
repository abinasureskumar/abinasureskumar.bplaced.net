<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="view/icons/login.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="view/css/login.css" rel="stylesheet" />
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
                                    <div class="divider d-flex align-items-center my-4">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
                                    </div>
                                    <form action="controller/login-to-index.php" method="post" class="mx-1 mx-md-4">
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example3">Email address</label>
                                            <input type="email" name="email" required="required" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                                        </div>
                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <label class="form-label" for="form3Example4">Password</label>
                                            <input type="password" name="password" required="required" class="form-control form-control-lg" placeholder="Enter password" />
                                        </div>
                                        <!-- Checkbox with rememberMe -->
                                        <!-- <div class="d-flex justify-content-between align-items-center"> -->
                                        <!-- Checkbox -->
                                        <!-- <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                                <label class="form-check-label" for="form2Example3">
                                                    Remember me
                                                </label>
                                            </div>
                                            <a href="#!" class="text-body">Forgot password?</a>
                                        </div> -->

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" name="submit" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="view/img/Login-Clipart-Background.png" class="img-fluid" alt="Shopping Clipart">
                                </div> -->
                                <div class="col-md-10 col-lg-6 col-xl-7">
                                    <img src="view/img/Login-Clipart-Background.png" class="img-fluid" alt="Login Clipart">
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