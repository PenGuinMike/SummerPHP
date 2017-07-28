<?php
session_start();
function mainheader()
{ ?>
    <!DOCTYPE html >
<html lang = "en" >
<head >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <meta charset = "utf-8" >
    <meta http - equiv = "X-UA-Compatible" content = "IE=edge" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1" >
    <style >
        * {
    margin:
    0px;
            padding: 0px;
        }



        .labelbg{
            width: 80%;
            background-color: #7d7d7c;
            border-image: linear-gradient(to bottom, rgba(57, 56, 57, 0.8), rgba(253, 240, 255, 0.3));
            border-radius: 10px;
        }

        .updatebg{
            width: 30%;
            background-color: #9cb240;
            border-image: linear-gradient(to bottom, rgba(57, 56, 57, 0.8), rgba(239, 234, 240, 0.6));
            border-radius: 10px;
        }
        .textbg{
            padding-top: 1%;
            padding-bottom:2%;
            /*width: 40%;*/
            background-color: #eaeae8;
            border-image: linear-gradient(to bottom, rgba(57, 56, 57, 0.8), rgba(231, 219, 233, 0.73));
            border-radius: 10px;
        }
        .textTt{
            padding-left: 6%;
            padding-right: 6%;
            width: 65%;
            background-color: #676b65;
            border-image: linear-gradient(to bottom, rgba(57, 56, 57, 0.8), rgba(231, 219, 233, 0.73));
            border-radius: 7px;
        }
        .supportSS{
            list-style: none;
        }
        .supportTt{
            font-weight: bold;
        }
        .supportLi{
            list-style: none ;
            margin-left: 3%;
            /*color: #b5b5b5;*/
            /*text-decoration:none;*/
        }
        .supportLi a:hover {
            color: #a6a6a6;
            text-decoration: none;
        }
        .supportLi a:visited{
            text-decoration: none;
            color: #4041a7;
            /*background-image:linear-gradient(to bottom, rgba(237, 255, 64, 0.8), rgba(255, 45, 60, 0.3)) ;*/
        }
        .supportLi a:active{
            text-decoration: underline;
            /*background-image: linear-gradient(to bottom, rgba(255, 76, 228, 0.8), rgba(255, 229, 16, 0.3));;*/
        }
    </style >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script >
    <!--Latest compiled and minified CSS-->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin = "anonymous" >

    <!--Optional theme-->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity = "sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin = "anonymous" >

    <!--Latest compiled and minified JavaScript-->
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity = "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin = "anonymous" ></script >
    <link rel = "stylesheet" href = "jquery-ui.css" >
    <link rel = "stylesheet" href = "jquery-ui.structure.css" >
    <link rel = "stylesheet" href = "jquery-ui.theme.css" >
    <script src = "https://code.jquery.com/jquery-1.12.4.js" ></script >
    <script src = "https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script >
    <link rel = "stylesheet" href = "css/style.css" >

    <script>
        $( function() {
            $( "#accordion" ).accordion({
                collapsible: true
            });
        } );
    </script>
    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>
    <script>
        $( function() {
            $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
            $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

            //-------------loginJs---------------------
        } );$(function() {

            var $formLogin = $('#login-form');
            var $formLost = $('#lost-form');
            var $formRegister = $('#register-form');
            var $divForms = $('#div-forms');
            var $modalAnimateTime = 300;
            var $msgAnimateTime = 150;
            var $msgShowTime = 2000;



            $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
            $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
            $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
            $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
            $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
            $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

            function modalAnimate ($oldForm, $newForm) {
                var $oldH = $oldForm.height();
                var $newH = $newForm.height();
                $divForms.css("height",$oldH);
                $oldForm.fadeToggle($modalAnimateTime, function(){
                        $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                        $newForm.fadeToggle($modalAnimateTime);
                    });
                });
            }

            function msgFade ($msgId, $msgText) {
                $msgId.fadeOut($msgAnimateTime, function() {
                    $(this).text($msgText).fadeIn($msgAnimateTime);
                });
            }

            function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
                var $msgOld = $divTag.text();
                msgFade($textTag, $msgText);
                $divTag.addClass($divClass);
                $iconTag.removeClass("glyphicon-chevron-right");
                $iconTag.addClass($iconClass + " " + $divClass);
                setTimeout(function() {
                    msgFade($textTag, $msgOld);
                    $divTag.removeClass($divClass);
                    $iconTag.addClass("glyphicon-chevron-right");
                    $iconTag.removeClass($iconClass + " " + $divClass);
                }, $msgShowTime);
            }
        });
    </script>
    <style>

        .smalltitle{
            font-size: 1.3em;font-weight: bold
        }
        .datet{
            font-size: 0.9em;font-weight: bold ;color: #5487ff
        }
        .producerE{
             font-size: 2.2em;font-weight: bold
         }
        .thankEvrey{
            font-size: 1.6em;font-weight: bold;color: lightpink;
        }
        .thankElse{
            font-size: 1.2em;
        }
        .inputC{
            font-size: 1.2em;
            font-weight: bold;
        }
        .chars{

            font-size: 1.3em;
            font-weight: bold;
            color: lightpink;
        }
    </style>
<!--    <style>-->
<!--        .ui-tabs-vertical { width: 55em; }-->
<!--        .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }-->
<!--        .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }-->
<!--        .ui-tabs-vertical .ui-tabs-nav li a { display:block; }-->
<!--        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }-->
<!--        .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}-->
<!--    </style>-->
</head >
<body style="background-image:
    linear-gradient(to right,rgba(255,255,255,0.8),rgba(255,255,255,0.3)),url('doctorI/阿秋的眼淚.jpg');
    background-attachment: fixed;background-size: 100%">
　
<?php
    }
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/7/17
 * Time: 上午 11:30
 */