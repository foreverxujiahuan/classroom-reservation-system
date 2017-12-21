<?php
   include("yu.php")
   ?>
<?php
   $conn=new mysqli("localhost","root","root","demo");
   $year=$_POST['year'];
   $month=$_POST['month'];
   $day=$_POST['day'];
   $seat=$_POST['seat'];
   $name=$_SESSION['username'];
   $sql="insert into date(year,month,day,seat,name)
   value('$year','$month','$day','$seat','$name')";
   $res=$conn->query($sql);
   if($res === true){
    echo "登记成功";
}else{
    echo "登记失败";
}