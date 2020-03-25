<?php

class CreateDb 
{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $tablename;
  public $con;

  // コンストラクタ（初回に起動）
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

    // データベース生成
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($this->con, $sql)) {
      $this->con = mysqli_connect($servername, $username, $password, $dbname);

      // テーブル生成
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

  // テーブル情報の取得メソッド
  public function getProduct() {
    $sql = "SELECT * FROM $this->tablename";
    $result = mysqli_query($this->con, $sql);

    if(mysqli_num_rows($result) > 0) {
      return $result;
    }
  }
}