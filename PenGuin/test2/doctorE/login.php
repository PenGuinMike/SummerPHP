
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/20
 * Time: 上午 10:43
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

$mysqli = new mysqli($db_server,$db_user,$db_passwd,$db_name);
//if(!@$link = mysqli_connect($db_server,$db_user,$db_passwd,$db_name))
//    die("資料庫無法連線!");
if($mysqli->connect_errno){
    echo "connect failed:" . $mysqli->connect_error."<br>";
    exit();
}

$id = $_POST['id'];
$pwd = sha1($_POST['pwd']);
//$pwd = $_POST['pwd'];
//$id = $_REQUEST['id'];
//$pwd = $_REQUEST['pwd'];

$query ="SELECT * FROM user WHERE `account`='$id'";

//$sql ="SELECT * FROM user WHERE  account ='$id'";
//$result = mysqli_query($link,$sql);
//$row = @mysqli_fetch_row($result);
//
//if($id != null && $pwd != null && $row[2] == $id && $row[3] == $pwd)
//{
//    //將帳號寫入session，方便驗證使用者身份
//    $_SESSION['account'] = $id;
//    echo '登入成功!';
//    echo '<meta http-equiv=REFRESH CONTENT=1;url=membertest.php>';
//}
//else
//{
//    echo $id;
//    echo $str;
//    echo '登入失敗!';
////    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
//}
//
if($result = $mysqli->query($query)){
    $row=$result->fetch_row();
    if($row[2]==$id&&$row[3]==$pwd){
        $_SESSION['username']=$id;
        $_SESSION['usertype']=$row[7];
//        echo $_SESSION['username'];
//        echo $_SESSION['usertype']=$row[7];
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }else{
//        echo $row[2];
//        echo $row[3].'<br>';
//        echo $id;
//        echo $pwd;
        echo '帳號或密碼錯誤!!!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else{
    echo 'Error!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}


?>



