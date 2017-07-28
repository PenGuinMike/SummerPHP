<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/24
 * Time: 下午 03:28
 */
session_start();
include ('dbconnect.php');

$id = $_GET['id'];
//echo $id;
//echo $_SESSION['username'];
if(isset($_SESSION['username'])){
    $query = "DELETE FROM `user` WHERE `account` = '$id'";

    if ($mysqli->query($query) === TRUE) {
        echo "刪除成功...";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro Del" . $conn->error;
    }
}else{
    echo "您尚未登入!!!";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
}

