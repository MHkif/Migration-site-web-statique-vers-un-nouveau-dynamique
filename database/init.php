<?php




// if (!isset($_SESSION['user_id'])) {
//     die('You ate not signed in .');
// }
// protected $host = "localhost";
// protected $user = "root";
// protected $password = "";
// protected $dbName = "todos";

class InitDatabase
{

    // $_SESSION['user_id'] = '1';


    static public function init()
    {
        $dsn = "mysql:host=localhost; dbname=bijoux";
        $db = new PDO($dsn, "root", '');
        // encodage
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
