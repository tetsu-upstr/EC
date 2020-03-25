<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <title>ECsite</title>
</head>

<body>
<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="./img/item1.png" alt="product1" class="img-fluid card-img-top">
          </div>
            <div class="card-body">
              <h5 class="card-title">Product1</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                とても速く走れるバイクです。
              </p>
              <h5>
                <small><s class="text-secondary">¥550,000</s></small>
                <span class="price">¥500,000</span>
              </h5>

              <button type="submit" class="btn btn-warning my-3" name="add">カートに入れる<i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
      </form>
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    
    </div>
  </div>
</div>
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>