<?php

class ProductsController
{
    public function getAllProducts()
    {
        $products = Product::getAllProducts();
        return $products;
    }

    public function getProduct()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $product = Product::getCurrentProduct($data);
            return $product;
        }
    }

    public function deleteProduct()
    {
        if (isset($_POST['id'])) {
            $data = $_POST['id'];
            $result = Product::deleteCurrentProduct($data);
            if ($result === 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }

    public function getCollection()
    {
        $collections = Product::getCollections();
        return $collections;
    }



    public function newProduct()
    {
        if (isset($_POST['submitCreation'])) {
            $data = array(
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'qnt' => $_POST['qnt'],
                'image' => $_FILES['image']['name'],

            );
            $result = Product::add($data);
            if ($result === 'ok') {
                // header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }


    public function updateProduct()
    {

        if (isset($_POST['submitUpdate'])) {
            $data = array(
                'id' => $_POST['id'],
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'qnt' => $_POST['qnt'],
            );

            // 'author' => $_SESSION['user_id'],
            $result = Product::update($data);
            if ($result === 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }
}


function addProd()
{
    if (isset($_POST['submitCreation'])) {
        $prod = new ProductsController();
        $prod->newProduct();
        print_r($_POST['submitCreation']);
    }
}


function UpdateProd()
{
    if (isset($_POST['submitUpdate'])) {
        $prod = new ProductsController();
        $prod->updateProduct();
    }
}

addProd();
UpdateProd();
