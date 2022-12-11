<?php
require 'database/init.php';
// this model will be related to database 
class Product
{
    static public function getAllProducts()
    {
        $query = InitDatabase::init()->prepare('SELECT * FROM produits');
        $query->execute();
        return $query->fetchAll();
        //  close the connection with database 
        $query = null;
    }

    static public function getCollections()
    {
        $query = InitDatabase::init()->prepare('SELECT * FROM collections');
        $query->execute();
        return $query->fetchAll();
        //  close the connection with database 
        $query = null;
    }
    static public function getCurrentProduct($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM produits WHERE id = :id';
            $productQuery = InitDatabase::init()->prepare($query);
            $productQuery->execute(array(':id' => $id));
            $product = $productQuery->fetch(PDO::FETCH_OBJ);
            return $product;
        } catch (PDOException $err) {
            echo 'Erreur ' . $err->getMessage();
        }
    }
    static public function add($data)
    {
        $addedQuery = InitDatabase::init()->prepare('INSERT INTO produits(titre, description, prix, qnt, image)
         VALUES (:title, :description, :price, :quantity, :image)');

        //   $addedQuery->prepare($sql);
        $addedQuery->bindParam(':title', $data['titre']);
        $addedQuery->bindParam(':description', $data['description']);
        $addedQuery->bindParam(':price', $data['prix']);
        $addedQuery->bindParam(':quantity', $data['qnt']);
        $addedQuery->bindParam(':image', $data['image']);
        $image = $data['image'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/$image");

        if ($addedQuery->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $addedQuery = null;
    }

    static public function update($data)
    {
        try {

            $updateQuery = InitDatabase::init()->prepare("UPDATE produits SET titre= :title, description= :description, prix= :price, qnt= :quantity WHERE ID= :id");

            $updateQuery->bindParam(':id', $data['ID'], PDO::PARAM_INT);
            $updateQuery->bindParam(':title', $data['titre']);
            $updateQuery->bindParam(':description', $data['description']);
            $updateQuery->bindParam(':price', $data['prix']);
            $updateQuery->bindParam(':quantity',  $data['qnt']);
            $updateQuery->execute();

            return 'ok';
        } catch (PDOException $err) {
            echo 'Erreur ' . $err->getMessage();
        }
        $updateQuery = null;
    }

    static public function deleteCurrentProduct($data)
    {
        $id = $data['id'];
        try {
            $query = 'DELETE FROM produits WHERE ID = :id';
            $todoQuery = InitDatabase::init()->prepare($query);
            $todoQuery->execute(array(':id' => $id));
            $todo = $todoQuery->fetch(PDO::FETCH_OBJ);
            return 'ok';
        } catch (PDOException $err) {
            echo 'Erreur ' . $err->getMessage();
        }
    }
}
