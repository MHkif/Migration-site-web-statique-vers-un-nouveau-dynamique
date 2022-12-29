<div class="row m-0 justify-content-center align-items-center">



    <div class="row m-0 justify-content-center align-items-center">
        <h2 class="text-dark text-center mt-3">Create Product</h2>


        <form action="<?php echo URLROOT . '/dashboard/add'; ?>" class="col-md-6  text-dark fw-bold p-4" method="POST" enctype="multipart/form-data">
            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Title</label>
                <input class="form-control <?php echo (!empty($data['titre_err'])) ? 'is-invalid' : ''; ?>" name="titre" placeholder="Required Product Title" value="<?php echo $data['titre']; ?>">
                <div class="invalid-feedback">
                    <small><?php echo $data['titre_err']; ?></small>
                </div>
            </div>
            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Price</label>
                <input class="form-control <?php echo (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" type="number" name="prix" placeholder="Required Product Price" value="<?php echo $data['prix']; ?>">
                <div class="invalid-feedback">
                    <small><?php echo $data['prix_err']; ?></small>
                </div>
            </div>
            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Quantity</label>
                <input class="form-control <?php echo (!empty($data['qnt_err'])) ? 'is-invalid' : ''; ?>" type="number" name="qnt" placeholder="Required Product Quantity" value="<?php echo $data['qnt']; ?>">
                <div class="invalid-feedback">
                    <small><?php echo $data['qnt_err']; ?></small>
                </div>
            </div>

            <!--  -->
            <!-- ADD CATEGORY -->
            <!--  -->

            <!-- <div class="mb-3">
                    <label for="validationText" class="form-label">Collection</label>
                    <select name="collection" class="form-select" required aria-label="select example">
                        <option value="">Select Collection</option>
                        <option value="0">New Collection</option>
                      
                        <option value="School">School</option>
                        <option value="Personal">Personal</option>
                        <option value="Design">Design</option>
                    </select>
                    <div class="invalid-feedback"> invalid select</div>
                </div> -->

            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Image</label>

                <input class="form-control <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" type="file" name="image" id="formFile" value="<?php echo $data['image']; ?>" placeholder="Required a Product Image">
                <div class="invalid-feedback">
                    <small><?php echo $data['image_err']; ?></small>
                </div>
            </div>
            <div class="my-4 text-center ">
                <input class="btn btn-dark" name="add" type="submit" value="Create">
            </div>


        </form>
    </div>
</div>