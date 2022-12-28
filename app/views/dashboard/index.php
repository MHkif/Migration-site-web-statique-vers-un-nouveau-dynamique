<?php

require APPROOT . '/views/inc/header.php';
?>


<main class="px-0">
    <div style="background-color: #FFEFD5;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFFAFA" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,202.7C480,203,600,181,720,149.3C840,117,960,75,1080,64C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>

</main>

<div class="container">

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col">

                <div class="mt-0 mb-5 d-flex justify-content-between">
                    <h2 class="pull-left ">Products</h2>
                    <a href="<?php echo URLROOT . '/dashboard/add' ?>" class="btn bg-dark  d-flex align-items-center text-decoration-none text-white ">New Product</a>
                </div>

                <div class="container overflow-scroll">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['products'] as $product) : ?>
                                <tr>
                                    <th scope="row"><?php echo $product->id; ?></th>
                                    <td class="d-flex justify-content-center   align-items-center px-0">
                                        <img class="rounded-3" src="<?php echo URLROOT . '/uploads/' . $product->image; ?>" style="width: 80px;height: 80px;" alt="img">
                                    </td>
                                    <!-- <td>
                                    <div class="form-group">
                                         <label for="body">image</label> 
                                         <input type="file" name="image" accept="image/png, image/jpg, image/gif, image/jpeg,image/jfif" class="form-control form-control-lg  <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>">></input>         <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>       </div>
                                    
                                </td> -->
                                    <td><?php echo $product->titre ?></td>
                                    <td><?php echo $product->prix; ?></td>
                                    <td><?php echo $product->qnt; ?></td>
                                    <td >
                                        <div class="d-flex justify-content-center align-items-center  gap-2">
                                            
                                        <a  role="button" class="text-success fs-4" href="<?php echo URLROOT . '/dashboard/update/' . $product->id ?>" ><i class="fa-solid fa-pen-to-square"></i> </a>
                                        <form class="p-0 m-0" action="<?php echo URLROOT . '/dashboard/delete/' . $product->id ?>" method="POST">
                                            <button class="btn btn-outline-light text-danger fs-4" name="delete"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                        </div>

                                    </td>

                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>






                </div>
            </div>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>