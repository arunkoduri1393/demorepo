<?php
if(ISSET($_REQUEST['action']))
{
  if($_REQUEST['action']=="upld")
  {
      $sourcePath=$_FILES['fileupld']['tmp_name'];
      $destination="images/".time().$_FILES['fileupld']['name'];
      if(move_uploaded_file($sourcePath,$destination))
      {
        echo "sucessfully uploaded";
      }
      else {
            echo "error occured";
      }
  }
}
else {
?>
<html>
  <head>
  </head>
  <body>
    <form id="formupld" action="prac.php?action=upld" method="post" enctype="multipart/form-data">
      <input type="file" name="fileupld">
      <input type="submit">
    </form>
  </body>
</html>
<?php
}
?>
