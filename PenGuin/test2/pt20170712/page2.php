

<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/12
 * Time: 上午 10:52
 */
$size = $_GET['size'];
$ar1= array();
$flag=1;

//for($i=0;$i<$size;$i++){
//    $ar1[i];
//    echo "<div><input><form action='result.php'method='post'>
//        <input type='text' name='$flag'><br><br>
//    </form></div>";
//    $sum++;
//}


?>
<form action="result.php" method="post">
    <div>
        <?php
        for($i=0;$i<$size;$i++){
            echo "<input type='text' name='val[]'>";
        }
        ?>
    </div>
    <div>
        <input type="radio" name="catch1" value="1">遞增
        <input type="radio" name="catch1" value="2">遞減
    </div>
    <input type="submit" value="排序">
</form>
<!--<input type="text">-->

<div align="center">
    <form action="backhome.php" method="post">
        <input type="submit" value="back to home">
    </form>
</div>
