<?php
header("content-type:text/html;charset=utf-8");
  $conn=new mysqli("localhost","root","root","demo");
  if($conn){
      echo "数据库链接成功!";
      echo "</br>";
  }
  $del=$_GET["id"];
    $sql="delete from people1 where id=$del";
  $res=mysqli_query($conn,$sql);
  if($res){
     echo "删除成功";
    echo" <script> window.location.href=document.referrer </script>"; 
       
  }else{
      echo "删除失败";
     
  }
  mysqli_close($conn);
 
  ?>