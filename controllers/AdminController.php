<?php
// require_once 'models/Admin.php';
// session_start();
class AdminController
{

    public function logging()
    {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = Admin::login($email, $password);

            return $admin;
        }
    }

    public function logout()
    {
        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
        }
    }
}




function signin()
{
    if (isset($_POST['login'])) {

        $admin = new AdminController();
        $data = $admin->logging();

        if ($data) {
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $data['Email'];
            // header('Location:' . BASE_URL . 'home');
        }
    }
}

function signout()
{
    if (isset($_POST['logout'])) {
        $admin = new AdminController();
        $admin->logout();
        $_SESSION['logged'] = false;
        // header('Location:' . BASE_URL . 'login');
    }
}

signin();
signout();
