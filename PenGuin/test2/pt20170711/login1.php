<?php

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    if($name == 'A'&& $pwd== 1){
        echo '<meta http-equiv="refresh" content="1;url=page1.html">';
    }else if($name == 'B'&& $pwd == 2){
        echo '<meta http-equiv="refresh" content="1;url=page2.html">';
    }else if($name == 'C'&& $pwd == 3){
        echo '<meta http-equiv="refresh" content="1;url=page3.html">';
    }else {
        echo '<meta http-equiv="refresh" content="1;url=login.html">';
    }


