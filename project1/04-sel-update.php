<?php
$i=$_REQUEST["uid"];
require("init.php");
$sql="SELECT * FROM xz_user WHERE uid=$i";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($result);
//var_dump($res);
//echo "<br>";
//$res1=mysqli_fetch_all($result,MYSQLI_ASSOC);
//$str=json_encode($res1);
//var_dump($res1);
//echo "<br>";
//echo $str;
?>
<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>修改</title>
 </head>
 <body>
  <form action="04-update.php" method="post">
	<p>登录名称：<input type="text" name="uname" value="<?php echo $res['uname']?>"></p>
	<p>登录密码：<input type="password" name="upwd" value="<?php echo $res['upwd']?>"></p>
	<p>电子邮箱：<input type="email" name="email" value="<?php echo $res['email']?>"></p>
	<p>联系方式：<input type="text" name="phone" value="<?php echo $res['phone']?>"></p>
	<p>用户姓名：<input type="text" name="user_name" value="<?php echo $res['user_name']?>"></p>
	<p>用户姓别：<select name="gender" id="">
				<option value="1"
					<?php
						if($res["gender"]=="1"){
							echo "selected";
						}
					?>
				>男</option>
				<option value="0"
					<?php
						if($res["gender"]=="0"){
							echo "selected";
						}
					?>
				>女</option>
				<option value="2"
					<?php
						if($res["gender"]==null){
							echo "selected";
						}
					?>
				>保密</option>
	</select></p>
	<p><input type="hidden" value="<?php echo $res['uid']?>" name="uid"></p>
	<p><input type="submit" value="修改"></p>
  </form>
 </body>
</html>