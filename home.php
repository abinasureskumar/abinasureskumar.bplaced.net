<style>
    <?php include './view/css/main.css'; ?><?php include './view/css/popup3.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Space market</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="view/icons/space.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="view/css/main.css" rel="stylesheet" /> -->
    <!-- <script src="controller/js/scripts.js"></script> -->

</head>

<body>
    <!-- POPUP card -->
    <div class="text-center bg-danger popup-btn">
        <div class="popup-card" id="popup">
            <!-- <button class="btn-close closeBtn" variant="white" onclick="hide('popup')"></button> -->
            <div id="lmaolol"></div>
            <div class="delete">
                <button class="bi bi-trash btn btn-black btn-outline-danger deleteBtn" onclick="hide('popup')"></button>
            </div>
        </div>
    </div>

    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container px-4 px-lg-5">
            <img class="logo navbar-brand" src="./view/img/logo2.gif" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <button type="submit" name="submit" class="btn btn-black btn-outline-primary btn-lg btn-margin" style="font-size:smaller;">My Spaces</button>
                    </li>
                    <li>
                        <button type="submit" name="submit" class="btn btn-black btn-outline-primary btn-lg btn-margin" style="font-size:smaller;">Profile</button>
                    </li>
                </ul>
                <div class="d-flex">
                    <div>
                        <form action="cart.php" method="post">
                            <button class="btn btn-outline-light">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </div>
                    <div>
                        <form method="post" action="index.php">
                            <button type="submit" name="submit" class="btn btn-black btn-outline-danger btn-lg btn-margin-logout" style="font-size:smaller;">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Welcome to our space market</h1>
                <p class="lead fw-normal text-white-50 mb-0">Buy your own land on planets by your choice!</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5 bg-black">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="listlmao">
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>

    <script src="controller/js/popup2.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>