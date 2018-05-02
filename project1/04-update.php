<?php
$i=$_REQUEST["uid"];
$n=$_REQUEST["uname"];
$p=$_REQUEST["upwd"];
$e=$_REQUEST["email"];
$ph=$_REQUEST["phone"];
$un=$_REQUEST["user_name"];
$g=$_REQUEST["gender"];
require("init.php");
$sql="UPDATE xz_user SET uname='$n',upwd='$p',email='$e',phone='$ph',user_name='$un',gender='$g' WHERE uid='$i'";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo "<script>alert('修改失败')</script>";    //修改失败
}else{
	echo "<script>alert('修改成功');location.href='list-page.html';</script>";    //修改成功
}
?>