<?php
require_once('mysqlidb/MysqliDb.php');
$obj=new MysqliDb('localhost','root','','prac');
$path_to_file = "xmdata.xml";
$id=$obj->loadXML("emp", $path_to_file);
if($id)
{
  echo "added Sucessfully";
}
else
{
  echo "error occured";
}
?>
