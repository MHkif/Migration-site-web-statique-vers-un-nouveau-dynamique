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
            // header('Location:' . BASE_URL . 'login');
    
        }
    }
}




function signin()
{
    // ob_start();

    if (isset($_POST['login'])) {

        $admin = new AdminController();
        $data = $admin->logging();

        if ($data) {
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $data['Email'];
            $_SESSION['username'] = $data['Username'];
            $_SESSION['user_id'] = $data['ID'];

            // header('Location:' . BASE_URL . 'home');
        }
    }
    // ob_end_flush();
}

function signout()
{
    // ob_start();

    if (isset($_POST['logout'])) {
        $admin = new AdminController();
        $admin->logout();
        $_SESSION['logged'] = false;
        // header('Location:' . BASE_URL . 'login');
    }
    // ob_end_flush();
}

signin();
signout();
