<?php

$RGB= $_POST['RGB'];
//$RGB = strtoupper($RGB)."<br>";

switch ($RGB= strtoupper($RGB)){
    case "R":
        for($i=0;$i<=255;$i+=5){
            echo "<div style='width: 50px;height: 25px;background-color: rgb($i,0,0);border: solid 1px #FFFFFF'></div>";

        }
        break;
    case 'G':
        for($i=0;$i<=255;$i+=5){
            echo "<div style='width: 50px;height: 25px;background-color: rgb(0,$i,0);border: solid 1px #FFFFFF'></div>";
        }
        break;

    case 'B':
        for($i=0;$i<=255;$i+=5){
            echo "<div style='width: 50px;height: 25px;background-color: rgb(0,0,$i);border: solid 1px #FFFFFF'></div>";
        }
        break;
}