<?php
 session_start();
 ?>
<?php
  $con=new mysqli("localhost","root","root","demo");
  if($con){
      echo "链接数据库成功";
  }
   $username=$_POST['username'];
  $password=$_POST['password'];
 $sql = "select * from testtable";
$result = $con->query($sql);
$users = array();
while($r = $result->fetch_row()){
	$user['id'] = $r[0];
	$user['username'] = $r[1];
	$user['password'] = $r[2];
	array_push($users,$user);
}

$con->close();


$isFindUser = false;
$theUsersKey = null;
foreach ($users as $key => $user) {
	if ($user['username']==$username) {
		$isFindUser = true;
		$theUsersKey = $key;
		break;
	}
}
if ($isFindUser) {
	if ($users[$theUsersKey]['password']==$password) {
		$_SESSION['username'] = $users[$theUsersKey]['username'];
		session_start();
	header('location:second.html');
	}
	else{
		echo "<br>密码错误!";
		
	}
}else{
	echo "没有此用户,请确认你的用户名!";
}

  ?>