<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function getProducts()
    {
        $this->db->query('SELECT * FROM produits');

        $results = $this->db->resultSet();

        return $results;
    }
    public function getProductsLimit()
    {
        $this->db->query('SELECT * FROM produits LIMIT 4');

        $results = $this->db->resultSet();

        return $results;
    }


    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM produits WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }



    public function add($data)
    {


        $this->db->query('INSERT INTO produits(titre, prix, qnt, image)
         VALUES (:title, :price, :quantity, :image)');

        $this->db->bind(':title', $data['titre']);
        $this->db->bind(':price', $data['prix']);
        $this->db->bind(':quantity', $data['qnt']);
        $this->db->bind(':image', $data['image']);


        // Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }


    public function update($data)
    {
        $file_name = $data["image"];

        $target_file = './uploads/' . $file_name;
        // $file_tpname = $data["file"];

        $this->db->query("UPDATE produits SET  image= :image,  titre= :titre, prix= :prix, qnt= :qnt WHERE id= :id");
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':image', $file_name);
        $this->db->bind(':titre',  $data['titre']);
        $this->db->bind(':prix',  $data['prix']);
        $this->db->bind(':qnt',  $data['qnt']);


        // Execute
        if ($this->db->execute()) {
            // move_uploaded_file($file_tpname, $target_file);
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        $this->db->query('DELETE FROM produits WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
