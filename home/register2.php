<meta charset="UTF-8">
  <?php
     $conn=new mysqli("localhost","root","root","demo");
     if($conn){
         echo "<br>链接数据库成功";
     }
     $username=$_POST['cname'];
     $password=$_POST['cpassword'];
     $sql="insert into testtable(username,password)
     value('$username','$password')";
     $res=$conn->query($sql);
     if($res === true){
         echo "注册成功";
     }else{
         echo "注册失败";
     }
  ?>