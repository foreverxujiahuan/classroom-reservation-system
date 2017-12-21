<html>
<?php
require_once 'function.php';?>  
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<style>
	div {
	margin-top: 200px ;
	margin-left: 650px;
	width: 230px;
	text-align: center;   
	}

	h1 {
	letter-spacing: 8px;
	}
	.input0 {
	height: 30px;
	width: 155px;
		padding: 6px;
	margin-bottom: 10px;
	}
	.input1 {
	margin-left: 5px;
	height: 30px;
	width: 90px;
	}
	.input2 {
	height: 30px;
	width: 90px;
	margin-left: 25px;
	}
</style>
<?php  

    if(!empty($_GET['id'])){  
        //连接mysql数据库  
        //查找id  
           $conn=new mysqli("localhost","root","root","demo");
        $id=$_GET['id'];  
        $result=mysqli_query($conn,"SELECT * FROM people1 WHERE id=$id");
        /*if(mysqli_error()){  
            die('can not connect db');  
        }  */
        //获取结果数组  
        $result_arr=mysqli_fetch_row($result);  
    }else{  
        die('id not define');  
    }  
?> 
</head>
	<body background="img/9.jpg" style="background-repeat: no-repeat;background-size: 100% 100%;background-attachment: fixed;">
		<form action="edit108.php?id=<?php echo $result_arr[0]?>" method="post">
			<div>
			<h1>编辑用户</h1>
			<tr>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名: <input class="input0"  type="text" name="name" value="<?php echo $result_arr[1]?>"></tr>
			<tr>座位:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input0" type="text" name="seat" value="<?php echo $result_arr[2]?>"></tr>
			<tr>
			<input class="input1" type="submit" value="编辑用户" >
		    <input class="input2" type="reset" value="重新填写">
			</tr>
			</div>
		</form>
	</body>
</html>