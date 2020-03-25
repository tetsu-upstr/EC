<?php

class CreateDb 
{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $tablename;
  public $con;

  public function __construct(
    $dbname = "EC",
    $tablename = "Product",
    $servername = "localhost",
    $username = "root",
    $password = ""
  )
  {
    $this->dbname = $dbname;
    $this->tablename = $tablename;
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;

    $this->con = mysqli_connect($servername, $username, $password);

    if(!$this->con) {
      die("接続エラー：" .mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($this->con, $sql)) {
      $this->con = mysqli_connect($servername, $username, $password, $dbname);

      $sql = "CREATE TABLE IF NOT EXISTS $tablename
              (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              product_name VARCHAR(25) NOT NULL,
              product_price INT(11),
              product_image VARCHAR(100)
              )";

      if(!mysqli_query($this->con, $sql)) {
        echo "テーブル作成エラー：" . mysqli_error($this->con);
      }
    }else {
      return false;
    }
    
  }
}