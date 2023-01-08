<?php

require APPROOT . '/views/inc/header.php';
?>

<!-- Hero section -->
<main style="background-color: #FFEFD5 !important;">
  <div class="text-secondary px-1 py-5 text-center">
    <div class="col d-flex flex-column gap-4">
      <div style="font-family: 'Courgette', cursive; ">
        <h1 class="display-5 fw-bold  lh-1 text-dark">Discover</h1>
        <h1 class="display-4 fw-bold lh-1  text-dark">World Best </h1>
        <h1 class="display-4 fw-bold lh-1  text-dark"> Jewelry</h1>
      </div>
      <p class="lead d-none d-md-flex w-50 mx-auto fs-6" style="font-family: 'Poppins';">Modern jewelry is made of gold, sliver, or platinum. often with precious or semiprecious stones, it evolved from shells, animal teeth, and other items used as body decoration in prehistoric times .</p>


      <div class="d-grid gap-2 d-md-flex justify-content-center" style="font-family: 'labster', cursive;">
        <a href="<?php echo URLROOT; ?>/pages/gallery" class="btn btn-dark btn-lg px-4 me-md-2">Shop All</a>
        <a href="<?php echo URLROOT; ?>/pages/#about" class="btn btn-outline-dark btn-lg px-4">Our Story</a>
      </div>
    </div>

  </div>
  </div>
  <div style="background-color: #FFEFD5;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFAFA" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,149.3C840,117,960,75,1080,64C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </div>
</main>
<!-- END Hero section -->

<div class="container-fluid py-2">
  <div class="row flex-lg justify-content-center align-items-center">
    <div class="col col-sm-6 col-lg-6">
      <img src="<?php echo URLROOT; ?>./src/images/E_ANGLE.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
    </div>
    <div class="col-sm-6 px-5">
      <h1 class="fs-2 fs-sm-1 text-center text-md-start">Swarovski Chroma Ring, Purple, Gold-Tone Plated</h1>
      <p class="lead d-none d-md-flex px-1 fs-6 text-secondary" style="font-family: 'Poppins';">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
      <div class="d-grid gap-4 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Book An Appointment</button>

      </div>
    </div>
  </div>
</div>

<!-- New Arrivals -->
<div class="container-fluid p-4 p-sm-5 my-2">
  <h1 class="fs-1 p-3">New Arrivals</h1>

  <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4  g-4">
    <!--  -->

    <?php foreach ($data['products'] as $product) : ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo URLROOT; ?>/uploads/<?php echo $product->image; ?>" class="card-img-top" alt="...">
          <div class="card-body h-auto">
            <h5 class="card-title d-flex flex-col  align-items-center" style="line-height: 1em;
    height: 2em; font-size:14px;     
    overflow: hidden;"><?php echo $product->titre; ?></h5>
            <p class="card-text fs-6 position-ralative"><b> <span class="text-secondary">MAD</span> <?php echo $product->prix; ?> <span class="position-absolute top-10 start-10" style="font-size: 12px; font-weight:400;">00</span> </b> </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <!--  -->

  </div>
</div>






