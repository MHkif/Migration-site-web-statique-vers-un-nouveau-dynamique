<div class="wrapper">
  <a href="<?php echo URLROOT; ?>/pages/home">  <img src="<?php echo URLROOT; ?>./src/images/cullianPNG.png" alt=""></a>


  <div class="container main">
    <div class="row">
      <div class="col-md-6 side-image">
        <!-- Image -->

        <div class="text">
          <p>Discover World Best Jewelry</p>
        </div>
      </div>
      <div class="col-md-6 right">
        <div class="input-box">
          <header>Welcome To Cullinan</header>


          <form action="<?php echo URLROOT; ?>/admins/login" method="POST">

            <div class="input-field">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="input-field">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>

            <div class="input-field">
            <input type="submit" value="Login" class="btn btn-dark btn-block">
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  * {
    font-family: 'labster', cursive;
  }

  .wrapper {
    background: #ececec;
    padding: 0 20px 0 20px;
    position: relative;
  }

  img {
    width: 100px;
    position: absolute;
    top: 20px;
    left: 20px;
  }

  .main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .row {
    width: 900px;
    height: 460px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
  }

  .side-image {
    background-image: url("<?php echo URLROOT; ?>./src/images/unsplash.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 10px 0 0 10px;
  }



  .text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .text p {
    color: #fff;
    font-size: 22px;
    text-align: center;
  }

  .right {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .input-box {
    width: 330px;
    box-sizing: border-box;
  }

  .input-box header {
    font-weight: 700;
    text-align: center;
    margin-bottom: 40px;
  }

  .input-field {
    display: flex;
    flex-direction: column;
    /* position: relative; */
    padding: 0 10px 0 10px;
    margin-bottom: 20px;
  }

  .input {
    height: 45px;
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    outline: none;
    /* margin-bottom: 20px; */
    color: #40414a;

  }



  @media only screen and (max-width: 768px) {
    .input-box header {
      font-weight: 700;
      text-align: center;
      margin-bottom: 25px;
    }

    img {
      width: 75px;
      position: absolute;
      top: 12px;
      left: 12px;
    }

    .side-image {
      border-radius: 10px 10px 0 0;
    }

    .text {
      position: absolute;
      top: 60%;
      text-align: center;
    }

    .text p {
      font-size: 17px;
    }

    .row {
      max-width: 420px;
      width: 100%;
    }

    .input-field {

      margin-bottom: 16px;
    }



  }
</style>