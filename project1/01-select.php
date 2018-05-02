<?php
$u=$_REQUEST["uname"];
if($u==null||$u==""){
	die("用户名称不能为空！");
}
require("init.php");
$sql="SELECT * FROM xz_user WHERE uname='$u'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row===null){
	echo "0";	//"用户名可以使用"
}else{
	echo "1";  //"用户名已存在"
}
?>