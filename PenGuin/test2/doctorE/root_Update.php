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
$id2=$_GET['id'];
$account=$_POST['account'];
$password=$_POST['password'];
$ckpassword=$_POST['ckpassword'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$line=$_POST['line'];
$radios=$_POST['gridRadios'];
$tmpRadios;
if(isset($_SESSION['username'])){
}else{
    echo "您尚未登入";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
//UPDATE `user` SET phone='0123' WHERE account='test'
//echo $id2;
echo $phone;
if($account!=null){

    $sql = "UPDATE user SET account='$account' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro 0" . $conn->error;
    }
}
if($password !=null&&$password==$ckpassword){
    echo $tmp;
    $tmp=sha1($password);
//    $password=sha1($password);
    $sql ="UPDATE user SET password='$tmp' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
//        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro 1" . $conn->error;
    }
}
if($phone!=null){
    $sql = "UPDATE user SET phone='$phone' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
//        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro 2" . $conn->error;
    }
}
if($mail!=null){
    $sql = "UPDATE user SET email='$mail' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
//        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro 3" . $conn->error;
    }
}
if($line!=null){
    $sql = "UPDATE user SET line='$line' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
//        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
    } else {
        echo "錯誤 Erro 4" . $conn->error;
    }
}
if($radios!="0"){
    $sql = "UPDATE user SET usertype='$radios' WHERE account='$id2'";

    if ($mysqli->query($sql) === TRUE) {
        echo "修改成功";
//        echo '<meta http-equiv=REFRESH CONTENT=1;url=studentData.php>';
        $tmpRadios=$radios;
    } else {
        echo "錯誤 Erro 4" . $conn->error;
        $tmpRadios=null;
    }
}
//$sqlLog = "INSERT INTO user_log(`Performer`,`user`,`account_1`,`password_1`,`phone_1`,`email_1`,`line_1`,`usertype_1`)VALUES('$id','$id2','$account','$password','$phone','$mail','$line','$tmpRadios')";
if($tmpRadios==null){
    $sqlLog = "INSERT INTO user_log(`Performer`,`user`,`account_1`,`password_1`,`phone_1`,`email_1`,`line_1`)VALUES('$id','$id2','$account','$tmp','$phone','$mail','$line')";
}else{
    $sqlLog = "INSERT INTO user_log(`Performer`,`user`,`account_1`,`password_1`,`phone_1`,`email_1`,`line_1`,`usertype_1`)VALUES('$id','$id2','$account','$tmp','$phone','$mail','$line',$tmpRadios)";
}
    if ($mysqli->query($sqlLog) === TRUE) {
        //    echo "修改成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    } else {
        echo "錯誤 Erro 5" . $conn->error;
    }
