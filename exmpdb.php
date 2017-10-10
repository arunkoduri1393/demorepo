<hmtl>
  <head></head>
  <body>
<?php
  if(ISSET($_REQUEST['action']))
  {
    if($_REQUEST['action']=="submit")
    {

      require_once("mysqlidb/MysqliDb.php");
      $obj= new MysqliDb('localhost','root','','prac');
      $obj->insert('dept',$_POST);
    //  print_r($_REQUEST['id']);
    }
  }
  else {
?>
    <form method="post" action="exmpdb.php?action=submit" >
      <!--<input type="text" name="id[]">
      <input type="text" name="id[]">
      <input type="text" name="id[]">
      <input type="text" name="id[]">-->
      <input type="text" name="first_name">
      <input type="text"name="second_name">
      <input type="text"name="email">
      <input type="text" name="reg_data">
      <input type="submit">
    </form>
    <?php
  }
     ?>
  </body>
</html>
