<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/21
 * Time: 下午 02:22
 */
session_start();
session_unset();
session_destroy();
echo "登出中....";
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';