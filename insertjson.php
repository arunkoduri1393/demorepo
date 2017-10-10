  <?php
      $conn=new mysqli("localhost","root","","prac");
      $jsondata= file_get_contents('data.json');
      $data= json_decode($jsondata,true);
        for($i=1;$i<count($data);$i++)
        {

          $sql="insert into emp values('".$data[$i]['id']."','"./*example(*/$data[$i]['first_name']/*)*/."','".$data[$i]['last_name']."','".$data[$i]['email']."','".$data[$i]['reg_data']."')";
          $conn->query($sql);

        }

      /*function example($data)
      {
                return str_replace("'","",$data);
      }
        */
  ?>
