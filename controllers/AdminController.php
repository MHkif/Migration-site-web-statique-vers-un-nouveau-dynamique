<?php
// require_once '../models/Admin.php';
class AdminController
{

    public function logging()
    {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = Admin::login($email, $password);

            if ($admin) {
                $_SESSION['logged'] = $admin['Email'];
                header('Location: gallery.php');
            }
        }
    }

    public function logout()
    {
        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header('Location:' . BASE_URL . 'login');
        }
    }
}

$admin = new AdminController();
$admin->logging();
