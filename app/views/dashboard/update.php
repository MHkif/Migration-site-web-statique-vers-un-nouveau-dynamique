<div class="row m-0 justify-content-center align-items-center">

    <div class="row m-0 justify-content-center align-items-center">
        <h2 class="text-dark text-center mt-3">Update Product</h2>


        <form action="<?php echo URLROOT . '/dashboard/update/' . $data['id'] ?>" class="col-md-6  text-dark fw-bold p-4" method="post" enctype="multipart/form-data">
            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">id</label>
                <input class="form-control" name="id" placeholder="Required " value="<?php echo $data['id']; ?>" readonly>
                <div class="invalid-feedback">
                    Somthing wrong check id
                </div>
            </div>

            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Title</label>
                <input class="form-control  <?php echo (!empty($data['titre_err'])) ? 'is-invalid' : ''; ?>" name="titre" placeholder="Required Product Title" value="<?php echo $data['titre']; ?>">
                <div class="invalid-feedback">
                    <?php echo $data['titre_err']; ?>
                </div>
            </div>

            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Price</label>
                <input class="form-control" type="number" name="prix" placeholder="Required Product Price" value="<?php echo $data['prix'] ?>" required>
                <div class="invalid-feedback">
                    Please enter a Product Price.
                </div>
            </div>

            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Quantity</label>
                <input class="form-control" type="number" name="qnt" placeholder="Required Product Quantity" value="<?php echo $data['qnt'] ?>" required>
                <div class="invalid-feedback">
                    Please enter a Product Quantity.
                </div>
            </div>


            <div class="mb-3 text-dark">
                <label for="validationText" class="form-label">Image</label>

                <input class="form-control" type="file" name="image" id="formFile" value="<?php echo $data['image'] ?>" placeholder="Required a Product Image">
                <div class="invalid-feedback">
                    Please give your product an attractive Image.
                </div>
            </div>

            <div class="my-4 text-center ">
                <input class="btn btn-dark" type="submit" value="Update">
            </div>

            <form>
    </div>
</div>