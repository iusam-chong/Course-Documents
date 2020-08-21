<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <!-- 正則運算式 -->
        <!-- pattern="(0\d-)?\d{7,8}" 市話號碼 -->
        <!-- (0\d-)?\d{7,8}|(0\d-)?\d{7,8} 進化市話號碼-->
        <!-- pattern="CI-\d\d\d" 航班號碼-->
        <!--  \w+([.-_]\w+)*@\w+([.]\w+)+ 簡單郵件-->
        <input type="text" name="flightNumber" pattern="" required>
        <input type="submit" name="btnOk" value="OK">
    </form>
</body>
</html>