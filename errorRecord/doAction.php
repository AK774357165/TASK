<?php
//判断并接受数据
$machineId = isset($_POST['machineId'])?$_POST['machineId']:'';
$operatorId = isset($_POST['operatorId'])?$_POST['operatorId']:'';
$introduction = isset($_POST['introduction'])?$_POST['introduction']:'';
$time = date('Y-m-d H:i:s');

//设置目标文件
$filename = 'errorlists.txt';

//接受act参数
$act = isset($_POST['act'])?$_POST['act']:'';
    
//判断是否存在$filename且$filename内是否存在数据
if(file_exists($filename)&&filesize($filename)>0){
	//从errorlists中读取数据
	$str = file_get_contents($filename);
	//反序列化存入arr中
	$arr = unserialize($str);
}
//判断act是否为add
if($act=='add'){
    //新建数组存放数据
    $arr[] = array(
    		'machineId'=>$machineId,
        	'operatorId'=>$operatorId,
        	'introduction'=>$introduction,
    		'time'=>$time
    );
    
    //序列化数组
    $data = serialize($arr);
    //保存在本地文件内
    
    if(file_put_contents($filename,$data)){
    	echo '添加留言成功<br/>';
    	echo '<a href="errorRecord.php">继续添加故障</a> | <a href="errorlists.php">查看故障列表</a>';
    }else{
    	echo '添加留言失败';
    }
}


?>