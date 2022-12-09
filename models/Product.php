<?php
require 'database/init.php';
// this model will be related to database 
class Product
{
    static public function getAll()
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
        $addedQuery = InitDatabase::init()->prepare('INSERT INTO produits(title, description, collection, author, created)
         VALUES (:title, :description, :collection, :author, :created)');

        //   $addedQuery->prepare($sql);
        $addedQuery->bindParam(':title', $data['title']);
        $addedQuery->bindParam(':description', $data['description']);
        $addedQuery->bindParam(':collection', $data['collection']);
        $addedQuery->bindParam(':author', $data['author']);
        $addedQuery->bindParam(':created',  $data['created']);

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

            $updateQuery = InitDatabase::init()->prepare("UPDATE produits SET title= :title, description= :description, collection= :collection, created= :created WHERE id= :id");

            $updateQuery->bindParam(':id', $data['id'], PDO::PARAM_INT);
            $updateQuery->bindParam(':title', $data['title']);
            $updateQuery->bindParam(':description', $data['description']);
            $updateQuery->bindParam(':collection', $data['collection']);
            $updateQuery->bindParam(':created',  $data['created']);
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
            $query = 'DELETE FROM produits WHERE id = :id';
            $todoQuery = InitDatabase::init()->prepare($query);
            $todoQuery->execute(array(':id' => $id));
            $todo = $todoQuery->fetch(PDO::FETCH_OBJ);
            return 'ok';
        } catch (PDOException $err) {
            echo 'Erreur ' . $err->getMessage();
        }
    }
}
