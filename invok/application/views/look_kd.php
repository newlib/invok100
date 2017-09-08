<html>
<head>
<title>快递查询</title>
</head>
<body>
<form action="../Invoking_100/invok_100" id="formid" method="post" >
    <a>
        <a size= '8'>快递公司:</a>
        <select name="com">
        <option value="0"  selected = "selected">输入公司名称</option>
        <option value="shunfengen">顺丰快递</option>
        <option value="yunda">韵达快递</option>
        </select>
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a>
        <a size = '8'>快递单号:</a>
        <input type="text" name="number" value="输入快递单号" onfocus="javascript:if(this.value=='输入快递单号')this.value='';" size="30" maxlength="30"/>
        <input type="submit" value="查询" />
    </a>
</form>
</body>
</html>