<html>
	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<style>
	  h1 {
	  	margin-left:35px;
	  }
	  .admin {
	  	margin-top: 300px ;
	  	margin-left: 600px;
	  	width: 250px;
	  	height: 100px;
	  }
	  .input0 {
	    height: 30px;
	  	width: 100px;
	  }
	  .input1 {
	  	margin-left: 35px;
	  	height: 30px;
	  	width: 100px;
	  }
	  .input2 {
	  	padding: 6px;
	  	margin-bottom: 15px;
	  }
	</style>
	</head>
	<body background="img/8.jpg" style="background-repeat: no-repeat;background-size: 100% 100%;background-attachment: fixed;">
		<div class="admin" >
			<form action="loginProcess.php" method="post">
				     <h1>管理员登陆</h1>
					<tr>
					    用户ID: <input class="input2" type="text" name="name">
					</tr>
					<tr>
						密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input2" type="password" name="password">
					</tr>
					<br>
					<td colspan="2">是否保存用户id<input type="checkbox" value="yes" name="keep"></td>
					<br>
					<tr>
						<input class="input0" type="submit" value="用户登陆">
						<input class="input1" type="reset" value="重新填写">
					</tr>	
			</form>
		</div>
	<body>
</html>