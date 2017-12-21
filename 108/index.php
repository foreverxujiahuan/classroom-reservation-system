<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="index.css" rel="stylesheet" type="text/css"/>
    <script>
     window.onload = function()
     {	
		var oMiddle=document.getElementById('middle-middle-img');
		var oX=oMiddle.getElementsByTagName('a');
		for(var i=0;i<oX.length;i++)
			{
				oX[i].onclick=function()
                {
				this.style.backgroundImage="url(img/red.png)";
		       };
			}
     };
    
    </script>
</head>
<body>
  <div class="wash">
      <div class="head">
          <p><span>教室预约系统</span>
        </p>
      </div>
      <div class="daohang">
      <div class="daohang-one">
        <span class="span1"><a href="..\home\xunixiang.php">首页</a></span>
        <span class="span2"><a  href="#">108</a></span>
        <span class="span3"><a  href="..\216\yu.php">216</a></span>
      </div>
      </div>
      <div class="washimg"></div>
      <div class="main">
      <form action="date2.php" method="post" >
          <div class="top">
              <div class="first">
              <p><span class="spanone">可选</span>
              <span class="spantwo">已选</span></p>
            </div>
            </div>
         <hr/>
        <div class="middle">
             <div class="middle-left"><img src="img/chuang.png"></div>
             <div class="middle-middle">
                 <div id="middle-middle-img" style="font-size:11px;">
                  <ul>
                      <li class="left">
                      <br/>
                      <a href="javascript:;"  value="1" style="color:black;">&nbsp;&nbsp;1</a>
                      <a href="javascript:;"  value="2" style="color:black;">&nbsp;&nbsp;2</a>
                      <a href="javascript:;"  value="3" style="color:black;">&nbsp;&nbsp;3</a>
                      <a href="javascript:;"  value="4" style="color:black;">&nbsp;&nbsp;4</a>
                      <a href="javascript:;"  value="5" style="color:black;">&nbsp;&nbsp;5</a>
                      <a href="javascript:;"  value="6" style="color:black;">&nbsp;&nbsp;6</a>
                      <a href="javascript:;"  value="7" style="color:black;">&nbsp;&nbsp;7</a>
                      <a href="javascript:;" value="8" style='position: relative; left: 42px; bottom: 30px;color:black'>&nbsp;&nbsp;8</a>
                    </li> 
                  <li class="zhong">
                      <br/>
                      <a href="javascript:;" value="9" style="color:black;">&nbsp;&nbsp;9</a>
                      <a href="javascript:;"  value="10" style="color:black;">&nbsp;10</a>
                      <a href="javascript:;" value="11" style='position: relative;top:52px;color:black'>&nbsp;11</a>
                  </li>
                  <li class="zhong-two">
                        <br/>
                        <a href="javascript:;"  value="12" style="color:black;">&nbsp;12</a>
                        <a href="javascript:;" value="13" style="color:black;">&nbsp;13</a>
                    </li>
                  <li class="right">
                        <br/>
                        <a href="javascript:;" value="14" style="color:black;">&nbsp;14</a>
                        <a href="javascript:;" value="15" style="color:black;">&nbsp;15</a>
                        <a href="javascript:;" value="16" style="color:black;">&nbsp;16</a>
                        <a href="javascript:;" value="17" style="color:black;">&nbsp;17</a>
                        <a href="javascript:;" value="18" style="color:black;">&nbsp;18</a>
                        <a href="javascript:;" value="19" style="color:black;">&nbsp;19</a>
                        <a href="javascript:;" value="20" style="color:black;">&nbsp;20</a>
                        
                   </li>
                    </ul>
                 </div>
              </div>
              <div style="width:340px;height:30px;position:absolute;top:800px;left:600px;">
              <P style="width:170px;float:left">请输入你要选择的座位:</p><input type="text" name="seat" style="float:left;top:0px;position:relative;">
            </div>
             <div class="middle-right">
                 <div class="middle-right-one">
                     <p>预约时间</p>
                     <div class="middle-right-two">
                     <select class="year" name="year">
                         <option>2017</option>
                         <option>2018</option>
                     </select>年
                     <select class="month" name="month">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                         <option>6</option>
                         <option>7</option>
                         <option>8</option>
                         <option>9</option>
                         <option>10</option>
                         <option>11</option>
                         <option>12</option>
                        </select>月
                     <select class="day" name="day">
                            <option>1</option><option>2</option><option>3</option><option>4</option>
                            <option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
                            <option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option>
                            <option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
                            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>

                           </select>日
                        </div>                   
                 </div>
                 <div class="middle-right-three">
                     <p class="k"><br/></p>
                 <p class="p-one"><a>第一节</a></p>
                 <p class="p2"><a>第二节</a></p>
                 <p class="p3"><a>中午</a></p>
                 <p class="p4"><a>第三节</a></p>
                 <p class="p5"><a>第四节</a></p>
                 <p class="p6"><a>晚上</a></p>
                </div>
                </div>
        </div>
        <div class="bottom">
                <div class="bottom-left">
                    <p><span>注意事项<br/></span>
                        <p>1.借出钥匙随手登记</p>
                        <p>2.不能在室内吃零食</p>
                        <p>3.不经过本人同意不准乱拿东西...</p>
                    </p>
                </div>
                <div class="bottom-middle">
                    <div class="bottom-middleimg">
                            <input type="submit" style="position:absolute;top:1010px;
	  left:760px;cursor:pointer;width:100px;height:40px;background:blue" value="确定">
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="bottom-right-img"></div>
                 <div class="bottom-right-left">
                     <?php
$conn=mysqli_connect("localhost","root","root","demo");
    // mysqli_query("set names uft8");
     //mysqli_select_db($conn,"yaoshi");
	 $sql="select*from yaoshi";
	 $res=mysqli_query($conn,$sql);
	  ?>    
         <p>流<br/>动<br/>钥<br/>匙<br/>登<br/>记<br/>处</p>
	  <?php
     while($row=mysqli_fetch_assoc($res))
     {
      ?>
                  
                     <p style="position:absolute;top:895px;left:1145px;">
                         <?php 
		   if($row['id']==5){
		   echo $row['name'];
		   }
		   ?>
                     </p>
                     <p style="position:absolute;top:930px;left:1145px;">
                         <?php 
		   if($row['id']==6){
		   echo $row['name'];
		   }
		   ?>
                     </p>
                     <p style="position:absolute;top:965px;left:1145px;">
                         <?php 
		   if($row['id']==7){
		   echo $row['name'];
		   }
		   ?>
                     </p>
                     <p style="position:absolute;top:1000px;left:1145px;">
                         <?php 
		   if($row['id']==8){
		   echo $row['name'];
		   }
		   ?>
                     </p>
                     <p style="position:absolute;top:1040px;left:1145px;">
                         <?php 
		   if($row['id']==9){
		   echo $row['name'];
		   }
		   ?>
                     </p>
                      <?php
	 }
	 ?> 
                    </div>
                  <div class="bottom-right-men"> </div>                
                </div>
            </div>
            </form>
        </div>
      <div class="tail">
          <p class="onee">
              <a>大学生科技创业中心 | </a><a>教室预约系统 | </a><a>意见反馈 | </a><a>常见问题 | </a><a>关于我们 | </a><a>联系我们</a>
              </p>
          <p class="twoo">版权所有@2017.Classroom reservation system . 大学生科技创业中心
            </p>
            <p class="threee">
                郑ICP证123456号
            </p>
      </div>
    </div>
</body>
</html>