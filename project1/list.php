<?php
require("init.php");
$sql="SELECT * FROM xz_user";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
$str=json_encode($res);
echo $str;
?>