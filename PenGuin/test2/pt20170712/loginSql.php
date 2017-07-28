<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/12
 * Time: 下午 02:03
 */

//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "ams7758_user";
//資料庫管理者帳號
$db_user = "ams7758";
//資料庫管理者密碼
$db_passwd = "Mike19970330";

if(!@$link = mysqli_connect($db_server,$db_user,$db_passwd,$db_name))
    die("資料庫無法連線!");

$id = $_POST['id'];
$pwd = $_POST['pwd'];
//$id = $_REQUEST['id'];
//$pwd = $_REQUEST['pwd'];

$sql ="SELECT * FROM user WHERE  account ='$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($id != null && $pwd != null && $row[2] == $id && $row[3] == $pwd)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['account'] = $id;
    echo '登入成功!';
//    echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
    echo '登入失敗!';
//    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?><div align="center">
    <form action="backhome.php" method="post">
        <input type="submit" value="back to home">
    </form>
</div>