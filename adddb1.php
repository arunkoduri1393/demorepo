<?php
require_once('mysqlidb/MysqliDb.php');
$obj= new MysqliDb("localhost","root","","prac");
$id=$obj->insert('dept',$_POST);
if($id)
{
  echo "added success";
}
else {
  echo "error occured please check connections";
}
?>
