<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/12
 * Time: 上午 09:40
 */
    $ar=array(array());
    $sum=10;
    for($i=0;$i<3;$i++){
        for($x=0;$x<3;$x++){
            $sum--;
            $ar[$i][$x]=$sum;

        }
    }
    for($i=0;$i<3;$i++){
        for($x=0;$x<3;$x++){
            echo $ar[$i][$x];

        }echo "<br>";
    }
    ?>
<form action="backhome.php" method="post">
    <input type="submit" value="back to home">
</form>
<?php
