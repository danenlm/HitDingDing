<?php
$u=$_REQUEST["uname"];
if($u==null||$u==""){
	die("用户名称不能为空！");
}
$p=$_REQUEST["upwd"];
if($p==null||$p==""){
	die("用户密码不能为空！");
}
$cp=$_REQUEST["cpwd"];
if($cp==null||$cp==""){
	die("重复密码不能为空！");
}
$e=$_REQUEST["email"];
if($e==null||$e==""){
	die("用户邮箱不能为空！");
}
$ph=$_REQUEST["phone"];
if($ph==null||$ph==""){
	die("用户手机不能为空！");
}
$un=$_REQUEST["user_name"];
if($un==null||$un==""){
	die("真实姓名不能为空！");
}
$g=$_REQUEST["gender"];
if($g==null||$g==""){
	die("用户性别不能为空！");
}
require("init.php");
$sql="INSERT INTO xz_user VALUES(NULL,'$u','$p','$e','$ph',NULL,'$un','$g')";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo "注册失败";
}else{
	echo "注册成功";
}
?>