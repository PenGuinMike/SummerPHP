<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/12
 * Time: 上午 10:52
 */
$val = $_POST['val'];
$ct1 = sizeof($val);
$change=0;
$catch1=$_POST['catch1'];
for($i=0;$i<$ct1;$i++){
    for($j=0;$j<$ct1;$j++){
        if($val[$i]>$val[$j]){
            $change = $val[$i];
            $val[$i]=$val[$j];
            $val[$j]=$change;
        }
    }
}

if($catch1==1){
    for($i=$ct1;$i>=0;$i--){
        echo $val[$i].'&nbsp';
    }
}else if($catch1==2){
    for($i=0;$i<$ct1;$i++){
        echo $val[$i].'&nbsp';
    }
}?>
<div align="center">
    <form action="backhome.php" method="post">
        <input type="submit" value="back to home">
    </form>
</div>
