<style>
    <?php include './view/css/main.css'; ?><?php include './view/css/popup.css'; ?>
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
    <script src="controller/js/scripts.js"></script>

</head>

<body>
    <!-- <div class="lightbox">
        <div class="iframeContainer text-center">
            <div class="toolbarLB">
                <span class="closeLB" onclick="lightBoxClose()">x</span>
            </div>
            <div class="iframe">
                <p class="small fw-bold mt-2 pt-1 mb-0">LMAO</p>
                <p class="small fw-bold mt-2 pt-1 mb-0">Visit as guest <a class="link" href="index.php" class="link-danger">Guest</a></p>
                <button type="submit" name="submit" class="btn btn-dark btn-outline-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                <button type="submit" name="submit" class="btn btn-dark btn-outline-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                <button type="submit" name="submit" class="btn btn-dark btn-outline-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            </div>
        </div>
    </div> -->
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
                        <a class="nav-link active" aria-current="page" href="#!">Home</a>
                    </li>
                    <li class="nav-item">
                        <button type="submit" name="submit" class="btn btn-black btn-outline-danger btn-lg btn-margin" style="font-size:smaller;">My Spaces</button>
                    </li>
                    <li>
                        <button type="submit" name="submit" class="btn btn-black btn-outline-primary btn-lg btn-margin" style="font-size:smaller;">Login</button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#!">My Profile</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">Favorite</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
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
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/mercury.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Mercury</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to chart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-danger position-absolute" style="top: 0.5rem; right: 1rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/venus.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Venus</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white nohover h-100">
                        <!-- Sold out badge-->
                        <div class="badge bg-dark text-danger position-absolute" style="top: 0.5rem; right: 1rem">Sold Out</div>
                        <!-- Product image-->
                        <img class="card-img-top earth-img" src="view/img/earth.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Earth</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-danger mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/mars.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Mars</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-danger position-absolute" style="top: 0.5rem; right: 1rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/jupiter.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jupiter</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/saturn.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Saturn</h5>
                                <!-- Product price-->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to chart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-danger position-absolute" style="top: 0.5rem; right: 1rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/uranus.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Uranus</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-transparent text-white h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="view/img/neptune.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Neptune</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-light mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
</body>

</html>