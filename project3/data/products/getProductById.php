<?php
//header("Content-Type:application/json");
require_once("../init.php");
$output=[];
@$lid=$_REQUEST["lid"];
if($lid!=null){
	$sql="SELECT * FROM xz_laptop WHERE lid=$lid";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_all($result,1)[0];
	$output["details"]=$row;
	$sql="SELECT * FROM xz_laptop_pic WHERE laptop_id=$lid";
	$result=mysqli_query($conn,$sql);
	$output["imgs"]=mysqli_fetch_all($result,1);
	$fid=$row["family_id"];
	$sql="SELECT lid,spec FROM xz_laptop WHERE family_id=$fid";
	$result=mysqli_query($conn,$sql);
	$output["specs"]=mysqli_fetch_all($result,1);
	echo json_encode($output);
}
?>