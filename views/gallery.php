<main class="px-0">
    <div class="container-fluid px-0 pt-2" style="background-color: #FFEFD5;">
        <div class="row flex-lg justify-content-center align-items-center mx-0">
            <div class="col col-sm-6 col-lg-6">
                <img src="./src/images/E_ANGLE.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
            </div>
            <div class="col-sm-6 px-5">
                <h1 class="display-5 fst-italic text-center">UNEEK DIAMOND BAND WITH CUSHION-SHAPED</h1>
                <p class="lead my-3">Whether you are looking for an elegant new piece of jewelry for everyday wear or a once-in-a-lifetime occasion</p>



            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFFAFA" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,149.3C840,117,960,75,1080,64C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>

</main>


<div class="container my-2">
    <div class=" d-flex align-items-center justify-content-between mb-3 px-2">
        <h2 class="pull-left">Products</h2>
        <a class="btn btn-dark d-flex align-items-center" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Add Product</a>

        <!-- Add Canvas -->

        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="row m-0 justify-content-center align-items-center">
                    <!-- ADD PRODUCT -->
                    <form class="col text-dark p-2" method="POST">
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Title</label>

                            <input class="form-control" name="titre" value="" placeholder="Required Todo Title" required>

                            <div class="invalid-feedback">
                                Please give your product a short and clear Title.
                            </div>
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Todo Description</label>
                            <textarea class="form-control " name="description" placeholder="Required Product Description" required></textarea>
                            <div class="invalid-feedback">
                                Please give your product a short and clear Description.
                            </div>
                        </div>

                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">price</label>
                            <input class="form-control" name="prix" type="number" value="Price" placeholder="Required a Product Price" required>
                            <div class="invalid-feedback">
                                Please enter a Price.
                            </div>
                        </div>

                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Quantity</label>
                            <input class="form-control" name="qtn" type="number" value="Quantity" placeholder="Required a Product Quantity" required>
                            <div class="invalid-feedback">
                                Please enter a Quantity.
                            </div>
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Image</label>

                            <input class="form-control" type="file" name="image" id="formFile" value="Image" placeholder="Required a Product Image" required>
                            <div class="invalid-feedback">
                                Please give your product an attractive Image.
                            </div>
                        </div>
                        <div class="my-3">
                            <input class="btn btn-dark" name="submitCreation" type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-start justify-content-start p-3 px-2">


        <!-- Update Canvas -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsUpdateLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsUpdateLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="row m-0 justify-content-center align-items-center">

                    <!-- UPDATE PRODUCT -->
                    <form class="col text-dark p-2" method="POST">
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Title</label>
                            <input name="id" value="<?php echo "nnnn"; ?>" hidden>
                            <input class="form-control" name="titre" value="" placeholder="Required Todo Title" required>

                            <div class="invalid-feedback">
                                Please give your product a short and clear Title.
                            </div>
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Todo Description</label>
                            <textarea class="form-control " name="description" placeholder="Required Product Description" required></textarea>
                            <div class="invalid-feedback">
                                Please give your product a short and clear Description.
                            </div>
                        </div>

                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">price</label>
                            <input name="id" value="<?php echo "====="; ?>" hidden>
                            <input class="form-control" name="prix" type="number" value="Price" placeholder="Required a Product Price" required>
                            <div class="invalid-feedback">
                                Please enter a Price.
                            </div>
                        </div>

                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Quantity</label>
                            <input name="id" value="<?php echo "====="; ?>" hidden>
                            <input class="form-control" name="qtn" type="number" value="Quantity" placeholder="Required a Product Quantity" required>
                            <div class="invalid-feedback">
                                Please enter a Quantity.
                            </div>
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="validationText" class="form-label">Image</label>
                            <input name="id" value="<?php echo "====="; ?>" hidden>

                            <input class="form-control" type="file" name="image" id="formFile" value="Image" placeholder="Required a Product Image" required>
                            <div class="invalid-feedback">
                                Please give your product an attractive Image.
                            </div>
                        </div>
                        <div class="my-3">
                            <input class="btn btn-dark" name="submitUpdate" type="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card  border-0">
                <img src="./src/images/chroma.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tacori Collar-360</h5>
                    <p class="card-text">This is a short card.</p>
                    <form action="" method="POST">
                        <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">
                            <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Edit</button> -->
                            <!-- <button class="btn btn-dark" type="button">Delete</button> -->

                            <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                            <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <i class="ri-file-edit-fill fs-5"></i>
                            </button>


                            <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                            <button class="btn btn-outline p-0 text-danger ">
                                <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                            </button>


                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card  border-0">
                <img src="./src/images/bracelet.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tacori Collar-360</h5>
                    <p class="card-text">This is a short card.</p>
                    <form method="POST">
                        <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">

                            <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                            <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <i class="ri-file-edit-fill fs-5"></i>
                            </button>
                    </form>

                    <form method="POST">
                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-danger" type="button">
                            <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0">
            <img src="./src/images/E_ANGLE.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
                <form action="" method="POST">
                    <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">
                        <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Edit</button> -->
                        <!-- <button class="btn btn-dark" type="button">Delete</button> -->

                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <i class="ri-file-edit-fill fs-5"></i>
                        </button>


                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-danger ">
                            <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                        </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0">
            <img src="./src/images/collar-360.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
                <form action="" method="POST">
                    <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">
                        <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Edit</button> -->
                        <!-- <button class="btn btn-dark" type="button">Delete</button> -->

                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <i class="ri-file-edit-fill fs-5"></i>
                        </button>


                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-danger ">
                            <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                        </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0">
            <img src="./src/images/chroma.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
                <form action="" method="POST">
                    <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">
                        <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Edit</button> -->
                        <!-- <button class="btn btn-dark" type="button">Delete</button> -->

                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <i class="ri-file-edit-fill fs-5"></i>
                        </button>


                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-danger ">
                            <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                        </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0">
            <img src="./src/images/bracelet.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
                <form action="" method="POST">
                    <div class=" col-6 mx-auto d-flex justify-content-center  align-items-center gap-4 rounded-3 bg-light">
                        <!-- <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Edit</button> -->
                        <!-- <button class="btn btn-dark" type="button">Delete</button> -->

                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <i class="ri-file-edit-fill fs-5"></i>
                        </button>


                        <!-- <input name="id" value="<?php echo $todo["id"]; ?>" hidden> -->
                        <button class="btn btn-outline p-0 text-danger ">
                            <i class="ri-delete-bin-2-fill fs-5 text-danger"></i>
                        </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>