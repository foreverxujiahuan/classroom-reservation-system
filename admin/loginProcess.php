<?php
  $con=new mysqli("localhost","root","root","demo");
  if($con){
      echo "链接数据库成功";
  }
   $username=$_POST['name'];
  $password=$_POST['password'];
 $sql = "select * from admin";
$result = $con->query($sql);
$users = array();
while($r = $result->fetch_row()){
	$user['id'] = $r[0];
	$user['name'] = $r[1];
	$user['password'] = $r[2];
	array_push($users,$user);
}

$con->close();


$isFindUser = false;
$theUsersKey = null;
foreach ($users as $key => $user) {
	if ($user['name']==$username) {
		$isFindUser = true;
		$theUsersKey = $key;
		break;
	}
}
if ($isFindUser) {
	if ($users[$theUsersKey]['password']==$password) {
		$_SESSION['name'] = $users[$theUsersKey]['name'];
		$q="108.php";
		$p="216.php";
		echo "<br>登陆成功!";
		header('location:adminlogin.html');
		
		
	}
	else{
		echo "<br>密码错误!";
		
	}
}else{
	echo "没有此用户,请确认你的用户名!";
}

  ?>