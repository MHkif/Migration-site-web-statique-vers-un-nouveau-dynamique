<nav class="navbar navbar-expand-lg text-center" style="background-color: #FFEFD5;">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>">
      <img src="<?php echo URLROOT; ?>/src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;">


      <?php if (isset($_SESSION['user_id'])) : ?>
        <small class="fs-6 text-light px-2 py-1 bg-dark opacity-75 mx-1 rounded-3" style="font-family: 'Courgette', cursive; ">
          <?php echo $_SESSION['username']; ?>

        </small>
      <?php endif; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4 fw-bold" style="font-family: 'labster', cursive;">

        <?php if (isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/">Dashboard</a>
          </li>

        <?php endif; ?>



        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="<?php echo URLROOT; ?>/pages/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact us</a>
        </li>


      </ul>
      <ul class="navbar-nav ml-auto" style="font-family: 'labster', cursive;">
        <?php if (isset($_SESSION['user_id'])) : ?>
          <!-- <button type="submit" name="login" class="btn btn-dark btn-lg px-4 ">Login</button> -->
          <li class="nav-item">

            <a class="nav-link btn btn-light btn-lg px-4 text-dark" href="<?php echo URLROOT; ?>/admins/logout">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">

            <!-- <button type="button" name="login" class="btn btn-dark btn-lg px-4 " data-toggle="modal" data-target="#myodal">Login</button> -->
            <a class="nav-link btn btn-dark text-white btn-lg px-4 " href="<?php echo URLROOT; ?>/admins/login" >Login</a>
          </li>
        <?php endif; ?>
      </ul>


    </div>
  </div>
</nav>


<div class="modal fade" id="myodal" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content py-5">
      <!-- Modal body -->
      <div class="container-fluid m-auto col-lg-8" style="font-family: 'labster', cursive;">
        <div class="d-flex justify-content-center mb-5"><img src="./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;"></div>
        <form action="home" method="post">
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