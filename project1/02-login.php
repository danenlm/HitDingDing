<?php
$n=$_REQUEST["uname"];
if($n==""||$n==null){
	die("登录名称不能为空");
}
$p=$_REQUEST["upwd"];
if($p==""||$p==null){
	die("登录密码不能为空");
}
require("init.php");
$sql="SELECT * FROM xz_user WHERE uname='$n' AND binary upwd='$p'";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo "登录失败";
}else{
	$row=mysqli_fetch_assoc($result);
	if($row==null){
		echo "登录名或登录密码错误";
	}else{
		echo "登录成功";
	}
}
?>