<?php

class ProductsController
{
    public function getAllProducts()
    {
        $products = Product::getAll();
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
        if (isset($_POST['submit'])) {
            $data = array(
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'collection' => $_POST['collection'],
                'author' => $_SESSION['user_id'],
                'created' => date('d/m/y h:i:s'),
            );
            $result = Product::add($data);
            if ($result === 'ok') {
                header('location:' . BASE_URL);
            } else {
                echo $result;
            }
        }
    }


    public function updateProduct()
    {

        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'collection' => $_POST['collection'],
                'created' => date('d/m/y h:i:s'),
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
