<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/homeController.php';
// require_once './controllers/AdminController.php';
// instantiate an object 

$home = new HomeController();


$pages = ['home', 'add', 'update', 'delete', 'login', 'gallery', 'about', 'contact'];

if (isset($_GET['url'])) {
    if (in_array($_GET['url'], $pages)) {
        $page = $_GET['url'];
        $home->index($page);
    } else {
        include('./views/includes/notfound.php');
    }
} else {
    $home->index('home');
}
?>

<?php
require_once './views/includes/footer.php';
?>



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Zen+Dots&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>