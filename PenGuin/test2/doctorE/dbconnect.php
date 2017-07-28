<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/21
 * Time: 下午 03:08
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