<!-- Collections -->
<div class="container-fluid py-3 text-center ">
  <h1 class="fs-1 p-3" style="font-family: 'Courgette', cursive; ">Cullinan's best Collections</h1>
  <div class="row flex-lg justify-content-center align-items-center p-3 p-sm-5">
    <div class="col col-sm-6 col-lg-6 ">
      <img src="<?php echo URLROOT; ?>./src/images/amavida.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
    </div>
    <div class="col-sm-6 px-5 text-md-start d-flex flex-column gap-3">
      <h1 class="fs-3 d-none d-md-flex  text-secondary">Comfort</h1>
      <p class="lead d-none d-md-flex px-1 fs-6 text-secondary" style="font-family:'Poppins', sans-serif;">Whether you are looking for an elegant new piece of jewelry for everyday wear or a once-in-a-lifetime occasion, visit us at Jones Bros Jewelers. Our impeccable customer service and high-quality jewelry make us the right choice for your needs. At our jewelry store in Peoria IL, we carry tasteful pieces by many well-known designers and have the largest selection of mined and lab grown diamonds in the area.

        We are your source for beautiful engagement rings and wedding bands, watches, earrings, bracelets and necklaces. Visit our jewelry store in Cullinan today.</p>

    </div>
  </div>

  <div class="row flex-lg justify-content-center align-items-center p-3 p-sm-5">
    <div class="col-sm-6 px-5 text-md-start  d-flex flex-column gap-3">
      <h1 class="fs-3 d-none d-md-flex  text-secondary">100 % GOLD</h1>
      <p class="lead d-none d-md-flex px-1 fs-6 text-secondary" style="font-family: 'Poppins';">Gold is elegant when new piece of jewelry for everyday wear or a once-in-a-lifetime occasion, visit us at Jones Bros Jewelers. Our impeccable customer service and high-quality jewelry make us the right choice for your needs. At our jewelry store in Peoria IL, we carry tasteful pieces by many well-known designers and have the largest selection of mined and lab grown diamonds in the area.

        We are your source for beautiful engagement rings and wedding bands, watches, earrings, bracelets and necklaces. Visit our jewelry store in Peoria IL today.</p>

    </div>
    <div class="col col-sm-6 col-lg-6 ">
      <img src="<?php echo URLROOT; ?>./src/images/tacori.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
    </div>

  </div>

  <div class="row flex-lg justify-content-center align-items-center p-3 p-sm-5">
    <div class="col col-sm-6 col-lg-6 ">
      <img src="<?php echo URLROOT; ?>./src/images/henri_daussi.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
    </div>
    <div class="col-sm-6 px-5 text-md-start d-flex flex-column gap-3">
      <h1 class="fs-3 d-none d-md-flex  text-secondary">Quality</h1>
      <p class="lead d-none d-md-flex px-1 fs-6 text-secondary" style="font-family: 'Poppins';">Whether you are looking for an elegant new piece of jewelry for everyday wear or a once-in-a-lifetime occasion, visit us at Jones Bros Jewelers. Our impeccable customer service and high-quality jewelry make us the right choice for your needs. At our jewelry store in Peoria IL, we carry tasteful pieces by many well-known designers and have the largest selection of mined and lab grown diamonds in the area.

        We are your source for beautiful engagement rings and wedding bands, watches, earrings, bracelets and necklaces. Visit our jewelry store in Cullinan today.</p>

    </div>
  </div>

</div>

<!-- ABOUT SECTION  -->
<div class="container-fluid py-3 text-center " id="about">
  <h1 class="fs-1 p-3" style="font-family: 'Courgette', cursive; ">About Us</h1>
  <div class="row flex-lg justify-content-center align-items-center p-3 p-sm-5">
    <div class="col-sm-6 col-md-3 px-5 text-md-start d-flex flex-column gap-3">
      <h1 class="fs-2 d-none d-md-flex text-dark">GURANTEE</h1>
      <p class="lead d-none d-md-flex px-1 fs-5 text-secondary" style="font-family: 'Poppins';">Always guarantee that the products we provide are High Quality </p>

    </div>
    <div class="col col-sm-6 ">
      <img src="<?php echo URLROOT; ?>./src/images/quality.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
    </div>
    <div class="col-sm-6  col-md-3 px-5 text-md-start d-flex flex-column gap-3">
      <h1 class="fs-2 d-none d-md-flex  text-dark">CASHBACK UP TO 80%</h1>
      <p class="lead d-none d-md-flex px-1 fs-5 text-secondary" style="font-family: 'Poppins';">only by using our services, you can get money back up to 80% </p>
    </div>
  </div>

  <div class="row flex-lg justify-content-center align-items-center p-3 p-sm-5 gap-3 gap-md-0">

    <div class="col col-sm-6 col-md-4 ">
      <img src="<?php echo URLROOT; ?>./src/images/delivery.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
    </div>
    <div class="col-sm-6 col-md-4 px-5 text-md-start d-flex flex-column gap-3">
      <h1 class="fs-2 d-none d-md-flex  text-dark">FREE DELIVERY</h1>
      <p class="lead d-none d-md-flex px-1 fs-5 text-secondary" style="font-family: 'Poppins';">Free shipping to all regions, with guaranteed service on time </p>
    </div>
    <div class="col col-sm-6 col-md-4 ">
      <img src="<?php echo URLROOT; ?>./src/images/cash.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
    </div>

  </div>



