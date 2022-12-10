<?php
require_once 'database/init.php';
class Admin
{

    static public function login($email, $password)
    {

        try {
            $query = 'SELECT * FROM admin   WHERE Email = :email AND Psswd = :password';
            $stmt = InitDatabase::init()->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            $admin = $stmt->fetch();
            return $admin;
        } catch (PDOException $e) {
            return 'error' . $e->getMessage();
        }
    }
}
