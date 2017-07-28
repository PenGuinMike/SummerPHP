<?php
function nvbar($a)
{
    $c=0;
    ?>
    <!--    <div  style="margin: 1px auto 1px auto ; padding:30px;background-image:-->
    <!--    linear-gradient(to right,rgba(9,10,23,0.5),rgba(6,6,25,0.5))">-->
    <!--        <p style="float: left;font-weight: bold;font-size: 2em ;">E博士</p>-->
    <!--        <ul id="header">-->
    <!--            <li>公益微電影</li>-->
    <!--            <li>故事大綱</li>-->
    <!--            <li>人物介紹</li>-->
    <!--            <li>雲端助學</li>-->
    <!--            <li>愛心捐款</li>-->
    <!--        </ul>-->
    <!---->
    <!---->
    <!--    </div>-->
    <!--    <div style="clear: both"></div>-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">e博士</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if($a==1){echo 'class="active"';} ?>><a href="index.php">公益微電影&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li>
                    <li <?php if($a==2){echo 'class="active"';} ?>><a href="story.php">故事大綱&nbsp;<i class="fa fa-book" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li>
                    <li <?php if($a==3){echo 'class="active"';} ?>><a href="charStory.php">人物介紹 &nbsp;<i class="fa fa-address-book-o" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li>
                    </li>
<!--                    <li><a href="#">雲端助學</a></li>-->
                    <li <?php if($a==4){echo 'class="active"';} ?>><a href="support.php">雲端助學 &nbsp;<i class="fa fa-cloud" aria-hidden="true"></i><span class="sr-only">(current)</span></a></li>
<!--                    <li><a href="#">愛心捐款</a></li>-->
                    <li <?php if($a==5){echo 'class="active"';} ?>><a href="donate.php">愛心捐款&nbsp;<i class="fa fa-heart" aria-hidden="true"></i><span class="sr-only">(current)</span></a></li>

<!--                    <li class="active"><a href="#">公益微電影 <span class="sr-only">(current)</span></a></li>-->
<!--                    <li><a href="#">故事大綱</a></li>-->
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
<!--                           aria-expanded="false">人物介紹 <span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">故事源起</a></li>-->
<!--                            <li><a href="#">公益演員</a></li>-->
<!--                            <li><a href="#">幕後人員</a></li>-->
<!--                            <li><a href="#">製片札記</a></li>-->
<!--                            <li><a href="#">片尾曲</a></li>-->
<!--                            <li><a href="#">感謝名單</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="#">雲端助學</a></li>-->
<!--                    <li><a href="#">愛心捐款</a></li>-->
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php if(isset($_SESSION["username"])){ echo "<li style='margin-top: 10px'><p style='font-size: 1.3em;color: #878787;font-weight: bold'> 嗨!  " . $_SESSION["username"]. " 歡迎回來</p></li>";} ?>
                    <!--未登入時顯示登入,登入時顯示登出-->
                    <?php if(isset($_SESSION["username"])){echo '<li><a href="logout.php" role="button" data-toggle="modal" data-target="#login-modal">登出&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>';}
                    else{echo '<li><a href="#" role="button" data-toggle="modal" data-target="#login-modal">登入&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>';}  ?>
                    <!--顯示設定與清單-->
                    <?php  if(isset($_SESSION["username"])){ echo ' <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;設定
                         <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                                <li><a href="changeData.php">修改資料</a></li>
                                '?>
                                <!--當使用者身分為教師時,顯示學生資料-->
                                <?php
                                    if($_SESSION["usertype"]=="1"){
                                        echo '
                                        <li><a href="studentData.php">查詢使用者資料</a></li>
                                        <li><a href="root_Log.php">查詢更動紀錄</a></li>';

                                    }else if($_SESSION["usertype"]=="2"){
                                        echo '
                                        <li><a href="studentData.php">查詢學生資料</a></li>';
                                    }
//                                    echo '<li><a href="#">紀錄</a></li>';
                                } ?>

                         </ul>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


<!--Login Start-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <img class="img-circle" id="img_logo" src="doctorI/1.-e商標-單獨-100.png">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form  action="login.php" method="post" id="login-form">
                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">請輸入帳號密碼</span>
                            </div>
                            <input  id="login_username" class="form-control" type="text" placeholder="帳號" name="id" required >
                            <input id="login_password" class="form-control" type="password" placeholder="密碼" name="pwd" required >
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 記住我
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">登入</button>

<!--                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="登入">-->
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">忘記密碼?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">註冊去</button>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->

                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;" action="login.php" method="post">
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">請輸入你的信箱</span>
                            </div>
                            <input id="lost_email" class="form-control" type="text" placeholder="信箱" required name="mmail">
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">送出</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">登入</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">註冊</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->

                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;" action="regist.php" method="post">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">註冊帳號</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="姓名" required name="name">
                            <input id="register_username" class="form-control" type="text" placeholder="使用者名稱" required name="id">
                            <input id="register_password" class="form-control" type="password" placeholder="密碼" required name="pwd">
                            <input id="register_password" class="form-control" type="password" placeholder="確認密碼" required name="ckpwd">
                            <input id="register_email" class="form-control" type="tel" placeholder="手機" required name="phone">
                            <input id="register_email" class="form-control" type="email" placeholder="信箱" required name="email">
                            <input id="register_email" class="form-control" type="text" placeholder="Line" required name="line">
                            <input id="register_email"  type="radio"  required name="user" value="2">老師
                            <input id="register_email"  type="radio"  required name="user" value="3">學生



                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">註冊去</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">登入</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">忘記密碼?</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->




    <?php
}
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/17
 * Time: 上午 09:37
 */
?>