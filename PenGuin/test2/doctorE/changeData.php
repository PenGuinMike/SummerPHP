<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/24
 * Time: 上午 09:57
 */

include ('htmlhead.php');
mainheader();
include ('st1.php');
nvbar(0);
if($_SESSION['username'] != null) {
//    $id = $_SESSION['username'];
//    $query = "SELECT * FROM member_table where username='$id'";
//    $result =$mysqli->query($query);
//    $row=$result->fetch_row();

    if(isset($_SESSION['username'])){
    }else{
        echo '<script> alert("您尚無登入或尚無權限查看此頁面")</script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

    ?>

<!--    <div align="center">-->
<!--        <p style="font-size: 1.3em;font-weight: bold;color: #5487ff;margin: 50px auto auto auto; " class="updatebg">請在需要修改的欄位輸入需要更改的資料</p>-->
<!--        <form action="updateData.php" method="post" style="margin: 50px auto auto auto;">-->
<!---->
<!---->
<!--            <sqan class="inputC">帳號:</sqan><input type="text" name="account" placeholder="--><?php //echo $_SESSION['username']?><!--" style="border-radius: 5px;"> <br><br>-->
<!--<!--            帳號:<input type="text" class="form-control" placeholder="帳號" aria-describedby="basic-addon1"><br><br>-->-->
<!--            <sqan class="inputC">密碼:</sqan><input type="password" name="password" style="border-radius: 5px;"><br><br>-->
<!--            <sqan class="inputC">確認密碼:</sqan><input type="password" name="ckpassword"style="border-radius: 5px;"><br><br>-->
<!--            <sqan class="inputC">手機:</sqan><input type="tel" name="phone"style="border-radius: 5px;" ><br><br>-->
<!--            <sqan class="inputC">信箱:</sqan><input type="email" name="mail"style="border-radius: 5px;"><br><br>-->
<!--            <sqan class="inputC">Line:</sqan><input type="text" name="line"style="border-radius: 5px;"><br><br>-->
<!--<!--            <input type="submit" value="送出" style="padding: 0 10px 0 10px">-->-->
<!--            <button type="submit" class="btn btn-outline-danger">送出</button>-->
<!--        </form>-->


    </div>
    <p style="font-size: 1.3em;font-weight: bold;color: #5487ff;margin: 5% auto auto 37.5%; " class="updatebg" align="center">請在需要修改的欄位輸入需要更改的資料</p>
    <div class="container" style="margin-top: 80px;width: 40%">
        <form action="updateData.php"method="post">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">帳號</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" placeholder="Account"name="account">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="mail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">密碼</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password"name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" >確認密碼</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password"name="ckpassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">手機</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="inputTel3" placeholder="Phone Number"name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Line</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" placeholder="Line"name="line">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">確定</button>
                </div>
            </div>
        </form>
    </div>
    </body>
    </html>

    <?php
}else{
    echo '<p style="color: plum;font-size: 2em;font-weight: bold" align="center">您尚未登入!!! </p>';
}

    ?>

