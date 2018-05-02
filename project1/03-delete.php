<?php
	$i=$_REQUEST["uid"];
	if($i==null||$i==""){
		die("用户ID不能为空");
	}
	require("init.php");
	$sql="DELETE FROM xz_user WHERE uid='$i'";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		echo "0";  //删除失败
	}else{
		echo "1";  //删除成功
	}
?>