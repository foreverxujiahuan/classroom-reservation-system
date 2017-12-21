<html>
<head>

  <meta charset="UTF-8">
  
</head>
<style>
  body{
    background-image:url('img/2.jpg');
    background-size:100% 100%;
  }
  form{
    width:500px;
    height:300px;
    background-image:url('img/1.jpg');
    background-size:500px 300px;
    position:absolute;
    left:200px;
    top:200px;
    text-align: center; 
    
  }
</style>
<body>
<form action="register2.php" method="post">
  <div style="position:relative;top:80px;">
  用户名:<input type="text" name="cname">
  <br>
  密码:<input type="password" name="cpassword">
  <br>
  确认密码:<input type="password" name="rpassword">
  <br>
  <input type="submit" value="注册">
</div>
  </form>
</body>
</html>