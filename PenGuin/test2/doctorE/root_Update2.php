<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/25
 * Time: 上午 09:24
 */
$id=$_GET['id'];
include('htmlhead.php');
mainheader();
include('st1.php');
nvbar(0);
if(isset($_SESSION['username'])&&$_SESSION['usertype']!=3){
    include ('dbconnect.php');
    $query="SELECT *FROM `user` WHERE `account`='$id'";
    if($result=$mysqli->query($query)){
        $row=mysqli_fetch_row($result);
    }
}else{
    echo '<script> alert("您尚無登入或尚無權限查看此頁面")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
echo $id;
?>

<!--<div align="center">-->
<!--    <p style="font-size: 1.3em;font-weight: bold;color: #5487ff;margin: 50px auto auto auto;" class="updatebg">請在需要修改的欄位輸入需要更改的資料</p>-->
<!--    <form action="root_Update.php?id=--><?php //echo $id; ?><!--" method="post" style="margin: 50px auto auto auto;">-->
<!---->
<!---->
<!--        <sqan class="inputC">帳號:</sqan><input type="text" name="account" placeholder="--><?php //echo $id;?><!--" style="border-radius: 5px;"> <br><br>-->
<!--        <!--            帳號:<input type="text" class="form-control" placeholder="帳號" aria-describedby="basic-addon1"><br><br>-->-->
<!--        <sqan class="inputC">密碼:</sqan><input type="password" name="password" style="border-radius: 5px;"><br><br>-->
<!--        <sqan class="inputC">確認密碼:</sqan><input type="password" name="ckpassword"style="border-radius: 5px;"><br><br>-->
<!--        <sqan class="inputC">手機:</sqan><input type="tel" name="phone"style="border-radius: 5px;" ><br><br>-->
<!--        <sqan class="inputC">信箱:</sqan><input type="email" name="mail"style="border-radius: 5px;"><br><br>-->
<!--        <sqan class="inputC">Line:</sqan><input type="text" name="line"style="border-radius: 5px;"><br><br>-->
<!--        <input type="submit" value="送出" style="padding: 0 10px 0 10px">-->
<!--    </form>-->
<!--</div>-->
</div>
<p style="font-size: 1.3em;font-weight: bold;color: #5487ff;margin: 5% auto auto 37.5%; " class="updatebg" align="center">請在需要修改的欄位輸入需要更改的資料</p>
<div class="container" style="margin-top: 80px;width: 40%">
    <form action="root_Update.php?id=<?php echo $id; ?>"method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">帳號</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" placeholder="Account"name="account"value=<?php echo "$row[2]"; ?> >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="mail"value=<?php echo "$row[5]"; ?> >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">密碼</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password"name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">確認密碼</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password"name="ckpassword">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">手機</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputTel3" placeholder="Phone Number"name="phone"value=<?php echo "$row[4]"; ?> >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Line</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" placeholder="Line"name="line"value=<?php echo "$row[6]"; ?> >
            </div>
        </div>

            <legend class="col-form-legend col-sm-2" style="font-weight: bold">修改身分</legend>
<!--            <p>修改身分</p>-->
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value=0 checked>
                        不修改
                    </label>
                </div>
                <?php
                if($_SESSION['usertype']=="1"){
                    echo '<div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value=1>
                                管理員
                            </label>
                          </div>';
                }
                ?>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value=2>
                        老師
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value=3>
                        學生
                    </label>
                </div>

            </div>


<!--        <select class="custom-select">-->
<!--            <option selected>Open this select menu</option>-->
<!--            <option value="1">One</option>-->
<!--            <option value="2">Two</option>-->
<!--            <option value="3">Three</option>-->
<!--        </select>-->
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">確定</button>
            </div>
        </div>
<!--        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">-->
<!--            <option selected>修改身分</option>-->
<!--            <option value="1">老師</option>-->
<!--            <option value="2">學生</option>-->
<!--        </select><br>-->

    </form>
</div>

</body>
</html>