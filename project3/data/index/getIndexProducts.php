<?php
require_once("../init.php");
$products=[];
$sql="SELECT * FROM xz_index_product WHERE seq_recommended!=0 order by seq_recommended";
$result=mysqli_query($conn,$sql);
$products["recommended"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM xz_index_product WHERE seq_new_arrival!=0 order by seq_new_arrival";
$result=mysqli_query($conn,$sql);
$products["new_arrival"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM xz_index_product WHERE seq_top_sale!=0 order by seq_top_sale";
$result=mysqli_query($conn,$sql);
$products["top_sale"]=mysqli_fetch_all($result,1);
echo json_encode($products);
?>
