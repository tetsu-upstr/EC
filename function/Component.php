<?php

function component($productName, $productPrice, $productImg, $productid) {
  $element = "
      <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"index.php\" method=\"POST\">
          <div class=\"card shadow\">
            <div>
              <img src=\"./$productImg\" alt=\"image\" class=\"img-fluid card-img-top\">
            </div>
              <div class=\"card-body\">
                <h5 class=\"card-title\">$productName</h5>
                <h6>
                  <i class=\"fas fa-star\"></i>
                  <i class=\"fas fa-star\"></i>
                  <i class=\"fas fa-star\"></i>
                  <i class=\"fas fa-star\"></i>
                  <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                  とても速く走れるバイクです。
                </p>
                <h5>
                  <small><s class=\"text-secondary\">¥550,000</s></small>
                  <span class=\"price\">¥$productPrice</span>
                </h5>
                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">カートに入れる<i class=\"fas fa-shopping-cart\"></i></button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\" >
              </div>
          </div>
        </form>
      </div>
    ";

  echo $element;
}

function cartElement($productImg, $productName, $productPrice, $productid) {
  $element = "

  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
  <div class=\"border rounded\">
      <div class=\"row bg-white\">
          <div class=\"col-md-3 pl-0\">
              <img src=$productImg alt=\"Image1\" class=\"img-fluid\">
          </div>
          <div class=\"col-md-6\">
              <h5 class=\"pt-2\">$productName</h5>
              <small class=\"text-secondary\">カート詳細</small>
              <h5 class=\"pt-2\">¥$productPrice</h5>
              <button type=\"submit\" class=\"btn btn-warning\" name=\"save\">お気に入り登録</button>
              <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">削除</button>
          </div>
          <div class=\"col-md-3 py-5\">
              <div>
                  <button type=\"button\" class=\"btn bg-light border rounded-circle \" name=\"minus\"><i class=\"fas fa-minus\"></i></button>
                  <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline \">
                  <button type=\"button\" class=\"btn bg-light border rounded-circle \" name=\"plus\"><i class=\"fas fa-plus\"></i></button>
              </div>
          </div>
      </div>
  </div>
</form>

  
  ";
  echo  $element;
}