<html>
<head>
<title>查询成功</title>
</head>
<body>
<h3>物流信息</h3>
<a><?php echo $invok_100; ?></a>
<a><?php echo date('Y-m-d H:i:s',$ip_time); ?></a>
物流公司：<a><?php echo $invok_100['com']; ?></a>
物流单号：<a><?php echo $invok_100['nu']; ?></a>
当前状态：<a><?php if ($invok_100['state'] = 0){ echo '在途'; }
elseif ($invok_100['state'] = 1) {
 echo '揽件';
}elseif ($invok_100['state'] = 2) {
     echo '疑难';
}elseif ($invok_100['state'] = 3) {
     echo '签收';
}elseif ($invok_100['state'] = 4) {
     echo '退签';
}elseif ($invok_100['state'] = 5) {
     echo '派件';
}elseif (condition) {
     echo '退回';
}else{
    echo "当前暂无状态";
    }; ?></a>
<table border='1'>
    <tr>
        <th>时间</th>
        <th>状态描述</th>
    </tr>
    <?php foreach ($invok_100['data'] as $dt): ?>
    <tr>
        <td><?php echo $dt['time']; ?></td>
        <td><?php echo $dt['context']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>