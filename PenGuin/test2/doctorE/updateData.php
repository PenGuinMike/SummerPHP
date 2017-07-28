<?php
session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/24
 * Time: 上午 10:20
 */
include ('dbconnect.php');
$id=$_SESSION['username'];
$account=$_POST['account'];
$password=$_POST['password'];
$ckpassword=$_POST['ckpassword'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$line=$_POST['line'];
//UPDATE `user` SET phone='0123' WHERE account='test'
if($account!=null){

    $sql = "UPDATE user SET account='$account' WHERE account='$id'";
//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`account_1`)VALUES('$id','$id','$account')";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 0" . $conn->error;
    }
}
if($password !=null&&$password==$ckpassword){
    $password=sha1($password);
    $sql = "UPDATE user SET password='$password' WHERE account='$id'";
//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`password_1`)VALUES('$id','$id','$password')";
    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 1" . $conn->error;
    }
}
if($phone!=null){
    $sql = "UPDATE user SET phone='$phone' WHERE account='$id'";
//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`phone_1`)VALUES('$id','$id','$phone')";
    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 2" . $conn->error;
    }
}
if($mail!=null){
    $sql = "UPDATE user SET email='$mail' WHERE account='$id'";
//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`email_1`)VALUES('$id','$id','$mail')";
    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 3" . $conn->error;
    }
}
if($line!=null){
    $sql = "UPDATE user SET line='$line' WHERE account='$id'";
//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`line_1`)VALUES('$id','$id','$line')";
    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 4" . $conn->error;
    }
}
//Performer
//user
//account_1
//password_1
//phone_1
//email_1
//line_1
//usertype_1

//    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`line_1`)VALUES('$id','$id','$line')";
    $sql2 = "INSERT INTO user_log(`Performer`,`user`,`account_1`,`password_1`,`phone_1`,`email_1`,`line_1`)VALUES('$id','$id','$account','$password','$phone','$mail','$line')";
if ($mysqli->query($sql2) === TRUE) {
//    echo "修改成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} else {
    echo "錯誤 Erro 5" . $conn->error;
}
