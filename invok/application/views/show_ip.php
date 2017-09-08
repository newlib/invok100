<html>
<head>
<title>查询成功</title>
</head>
<body>
<table border='1'>
    <tr>
        <th>ip地址</th>
        <th>访问次数</th>
        <th>操作</th>
    </tr>
    <?php foreach ($show as $dt): ?>
    <tr>
        <td><?php echo $dt->ip; ?></td>
        <td><?php echo $dt->time; ?></td>
        <td><a href="">修改</a> | <a href="">删除</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>