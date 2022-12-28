<?php

use app\core\Application;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Home</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        a {
            text-decoration: none
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90 !important;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem !important;
                border-bottom-right-radius: .3rem!important ;
            }
        }
    </style>
</head>

<body style=" background-color: #FFFAFA;">
    <nav class="navbar navbar-expand-lg text-center" style="background-color: #FFEFD5;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;">

                <small class="fs-6 text-light px-2 py-1 bg-dark opacity-75 mx-1 rounded-3" style="font-family: 'Courgette', cursive; ">
                <?php  echo "Application::isGuest()" ? "No Admin" : "Application::adminName()"?></small> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact us</a>
                    </li>

                </ul>
                <form action="" method="post" class="d-flex gap-3">
                    <?php if ("Application::isGuest()") { ?>
                        <!-- type="button" data-bs-toggle="modal" data-bs-target="#myModal" -->
                        <a href="/login" class="btn btn-light" role="button">Log in</a>
                      <a href="/register" class="btn btn-dark" role="button">Sign up</a> 

                    <?php } else { ?>

                        <a href="/logout" class="btn btn-light" role="button">logout</a>

                    <?php } ?>
                    <!-- <form action="" method="post" class="d-flex gap-3">
                    <a href="/login" class="btn btn-light" role="button">Sign in</a>
                    <a href="/register" class="btn btn-dark" role="button">Sign up</a> -->
                </form>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-5">
                <!-- Modal body -->
                <div class="container-fluid m-auto col-lg-8" style="font-family: 'labster', cursive;">
                    <div class="d-flex justify-content-center mb-5"><img src="./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;"></div>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="d-grid justify-content-center" style="font-family: 'labster', cursive;">
                            <button type="submit" name="login" class="btn btn-dark btn-lg px-4 ">Login</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
     
        {{content}}
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFEFD5" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,90.7C480,75,600,85,720,122.7C840,160,960,224,1080,224C1200,224,1320,160,1380,128L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>

    <footer class="bd-footer p-0 m-0" style="background-color: #FFEFD5;">

        <div class="container pb-5 ">
            <div class="row d-flex justify-content-between ">
                <div class="col-lg-4 mb-3 ">
                    <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Cullinan">
                        <img src="./src/images/cullianPNG.png" width="100" height="40" class="d-block me-2" viewBox="0 0 118 94" role="img">

                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2">Designed and built with all the love in the world by the <a class="text-decoration-none text-secondary" href="#">Bootstrap team</a> with the help of <a class="text-decoration-none text-secondary" href="#">our contributors</a>.</li>
                        <li class="mb-2">Code licensed <a class="text-decoration-none text-secondary" href="#" target="_blank" rel="license noopener">MIT</a>, docs <a class="text-decoration-none text-secondary" href="#" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                        <li class="mb-2">Currently v5.0.2.</li>
                        <li class="mb-2">Analytics by <a class="text-decoration-none text-secondary" href="#" target="_blank" rel="noopener">Fathom</a>.</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Book an Appointment</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Appraisals</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Jewelry</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Repair</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Sell Your Gold & Jewelry</a></li>

                    </ul>
                </div>

                <div class="col-6 col-lg-2 mb-3">
                    <h5>Shop Now</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Bracelets</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Earrings</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Rings</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Necklaces</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Pendants</a></li>

                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Our Store</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="about">About</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Apply</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Contact Us</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#">Events</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-secondary" href="#"></a></li>

                    </ul>
                </div>


            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>