</div>
<!-- MAP SECTION -->
<div class="container-fluid p-4">
  <div class="row my-3">
    <div class="col">
      <div class="row d-flex justify-content-center gap-4">
        <div class="col-12 col-md-6">
          <div class="widget maps">
            <div class="maps-inner ">
              <iframe loading="lazy" width="100%" height="400" frameborder="0" style="border:0; border-radius: 20px" title="Map " src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Youcode&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="row">
            <div class="col-6 col-xs-12 mb-4">
              <h5>LOCATION</h5>
              <ul class="list-inline">
                <li class="list-inline-item">Youcode Safi</li>
              </ul>
              <ul class="list-inline">
                <li class="list-inline-item">14 Av. Zerktouni, Safi</li>
              </ul>
              <ul class="list-inline ">
                <li class="list-inline-item"><strong><a href="tel:3096923228 " class="text-decoration-none">(212) 692-3228 </a></strong></li>
              </ul>
            </div>
            <div class="col-6 col-xs-12  mb-4">
              <h5>STORE HOURS</h5>
              Tuesday - Friday: 10AM - 5:30PM <br> Saturday: 10AM - 4PM <br>Closed Sunday &amp; Monday
            </div>
            <div class="col-12 col-md-12 col-lg-12 mt-2">
              <!-- <div class="block-appointment">
                                <a class="button-appointment text-dark" style="font-family: 'Courgette', cursive; " href="">BOOK AN APPOINTMENT</a>
                            </div> -->
              <div class="d-grid gap-4 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Book An Appointment</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TESTIMONIAL SECTION -->


<div class="container-fluid p-3 p-sm-5 mb-4">
  <div class="container row  mx-auto justify-content-center text-center pt-3 ">
    <div class="col col-md-8 d-flex flex-column gap-3 py-5 rounded-3" style="font-family: 'Courgette', cursive; ">
      <h1 class="fs-4 text-center text-dark">These People trust Us</h1>
      <p class="lead px-1 fs-6 text-secondary">Every day, for more than 10 years, we're trusted by all clients, people and even companies to bring to them an amazing collections of Dimonds and Pure Gold .</p>

    </div>

  </div>
  <div class="row  justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

    <div class="col">
      <div class="card border border-warning shadow-0 mb-3">
        <div class="card d-flex align-items-center  gap-3 flex-row  text-dark border-0 p-2">
          <img src="<?php echo URLROOT; ?>./src/images/img%20(9).png" class="rounded-circle" style="width: 50px; height: 50px" alt="Avatar" />
          <div class="row" style="font-family: 'Poppins', cursive; ">
            <h5 class="">John Smith</h5>
            <small class="text-secondary">Consectetur adipiscing</small>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text" style="font-family: 'Courgette', cursive; "><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.</p>

        </div>
      </div>
    </div>

    <div class="col">
      <div class="card border border-warning shadow-0 mb-3">
        <div class="card d-flex align-items-center  gap-3 flex-row  text-dark border-0 p-2">
          <img src="<?php echo URLROOT; ?>./src/images/img%20(1).png" class="rounded-circle" style="width: 50px; height: 50px" alt="Avatar" />
          <div class="row" style="font-family: 'Poppins', cursive; ">
            <h5 class="">Maria Smantha</h5>
            <small class="text-secondary">UX Designer</small>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text" style="font-family: 'Courgette', cursive; "><i class="ri-double-quotes-l"></i> Neque cupiditate assumenda in maiores repudi mollitia architecto.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border border-warning shadow-0 mb-3">
        <div class="card d-flex align-items-center  gap-3 flex-row  text-dark border-0 p-2">
          <img src="<?php echo URLROOT; ?>./src/images/img%20(2).png" class="rounded-circle" style="width: 50px; height: 50px" alt="Avatar" />
          <div class="row" style="font-family: 'Poppins', cursive; ">
            <h5 class="">Lisa Cudrow</h5>
            <small class="text-secondary">Web Developer</small>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text" style="font-family: 'Courgette', cursive; "> <i class="ri-double-quotes-l"></i> Delectus impedit saepe officiis ab aliquam repellat rem unde ducimus.</p>
        </div>
      </div>
    </div>





  </div>
</div>

<script>
  let defaultTransform = 0;

  function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  next.addEventListener("click", goNext);

  function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  prev.addEventListener("click", goPrev);
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>