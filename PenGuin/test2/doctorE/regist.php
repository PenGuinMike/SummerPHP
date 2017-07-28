<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/21
 * Time: 上午 11:28
 */


include ('dbconnect.php');

$id=$_POST['id'];
$pwd =$_POST['pwd'];
$name = $_POST['name'];
$ckpwd=$_POST['ckpwd'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$line=$_POST['line'];
$usertype=$_POST['user'];

if($id!=null&&$pwd!=null&&$ckpwd!=null&&$email!=null&&$name!=null&&$pwd==$ckpwd){
    $pwd=sha1($pwd);
    $sql="INSERT INTO user(`Name`,`account`,`password`,`phone`,`email`,`line`,`usertype`)VALUES('$name','$id','$pwd'
,'$phone','$pemail','$line','$usertype')";
    if($mysqli->query($sql)===TRUE){
        echo '新增成功';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }else{
        echo '新增失敗'.$mysqli->error;
        echo '<br>'.$usertype;
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
    $mysqli->close();

}else{
    echo '輸入資料不完整';
    echo '<script>  history.back();  </script>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}