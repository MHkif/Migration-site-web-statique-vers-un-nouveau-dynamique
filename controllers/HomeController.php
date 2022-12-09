<?php
require_once 'AdminController.php';
class HomeController
{

    public function index($url)
    {
        include('views/' . $url . '.php');
    }
}
