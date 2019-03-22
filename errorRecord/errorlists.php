<?php
//读取存有用户信息的本地文件
$filename = 'errorlists.txt';
//判断是否存在$filename且$filename内是否存在数据
if(file_exists($filename)&&filesize($filename)>0){
	//从errorlists中读取数据
	$str = file_get_contents($filename);
	//反序列化存入arr中
	$errors = unserialize($str);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>故障列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/errorlist.css">
</head>
<body>
    <h3>故障列表页-<a href="errorRecord.php">添加故障信息</a></h3>
    <table>
        <tr>
            <th>编号</th>
            <th>机器编号</th>
            <th>操作员工号</th>
            <th>故障描述</th>
            <th>时间</th>
        </tr>
        <?php 
        foreach ($errors as $key=>$val){
            //打印故障信息
            $id = $key + 1;
            printf("<tr>
                        <td>$id</td>   
                        <td>$val[machineId]</td>
                        <td>$val[operatorId]</td>
                        <td>$val[introduction]</td>
                        <td>$val[time]</td>
                    </tr>"); 
        }
        ?>
    </table>    
</body>
</html>