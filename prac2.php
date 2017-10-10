<?php

$conn=new mysqli("localhost","root","","prac");
if($conn-> query("insert into dept values('4','vikram','juhe','vikram@gmail.com','832')")== true)
{
  echo "record added sucessfully";
}
else {
  echo "error : ".$conn->error;
}
?>
