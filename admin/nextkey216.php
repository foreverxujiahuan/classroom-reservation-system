<?php
   include("key216.php")
   ?>
<?php
   $conn=new mysqli("localhost","root","root","demo");
   $name=$_POST['name'];
   $sql="insert into yaoshi2(name)
   value('$name')";
   $res=$conn->query($sql);
   if($res === true){
    echo "登记成功";
}else{
    echo "登记失败";
}