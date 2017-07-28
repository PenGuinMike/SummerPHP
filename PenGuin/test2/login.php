<?php
//$name= $_POST['name'];
//$pwd= $_POST['pwd'];
//echo 'id= '.$name.' and password= '.$pwd;

$name= $_GET['name'];
$pwd= $_GET['pwd'];

$v1 = $_GET['v1'];
$v2 = $_GET['v2'];
if($name=='mike'&& $pwd=='123'){
    echo "welcome";
    if(($v1*$v2)%2==0){
        echo  $v1 . 'x' . $v2 .'='.$v1*$v2;
        echo "偶數";
    }else{
        echo  "$v1 x $v2 = ";
        echo  $v1*$v2;
        echo "奇數";
    }?>
   <p>(／‵Д′)／~ ╧╧</p>
<?php
}else{
    echo "帳號or密碼錯誤".'<br>';
}
//for($i=0;$i<101;$i++){
//    echo "y = $i".'<br>';
//}
//for($i=1;$i<101;$i++){
//    $y+=$i;
//    echo "y= $y".'<br>';
//}

//for($i=0;$i<=255;$i++){
//    $x=255-$i;
//    echo "<div style='width: 50px;height: 25px;background-color: rgb(0,0,$i);border: solid 1px #FFFFFF;color: rgb(0,0,$x)'>
//            12345
//          </div>";
//
//}
//    for($i=1;$i<=3;$i++){
//        for($j=1;$j<=5;$j++){
//            echo $i*$j;
//        }echo '<br>';
//    }
//    $n=4;
//    $sum=1;
//    for($i=1;$i<=$n;$i++){
//        for($j=1;$j<=$i;$j++){
//            echo $sum++;
//        }echo  '<br>';
//    }


$tr=5;
    for($i=1;$i<=$tr;$i++){
         $g=$tr-$i;

        for($j=$g;$j>0;$j--){
            echo "暗";
        }
        $gg=$i*2-1;

        for($x=0;$x<$gg;$x++){
            echo "亮";
        }echo '<br>';
    }
    ?>
<form action="backhome.php" method="post">
    <input type="submit" value="back to home">
</form>
<?php
//    while ($tr<10){
//        $tr++;
//        echo $tr;
//    }

//for($i=0;$i<$tr;$i++){
//    $g=$tr-$i-1;
//    for($x=$tr-$i-1;$x>=0;$x--){
//        echo "$nbsp";
//    }
//    for($y=$i*2+1;$y<=$i;$y++){
//        echo "*";
//    }echo '<br>';
//}