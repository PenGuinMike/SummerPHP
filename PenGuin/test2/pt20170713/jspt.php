
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        #gg{
            color:red;
            font-weight: bold;
            font-size: 5em;
        }
        #wp{
            color: green;
            font-size: 2em;
            font-weight: 200;
        }

    </style>
    <link rel="stylesheet" href="jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui.structure.css">
    <link rel="stylesheet" href="jquery-ui.theme.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

    <p id="gg">Hello world</p>
    <button onclick="fun1()">
        green
    </button>
    <button onclick="fun2()">
        change form
    </button>

        <form action="" >
            <div id="wp">
                123<input type="text">
                123<input type="text">
                123<input type="text">
            </div>

        </form>

    <script>
        var fun1 = function(){
            document.getElementById("gg").style.color="green";
        }
        var fun2 = function(){
            document.getElementById("wp").style.display="none";

        }
    </script>
</div>
</body>
</html>



<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/13
 * Time: 下午 01:34
 */