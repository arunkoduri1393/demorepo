<html>
<head>
</head>
<body>
    <form method="post" id="dept_form">
    Enter Id :<input type="text" name="id"><br><br>
    Enter Frist the Name :<input type="text" name="first_name"><br><br>
    Enter Last d Name :<input type="text"name="second_name"><br><br>
    Enter Email :<input type="text"name="email"><br><br>
    Enter RegData :<input type="text" name="reg_data"><br><br>
    <input type="button" id="btn1" value="ADD">
  </form>
  <p></p>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  $('#btn1').click(function(){
    $.ajax({
        url:'adddb1.php',
        method:'POST',
        data:$("#dept_form").serialize(),
        success:function(msg)
        {
            $('p').html(msg);
        }

    });
  });
</script>
</html>
