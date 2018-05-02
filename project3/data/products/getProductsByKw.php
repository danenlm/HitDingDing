<?php
//header("Content-Type:application/json");
require_once("../init.php");
@$callback=$_REQUEST["callback"];
@$kw=$_REQUEST["kw"];
@$pno=$_REQUEST["pno"];
if($pno==null){
	$pno=0;
};
$output=[
	"count"=>0,     //查询结果商品数量
	"pageSize"=>9,  //每页商品数量
	"pageCount"=>0, //总页数"count"/"pageSize" 上取整
	"pageNo"=>$pno,    //当前页码,从0开始
	"plist"=>[]
];
if($kw!=null){
	$sql="SELECT lid, title, price,(select md from xz_laptop_pic where laptop_id=lid limit 1) as md FROM `xz_laptop` ";
	$kws=explode(" ",$kw);     //以空格分割$kw  explode这个API在PHP中类似于split在js中
	for($i=0;$i<count($kws);$i++){
		$kws[$i]=" title like '%".$kws[$i]."%' ";
	}
	$sql.=" where ".implode(" and ",$kws);  //以and 拼接$kws implode这个API在PHP中类似于join在js中
	$result=mysqli_query($conn,$sql);
	$products=mysqli_fetch_all($result,1);
	$output["count"]=count($products);
	$output["pageCount"]=ceil($output["count"]/$output["pageSize"]);
	$sql.=" limit ".$output["pageNo"]*$output["pageSize"].",".$output["pageSize"];
	$result=mysqli_query($conn,$sql);
	$products=mysqli_fetch_all($result,1);
	$output["plist"]=$products;
	echo "$callback('".json_encode($output)."')";
}
?>