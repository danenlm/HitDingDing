<?php
/*	  1.声明变量currentPage，表示当前页数
        如果客户端没有传递过来currentPage的话，那么默认为1。
*/
	@$currentPage=$_REQUEST["currentPage"];
	if($currentPage==null){
		$currentPage=1;
	}
/*    2.声明变量pageSize,表示每一页显示的条数
        如果客户端没有传递过来pageSize的值，那么默认为20条。
*/
	@$pageSize=$_REQUEST["pageSize"];
	if($pageSize==null){
		$pageSize=20;
	}
/*     3.根据pageSize和currentPage,来计算当前页显示的首条记录下标，将结果保存在$start中。
      首条记录下标=（当前页数-1）*pageSize
*/
	$start=($currentPage-1)*$pageSize;
	//echo "当前的页码：$currentPage,每页显示条数：$pageSize,首条记录下标：$start";
	require("init.php");
	$sql="SELECT * FROM xz_user LIMIT $start,$pageSize";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$str=json_encode($array);
	//echo $str;
	//查找总的数量
	$sql1="SELECT COUNT(*) FROM xz_user";
	$result1=mysqli_query($conn,$sql1);
	//var_dump($result1);
	$row=mysqli_fetch_row($result1);
	$total=$row[0];
	$totalPage=ceil($total/$pageSize);
	//echo $totalPage;
	$output=["totalPage"=>$totalPage,"data"=>$array];
	echo json_encode($output);
?>