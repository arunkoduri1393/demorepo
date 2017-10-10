<?php
class oops
{
protected $conn;
  function __construct()
  {
      $this->conn =new mysqli("localhost","root","","prac");
  }
}
class oops1 extends oops
{
  function __construct()
  {
    parent::__construct();
    if($this->conn->connect_error)
    {
      die("conection error:".connect_error);
    }
    else {
      echo "connected sucessfully";
    }

  }
}

$obj = new oops1();

?>
