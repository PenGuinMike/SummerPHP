
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/13
 * Time: 上午 09:58
 */
function fun1($a){
    switch ($a){
        case 1:
            echo    "<div align=\"center\" style=\"font-weight: bold; color: red;font-size: 5em\">
                        <p>
                            <a href=\"/ams7758/test2/index.html\" style=\"text-decoration:none\">(／‵Д′)／~ ╧╧</a>
                        </p>
                    </div>";
            echo "<div align='center'>  <p>hello this is page 1</p> </div>";
            break;
        case 2:
            echo    "<div align=\"center\" style=\"font-weight: bold; color: red;font-size: 5em\">
                        <p>
                            <a href=\"/ams7758/test2/index.html\" style=\"text-decoration:none\">(つ´ω`)つ</a>
                        </p>
                    </div>";
            echo "<div align='center'>  <p>wait! this is page 2?</p> </div>";
            break;
        case 3:
            echo    "<div align=\"center\" style=\"font-weight: bold; color: red;font-size: 5em\">
                        <p>
                            <a href=\"/ams7758/test2/index.html\" style=\"text-decoration:none\">(￣▽￣)/</a>
                        </p>
                    </div>";
            echo "<div align='center'>  <p>no! this is page 3!!!</p> </div>";
            break;
    }
}
?><div align="center">
    <form action="backhome.php" method="post">
        <input type="submit" value="back to home">
    </form>
</div>
