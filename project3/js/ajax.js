function ajax({type,url,data,dataType}){
	return new Promise(open=>{
	  //1.创建异步对象xhr
	  var xhr=new XMLHttpRequest();
	  //2.绑定事件—— 监听状态
	  xhr.onreadystatechange=function(){
		if(xhr.readyState==4&&xhr.status==200){
			if(dataType==="json"){
				open(JSON.parse(xhr.responseText));
			}else{
				open(xhr.responseText);
			}
		}
	  }
	  //3.创建连接
	  if(type==="get"){
		url+="?"+data;
	  }
	  xhr.open(type,url,true);
	  //4.发送请求
	  if(type==="get"){
		xhr.send(null);
	  }else{
		xhr.send(data);
	  }
	});
}