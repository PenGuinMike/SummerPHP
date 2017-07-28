<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/11
 * Time: 上午 11:08
 */
for($i=1;$i<=3;$i++){
    for($j=1;$j<=5;$j++){
        echo $i*$j;
    }'br';
}
$n=4;
$sum=1;
for($i=1;$i<$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo $sum++;
    }'br';

}