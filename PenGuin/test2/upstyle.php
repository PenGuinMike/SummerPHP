

<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/13
 * Time: 上午 10:15
 */

function utype($a){
    echo "
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <!--要增加按鈕這邊也要增加button-->
                <!--<span class=\"icon-bar\"></span>-->
            </button>

            <!--這邊改左上角大標題-->
            <a class=\"navbar-brand\" href=\"index.html\">大爆肝</a>

        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
            ";
            switch ($a){
                case 1:
                    echo '
                    <li class="active"><a href="index.php">主頁</a></li>
                    <li><a href="note.html">測試頁</a></li>
                    <li ><a href="contect.php">Contact</a></li>';
                    break;
                case 2:
                    echo '
                    <li ><a href="index.php">主頁</a></li>
                    <li class="active"><a href="note.html">測試頁</a></li>
                    <li ><a href="contect.php">Contact</a></li>';
                    break;
                case 3:
                    echo '
                    <li><a href="index.php">主頁</a></li>
                    <li><a href="note.html">測試頁</a></li>
                    <li class="active"><a href="contect.php">Contact</a></li>';
                    break;
            }
                echo "
                <!--自己新增的 fortest-->
                <!--<li><a href=\"contect.html\">fortest</a></li>-->
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">作品紀錄 <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <!--<li><a href=\"#\">Action</a></li>-->
                        <!--<li><a href=\"#\">Another action</a></li>-->
                        <!--<li><a href=\"#\">Something else here</a></li>-->
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">第一周</li>
                        <li><a href=\"Test1/20170703index.html\">20170703index</a></li>
                        <li><a href=\"Test1/test1.html\">test1</a></li>
                        <li><a href=\"Test1/test2.html\">test2</a></li>
                        <li><a href=\"web1/color.html\">color</a></li>
                        <li><a href=\"web1/font.html\">font</a></li>
                        <li><a href=\"web1/web2.html\">web2</a></li>
                        <li><a href=\"phpstorm/teacher.html\">teacher's</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">第二周</li>
                        <li><a href=\"pt20170711/login.html\">login</a></li>
                        <li><a href=\"forArray.php\">forArray</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>";
}

?>