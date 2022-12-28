<?php
class Pages extends Controller
{
  public function __construct()
  {
     // if(isLoggedIn()){
    //   redirect('admins/dashboard');
    // }
    $this->productModel = $this->model('Product');
  }



  public function index()
  {
    // if(isLoggedIn()){
    //   redirect('admins/dashboard');
    // }

    $products = $this->productModel->getProducts();
    $data = ['products' => $products];

    $this->view('pages/index', $data);
  }

  public function gallery()
  {
    $products = $this->productModel->getProducts();
    $data = ['products' => $products];
    $this->view('pages/gallery', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us'
    ];

    $this->view('pages/contact', $data);
  }

  // public function dashboard()
  // {
  //   if (!isLoggedIn()) {
  //     redirect('admins/login');
  //   }
  //   $products = $this->productModel->getProducts();
  //   $data = ['products' => $products];

  //   $this->view('dashboard/index', $data);
  // }

 
}
