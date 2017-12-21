<?php
header("content-type:text/html;charset=utf-8");
	 $conn=new mysqli("localhost","root","root","demo");
	 {
	     echo "链接数据库成功<br>";
	 }
	 $name=$_POST['name'];
     $seat=$_POST['seat'];
	 $sql="insert into people1(name,seat)
	 value('$name','$seat')";
	 $res=$conn->query($sql);
	 if($res){
	     echo "添加用户成功";
	  echo "<script>window.location='108people.php';</script>";

echo "<script language=JavaScript>parent.mainFrame.location.reload();</script>";
	 }else{
	     echo "添加用户失败";
	 }
 ?>