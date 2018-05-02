<?php
	$uname="TOM";
	$gender=2;
	$user_name="汤姆";
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
	<h1>修改：<?php echo $uname?>的信息</h1>
	<p>
		登录名称：<input type="text" name="uname" value="<?php echo $uname?>">
	</p>
	<p>
		真实姓名：<input type="text" name="user_name" value="<?php echo $user_name?>">
	</p>
	<p>
		用户性别：<select name="gender" id="">
				<option value="1"
					<?php
						if($gender=="1"){
							echo "selected";
						}
					?>
				>男</option>
				<option value="0"
					<?php
						if($gender=="0"){
							echo "selected";
						}
					?>
				>女</option>
				<option value="2"
					<?php
						if($gender=="2"){
							echo "selected";
						}
					?>
				>保密</option>
		</select>
	</p>
 </body>
</html>
