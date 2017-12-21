<?php
 session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>创业中心学习空间预约系统</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script>
	window.onload=function(){
		var oHe=document.getElementById('head');
		var aLi=oHe.getElementsByTagName('a');
		
		var i;
		
		for(i=0;i<2;i++)
			{
				aLi[i].onmouseover=function(){
					this.className='active';
				};
				aLi[i].onmouseout=function(){
					this.className=' ';
				};
			}
		
		var oCon=document.getElementById('content');
		var oGeta=oCon.getElementsByTagName('a');
		
		for(i=0;i<oGeta.length;i++)
			{
				
				oGeta[i].onclick=function()
				{
				this.style.backgroundImage="url(img/red.png)";
		        };
			}
		
	};
	
	
	
	</script>
</head>

<body>
<div class="bg">
	<div id="head">
	<ul>
		<li ><a href="..\home\xunixiang.php" id="main" >首页</a></li>
		<li><a href="..\108\index.php" id="room1">108</a></li>
		<li><a href="#" id="room2" class="active">216</a></li>
	</ul>
</div>
</div>

<div class="chi">
</div>
<div id="content">
<form action="date.php" method="post" >
	<ul class="dec">
		<li>已选</li>
		<li>可选</li>
	</ul>
	<div class="time">
		<div class="pick">
			<dl>
				<dt>预约时间</dt>
				<select name="year">
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				</select><span>年</span>
				<select name="month">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select><span>月</span>
				<select name="day">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select><span>日</span>
				<dd><a href="javascript:;">第一节</a></dd>
				<dd><a href="javascript:;">第二节</a></dd>
				<dd><a href="javascript:;">中午</a></dd>
				<dd><a href="javascript:;">第三节</a></dd>
				<dd><a href="javascript:;">第四节</a></dd>
				<dd><a href="javascript:;">晚</a></dd>
			</dl>
		</div>
	</div>
	<div class="choose" style="font-size:11px;">
	<ul class="fir">
		<a href="javascript:;" value="1" style="color:black;">&nbsp;&nbsp;1</a>
		<a href="javascript:;" value="2" style="color:black;">&nbsp;&nbsp;2</a>
		<a href="javascript:;" value="3" style="color:black;">&nbsp;&nbsp;3</a>
		<a href="javascript:;" value="4" style="color:black;">&nbsp;&nbsp;4</a>
		<a href="javascript:;" value="5" style="color:black;">&nbsp;&nbsp;5</a>
		<a href="javascript:;" value="6" style="color:black;">&nbsp;&nbsp;6</a>
		<a href="javascript:;" value="7" style="color:black;">&nbsp;&nbsp;7</a>
	</ul>
	<ul class="sec">
		<a href="javascript:;" value="8" style="color:black;">&nbsp;&nbsp;&nbsp;8</a>
		<a href="javascript:;" style="position: relative; right: 40px; bottom: 30px;color:black;" value="9" style="color:black;">&nbsp;&nbsp;9</a>
		<a href="javascript:;" value="10" style="color:black;">&nbsp;10</a>
		<a href="javascript:;" value="11" style="color:black;">&nbsp;11</a>
		<a href="javascript:;" value="12" style="color:black;">&nbsp;12</a>
		<a href="javascript:;" style="margin-bottom: 55px; color:black;" value="13">&nbsp;13</a>
		<a href="javascript:;" value="14" style="color:black">&nbsp;14</a>
		<a href="javascript:;" style="position: relative;right: 24px;bottom: 44px;color:black;"value="15">&nbsp;15</a>
	</ul>
	<ul class="thi">
		<a href="javascript:;" value="16" style="color:black;">&nbsp;16</a>
		<a href="javascript:;" value="17" style="color:black;">&nbsp;17</a>
		<a href="javascript:;" value="18" style="color:black;">&nbsp;18</a>
		<a href="javascript:;" value="19" style="color:black;">&nbsp;19</a>
		<a href="javascript:;" value="20" style="color:black;">&nbsp;20</a>
		<a href="javascript:;" style="margin-bottom: 55px;color:black;" value="21">&nbsp;21</a>
		<a href="javascript:;" value="21" style="color:black;">&nbsp;&nbsp;21</a>
		<a href="javascript:;" style="position: relative;left: 24px;bottom: 44px;color:black;" value="21">&nbsp;22</a>
	</ul>
	<ul class="four">
		<a href="javascript:;" value="23" style="color:black;">&nbsp;23</a>
		<a href="javascript:;" style="margin-bottom: 48px;color:black;" value="24">&nbsp;24</a>
		<a href="javascript:;" value="25"style="color:black;">&nbsp;25</a>
		<a href="javascript:;" value="26"style="color:black;">&nbsp;26</a>
	</ul>
	<ul class="fiv">
		<a href="javascript:;" value="27"style="color:black;">&nbsp;27</a>
		<a href="javascript:;" style="margin-bottom: 48px;color:black;" value="28">&nbsp;28</a>
		<a href="javascript:;" value="29"style="color:black;">&nbsp;29</a>
		<a href="javascript:;" value="30"style="color:black;">&nbsp;30</a>
	</ul>
	<div style="position:relative;top:400px;
	  left:20px;">
	<P style="width:190px;float:left;font-size:18px;">请输入你要选择的座位:</p><input type="text" name="seat" style="float:left">
	</div>
	  <input type="submit" style="position:absolute;top:425px;
	  left:220px;cursor:pointer;width:80px;height:40px;background:green;" value="确定">
</form>
	</div>
	<div class="rule">
		<dl>
			<dt>注意事项</dt>
			<dd>1.借出钥匙随手登记</dd>
			<dd>2.不能在室内吃零食</dd>
			<dd>3.不经过本人同意不准<br/><br/>
  乱拿东西...</dd>
		</dl>
	</div>
	<div class="key" >
		<form action="key.php" method="post" >
			<table>
				
			 
			
	  <?php
$conn=mysqli_connect("localhost","root","root","demo");
    // mysqli_query("set names uft8");
     mysqli_select_db($conn,"yaoshi2");
	 $sql="select*from yaoshi2 ";
	 $res=mysqli_query($conn,$sql);
	  ?>    
	  <?php
     while($row=mysqli_fetch_assoc($res))
     {
      ?>
	       <p style="position:absolute;left:445px;top:910px;"><?php 
		   if($row['id']==6){
		   echo $row['name'];
		   }
		   ?></p>
	
		   <p style="position:absolute;left:445px;top:945px;"><?php 
		   if($row['id']==7){
		   echo $row['name'];
		   }
		   ?></p>
		   <p style="position:absolute;left:445px;top:975px;">
			   <?php 
		   if($row['id']==8){
		   echo $row['name'];
		   }
		   ?>
		   </p>
		   <p style="position:absolute;left:445px;top:1010px;">
			   <?php 
		   if($row['id']==9){
		   echo $row['name'];
		   }
		   ?>
		   </p>
		   <p style="position:absolute;left:445px;top:1040px;">
			   <?php 
		   if($row['id']==10){
		   echo $row['name'];
		   }
		   ?>
		   </p>
		   <?php
	 }
	 ?>
	       </table>
		 
		</form>
	</div>
</div>
<div class="foot">
	<p class="one">
		<a>大学生科技创业中心 | </a><a>教室预约系统 | </a><a>意见反馈 | </a><a>常见问题 | </a><a>关于我们 | </a><a>联系我们</a>
		</p>
	<p class="twoo">版权所有@2017.Classroom reservation system . 大学生科技创业中心
	  </p>
	  <p class="threee">
		  郑ICP证123456号
	  </p>
</div>
</body>
</html>
