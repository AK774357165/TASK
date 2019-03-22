<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>msgbord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/errorRecord.css">
</head>
<body>
    <h2>故障记录表</h2>
    <form action="doAction.php" method="POST">
    	<input type="hidden" name="act" value="add">
        <table>
            <tr>
                <td>机器编号：</td>
                <td><input type="text" name="machineId" placeholder="请输入机器编号"></td>
            </tr> 
            <tr>
                <td>操作员工号：</td>
                <td><input type="text" name="operatorId" placeholder="请输入工号"></td>
            </tr>
            <tr>
                <td>故障描述:</td>
                <td><textarea name="introduction" id="errorInduction" rows="5" placeholder="请描述故障"></textarea></td>
            </tr>
            
        </table>
        <input type="submit" class="submit" value="提交">
    </form>
</body>
</html>
