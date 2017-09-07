<html>
<head>
<title>查询成功</title>
</head>
<body>
<h3>物流信息</h3>
物流公司：<a><?php echo $com; ?></a>
物流单号：<a><?php echo $numb; ?></a>
当前状态：<a><?php if ($state = 0){ echo '在途'; }
elseif ($state = 1) {
 echo '揽件';
}elseif ($state = 2) {
     echo '疑难';
}elseif ($state = 3) {
     echo '签收';
}elseif ($state = 4) {
     echo '退签';
}elseif ($state = 5) {
     echo '派件';
}elseif (condition) {
     echo '退回';
}else{
    echo "当前暂无状态";
    }; ?></a>
<table>
    <tr>
        <th>时间</th>
        <th>状态描述</th>
    </tr>
    <?php foreach ($kd_success['data'] as $dt): ?>
    <tr>
        <td><?php echo $dt['time']; ?></td>
        <td><?php echo $dt['context']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a><?php echo $ip; ?></a>

</body>
</html>