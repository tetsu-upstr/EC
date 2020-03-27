<?php 
session_start();

require_once("function/CreateDb.php"); 
require_once("function/Component.php"); 

$database = new CreateDb("EC", "Product");

// 削除ボタンを押すとカートから削除する
if(isset($_POST['remove'])) {
  if($_GET['action'] == 'remove') {
    foreach($_SESSION['cart'] as $key => $value) {
      if($value['product_id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo "<script>window.location='cart.php';</script>";
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php require_once("function/header.php"); ?>
  
  <div class="container-fluid">
    <div class="row px-5">
      <div class="col-md-7"></div>
      <div class="shopping-cart">
        <h6>ショッピングカート</h6>
        <hr>

        <?php


        $total_price = 0;

        if(isset($_SESSION['cart'])) {
          
          $product_id = array_column($_SESSION['cart'], 'product_id');
          
          $result = $database->getProduct();
         
          while($row = mysqli_fetch_assoc($result)) {
            foreach($product_id as $id) {
              
              if($row['id'] == $id) {
                cartElement($row['product_image'], $row['product_name'], number_format($row['product_price']), $row['id']);
                $total_price = $total_price + (int)$row['product_price'];
              }
            }
          }

        } else {
          echo "<h5>カートは空です。</h5>";
        }

        ?>

      </div>

      <div class="col-md-5">
        <div class="pt-4">
          <h6>カートの詳細</h6>
          <hr>
          <div class="row price-details">
            <div class="col-md-6">
              <?php

              if(isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                echo "<h6>Price($count 点)</h6>";
              } else {
                echo "<h6>Price(0 点)</h6>";
              }

              ?>
              <h6>配送料</h6>
              <hr>
              <h6>お支払金額</h6>
            </div>
            <div class="col-md-6">
              <h6>¥<?php echo number_format($total_price); ?></h6>
              <h6 class="text-success">FREE</h6>
              <hr>
              <h6>¥<?php echo number_format($total_price) ?></h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>