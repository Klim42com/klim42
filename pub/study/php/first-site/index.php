<?php

include "config.php";
include "../../../../inc/lib.inc.php";
ob_start();

if (!empty($_GET['add2basket'])){
    $add2basket = $_GET['add2basket'];
    if (array_key_exists($add2basket, $_SESSION['basket'])){
        $_SESSION['basket'][$add2basket]++;
    } else{
    $_SESSION['basket'][$add2basket] = 1;
}
}
if (!empty($_GET['delete'])){
    $delete = $_GET['delete'];
    if (array_key_exists($delete, $_SESSION['basket'])){
        unset($_SESSION['basket'][$delete]);
    }
    header('Location: ?page=basket');
    die();
}


//$firstName = trim(strip_tags('Andrew'));
//$lastName = trim(strip_tags('Kotenko'));
//$email = trim(strip_tags('admin@klim42.com'));
//$address = trim(strip_tags('Saratov'));
//
//saveOrder ($firstName, $lastName, $email, $address);

$successOrder = "$lastName" . " " . "$firstName your order has been successfully created!";
//echo $successOrder;

$categories = ['Fiction', 'Comedy', 'Thriller', 'Novel', 'Programming'];
$publisher = ['Springer', 'Blackwell Science', 'Chapman & Hall', 'McGraw-Hill, Inc.'];

    $book = [
        'idbook' => '0001',
        'title' => 'PHP8 part 1',
        'author' => 'Tarasov',
        'price' => 1100,
        'description' => 'PHP start'
    ];
//    echo $book['author'];

$menu = [
        'index' => 'Catalog',
        'delivery' => 'Delivery',
        'contacts' => 'Contacts',
        'login' => 'Sign in',
        'basket' => 'Basket',
        'dropdown' => 'Dropdown'
];
$books = [];
$sql = 'SELECT * FROM book';
$result = mysqli_query($db, $sql);
if (!(mysqli_errno($db))){
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
//    echo "<pre>";
//    print_r($books);
//    echo "</pre>";
}

//$books [] = $book;
//$books [] = [
//    'idbook' => '0002',
//    'title' => 'PHP8 part 1.2',
//    'author' => 'Tarasov A.V.',
//    'price' => 2100,
//    'description' => 'PHP fast start'
//];
//$books [] = [
//    'idbook' => '0003',
//    'title' => 'PHP8 part 1.3',
//    'author' => 'Tarasov A.V.',
//    'price' => 1500,
//    'description' => 'PHP fast start'
//];
//$books [] = [
//    'idbook' => '0004',
//    'title' => 'PHP8 part 1.4',
//    'author' => 'Tarasov A.V.',
//    'price' => 2000,
//    'description' => 'PHP fast start'
//];
//$books [] = [
//    'idbook' => '0005',
//    'title' => 'PHP8 part 1.5',
//    'author' => 'Tarasov A.V.',
//    'price' => 1300,
//    'description' => 'PHP fast start'
//];
//$books [] = [
//    'idbook' => '0006',
//    'title' => 'PHP8 part 1.6',
//    'author' => 'Tarasov A.V.',
//    'price' => 1200,
//    'description' => 'PHP fast start'
//];
//foreach ($menu as $key => $value){
//    echo "$key - $value, <hr/>";
//}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
    .card-deck{
      margin-top: 20px      
    }

    .card-body img{
      display: block;
      margin: 0 auto 15px;

    }
    .card-footer{
      background: transparent;
      border: 0;
    }
    </style>
  </head>
  <body>
  <header>
      <p><a href="../../">study</a></p>
      <p><a href="../../../">Home</a></p>
  </header>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
  <a class="navbar-brand" href="?page=index">Интернет-магазин Книжка</a>    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
    </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?= renderMenu("../../../../template/menu", $menu)?>
  </div>
  </div>
</nav>

<div class="container">
    <?php
    $namePage = '';
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];

    switch ($page){
        case '':
        case 'index': $namePage = 'Catalogue of goods';     break;
        case 'basket': $namePage = 'Basket';                break;
        case 'contacts': $namePage = 'Contacts';            break;
        case 'delivery': $namePage = 'Delivery';            break;
        case 'login': $namePage = 'Sign in';                break;
    }
    if (file_exists("../../../../inc/$page.php")){
        include "../../../../inc/$page.php";
    } else{
        include "../../../../inc/index.php";
    }
    }
    if (!empty($_GET['add2basket'])){
        include "../../../../inc/index.php";
    }
    if (empty($_GET['page']) && empty($_GET['add2basket'])){
        include "../../../../inc/index.php";
    }

    ?>

  
</div>

<div class="container">
     

  </div><!-- /.container -->

  <?php
//  include "inc/footer.inc.php"
  include "../../../../inc/footer.inc.php"
  ?>

  <?php
  include "../../../../inc/scripts.inc.php"
  ?>



  </body>
</html>