
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <style>
        .title1{
            background-color: mediumslateblue;
            border-style: solid;
            border-color: #b9ff76;
            font-size: 4em;
            text-align: center;border-radius: 20px;
        }
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/13
 * Time: 上午 11:16
 */
include ('upstyle.php');
utype(3);
?>

<p style="font-size: 10em;color: red ;margin: 258px auto auto auto;" align="center">
    (／‵Д′)／~ ╧╧
</p>
<div align="center">
    <form action="login.php" method="get">
        <!--<form action="login.php" method="post">-->
        name:<input type="text" name="name"><br>
        password:<input type="password" name="pwd"> <br>
        <p>mike / 123</p><br>
        <!--email:<input type="email"> <br>-->
        <p>請輸入任意兩數字</p>
        A:<input type="text" name="v1"><br>
        B:<input type="text" name="v2"><br>
        <!--<input type="radio" name="gender" value="male" checked> Male-->
        <!--<input type="radio" name="gender" value="female"> Female<br>-->
        <input type="submit" value="test">
    </form>
    <form action="backhome.php" method="post">
        <input type="submit" value="back to home">
    </form>
</div>
</body>
</html>
