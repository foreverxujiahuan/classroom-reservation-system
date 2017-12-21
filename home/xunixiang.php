<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录页面</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
      <div class="head">
       <p><span>教室预约系统</span></p>
      </div>
      <div class="head-2">
      <span class="span1" style="margin-left:0px"><a href="#">首页</a></span> 
      </div>
      <div class="middle">
        <div class="middle-1">
          <div class="middle-L">
            <ul>
              <a href="#"><li class="li1"></li></a>
              <a href="#"><li class="li2"></li></a>
              <a href="#"><li class="li3"></li></a>
            </ul>
            <p>资料</p>
          </div>
          <div class="middle-C">
            <ul>
              <li class="li4"><a href="#"><p>音乐</p></a></li>
              <li class="li5"><a href="#"><p>照片</p></a></li>
            </ul>
            
          </div>
          <form action="post.php" method="post" >
          <div class="middle-R">
            <p >大学生科技创业中心</p>
            <div class="middle-rc">
              <div class="middle-R1">
                <span class="sp1"></span>
                <span class="sp2"></span>
               
              </div>
              <div class="middle-R2">
                <input type="text" name="username">
                <input type="password" name="password">
              </div>
              </div>
         
            <input type="submit"  value="登陆" class="denglu" style="position:absolute;top:0px;left:0px;cursor:pointer">
            <ul style="position:relative;top:15px;">
              <li><a href="register.php">注册</a></li>
              <li><a href="#">忘记密码？</a></li>
            </ul>
            
          </div>
        </form>
        </div>     
        <div class="middle-2">
          <img src="img/phone.gif">
          <div class="middle2-c">
          </div>
          <div class="middle2-b">
          </div>
        </div>
      </div>
      <div class="bottom">
        <p class="onee">
          <a>大学生科技创业中心 | </a><a>教室预约系统 | </a><a>意见反馈 | </a><a>常见问题 | </a><a>关于我们 | </a><a href="../admin/login.php" style="color:white">admin登陆</a>
          </p>
      <p class="twoo">版权所有@2017.Classroom reservation system . 大学生科技创业中心
        </p>
        <p class="threee">
            郑ICP证123456号
        </p>
      </div>
</body>
</html>
