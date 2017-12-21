<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>admin</title>
    <style>
    div {
      margin-top: 60px ;
      margin-left: 300px;
      width: 750px;
    }
    td {
      text-align:center;
    }
    p {
      text-align: center;
    }
      h1 {
    letter-spacing: 8px;
    text-align:center;
  }
  .form1{
        text-align:center;
  }
  a {
    text-decoration:none;
  }
    </style>
  
</head>
<body background="img/4.jpg" style="background-repeat: no-repeat;background-size: 100% 100%;background-attachment: fixed;">
  <div>
  <?php
     $conn=mysqli_connect("localhost","root","root","demo");
    // mysqli_query("set names uft8");
     mysqli_select_db($conn,"date2");
     $pageSize=10;
     $rowCount=0;//这个变量要从数据库emp获取
     $pageNow=1;//显示第几页，这个一个变量（用户指定）
       
     if(!empty($_GET['pageNow'])){
         $pageNow=$_GET['pageNow'];
     }
     $pageCount=0;//这个表示共有多少页，也是计算出来的
     $sql="select count(id) from date2";
     $res1=mysqli_query($conn,$sql);
     if($row=mysqli_fetch_row($res1)){
            $rowCount=$row[0];
     }
     //计算共有多少页
     $pageCount=ceil($rowCount/$pageSize);
     
     $sql="select * from date2 limit ".($pageNow-1)*$pageSize.",$pageSize";
     $res=mysqli_query($conn,$sql);
     ?>
     <script type="text/javascript">
    function confirmDel(id)
    {
    if(window.confirm("你确认要删除吗？"))
    {
    //跳转到delete.php文件
    location.href = "delete216.php?id="+id;
    }
         header('location :216.php');
    }
    function confirmEdit(id)
    { 
    location.href="nextedit.php?id="+id;

         header('location :216.php');
   }
    </script>
    <table width='700px' border='1' bordercolor='green' cellspacing='0px' padding='5px' >
 <h1>108新注册用户信息</h1>
        <tr>
             <td>id</td>         
             <td>name</td>
             <td>year</td>
             <td>month</td>
             <td>day</td>
             <td>seat</td>
           </tr>
         <?php
     while($row=mysqli_fetch_row($res))
     {
      ?>

              <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[5]?></td>
                <td><?php echo $row[2]?></td>
             </tr>

     <?php
     } 

     ?>  </table>

   <?php
    
     echo "</table>";
     //打印出页码的超链接
    /* for($i=1;$i<=$pageCount;$i++){
         echo "<a href='empList.php?pageNow=$i'>$i</a>&nbsp;";
     }*/
     if($pageNow>1){
         $prePage=$pageNow-1;
         echo "<a href='216.php?pageNow=$prePage'>上一页</a>&nbsp;";
     }
     if($pageNow<$pageCount){
         $nextPage=$pageNow+1;
         echo "<a href='216.php?pageNow=$nextPage'>下一页</a>&nbsp;";
     }
     //echo "<a href='#'><<</a>&nbsp;";
      //echo "<a href='#'>>></a>&nbsp;";
     echo "<p>当前页{$pageNow}/共{$pageCount}页</p>";
     //指定跳转到某页
     echo "<br/><br/>";
     ?>
     <form action="216.php" class="form1" >
       跳转到:<input type="text" name="pageNow"/>
       <input type="submit" value="GO">
       
     </form>
      <div style="">
         
      </div>
       <?php
       mysqli_free_result($res);
       mysqli_close($conn);
       ?>
  </div>
</body>
</html>