<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('admins/login');
        }
        $this->prodModel = $this->model('Product');
    }



    public function index()
    {


        $products = $this->prodModel->getProducts();
        $data = ['products' => $products];


        $this->view('dashboard/index', $data);
    }




    public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $data = [
        // 'id' => $id,
        'titre' => trim($_POST['titre']),
        'prix' => trim($_POST['prix']),
        'image' => $_FILES['image']['name'],
        'qnt' => trim($_POST['qnt']),
        'titre_err' => '',
        'prix_err' => '',
        'qnt_err' => '',
        'image_err' => ''
      ];

      // move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/'.$data["image"]);



      if (empty($data['titre'])) {
        $data['titre_err'] = 'Please enter title';
      }
      if (empty($data['prix'])) {
        $data['prix_err'] = 'Please enter product price';
      }
      if (empty($data['image'])) {
        $data['image_err'] = 'Please enter product image';
      }

      if (empty($data['qnt'])) {
        $data['qnt_err'] = 'Please enter product quantity';
      }

      if (empty($data['titre_err']) && empty($data['prix_err']) && empty($data['qnt_err']) && empty($data['image_err'])) {
        // die('Success');
        if ($this->prodModel->add($data)) {
          // flash('post_message', 'Product Updated');
          move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/'.$data["image"]);
          redirect('dashboard');
        } else {
          die('Something went wrong');
        }
      } else {
        // die('Not Success');
        $this->view('dashboard/add', $data);
      }
    } else {

      $data = [
        // 'id' => $id,
        'titre' => '',
        'prix' => '',
        'image' => '',
        'qnt' => '',

      ];
    //   die('Not Success');
      $this->view('dashboard/add', $data);
    }
  }



  public function update($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'id' => $id,
        'titre' => trim($_POST['titre']),
        'prix' => trim($_POST['prix']),
        'image' => trim($_FILES['image']['name']),
        'qnt' => trim($_POST['qnt']),
        'titre_err' => '',
        'prix_err' => '',
        'qnt_err' => '',
        'image_err' => ''
      ];


      if (empty($data['titre'])) {
        $data['titre_err'] = 'Please Enter a Title';
      }
      if (empty($data['prix'])) {
        $data['prix_err'] = 'Please Enter a Product price';
      }
      if (empty($data['image'])) {
        $data['image_err'] = 'Please Enter a Product image';
      }

      if (empty($data['qnt'])) {
        $data['qnt_err'] = 'Please Enter a Product quantity';
      }

      // Make sure no errors
      if (empty($data['titre_err']) && empty($data['prix_err']) && empty($data['qnt_err']) && empty($data['image_err'])) {

        if ($this->prodModel->update($data)) {
          // flash('post_message', 'Product Updated');
          move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/'.$data["image"]);
          redirect('dashboard');
        } else {
          die('Something went wrong');
        }
      } else {

        $this->view('dashboard/update', $data);
      }
    } else {
      // Get existing post from model
      $product = $this->prodModel->getProductById($id);



      $data = [
        'id' => $id,
        'titre' => $product->titre,
        'prix' => $product->prix,
        'image' => $product->image,
        'qnt' => $product->qnt,
        'product' => $product,
      ];


      $this->view('dashboard/update', $data);
    }

    // End Else


  }



  public function delete($id)
  {

    if ($this->prodModel->delete($id)) {
      flash('post_message', 'Product Removed');
      redirect('dashboard');
    } else {
      die('Something went wrong');
    }
  }
}
