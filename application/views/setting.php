<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تنظیمات</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script>
        $(document).ready(function () {
            var heightt = $(window).height()
            $("#search_div").css('height',heightt)
            $("#load_div").css('height',heightt)
            $("#search_icon").click(function () {
                $("#search_div").show('slide')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('blind')
            })
            var s=$("#search_item").val()
            if(s == "contain" || s == "post_id"){
                $("#text_search").show()
            }else{
                $("#"+s+"_search").show()
            }
            $("#search_item").change(function () {
                $("#text_search").hide()
                $("#date_search").hide()
                $("#status_search").hide()

                var i=$("#search_item").val()
                if(i == "contain" || i == "post_id"){
                    $("#text_search").show('blind')
                }else{
                    $("#"+i+"_search").show('blind')
                }
            })
        })
    </script>
    <style>
        *{
            user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            outline: none;
        }
        ::placeholder {
            color: black;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: black;
        }

        ::-ms-input-placeholder {
            color: black;
        }
        #logout{
            line-height: 40px;
            font-family: 'B yekan';
            font-weight: bold;
            text-decoration: none;
            color: darkred;
            font-size: 18px;
            padding: 0px;
            transition: all .3s;
        }
        #admin_logo{
            line-height: 40px;
            font-family: 'B yekan';
            font-weight: bold;
            text-decoration: none;
            color: antiquewhite;
            font-size: 20px;
            padding: 0px;
        }
        #logout:hover{
            color: #ff002b;
        }
        #search_item ~ option{
            font-family: "B Yekan";
            color: red;
            text-align: left;
        }
        #logout_div,#home_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
        }
        #change{
            height: 50px;
            margin-top: 7px;
            border: none;
            outline: none;
            font-family: 'B Yekan';
            font-size: 20px;
            transition: all .3s;
            background-color: antiquewhite;
        }
        #change:hover{
            color:antiquewhite;
            background-color: transparent;
            border: solid 1px antiquewhite;
        }
        .switch input{
            opacity: 0;
        }
        .switch{
            width: 60px;
            height: 30px;
            margin: 8px;
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }
        .switch .slide{
            position: absolute;
            top: 0px;
            bottom: 0px;
            right: 0px;
            left: 0px;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 0 0 2px #777,0 0 4px #777;
            border: solid 4px transparent;
            overflow: hidden;
        }
        .switch .slide:before{
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            background-color: #ff664d;
            border-radius: 30px;
            transform: translateX(-55px);
            transition: all .3s;
        }

        .switch input:checked + .slide:before{
            transform: translateX(0px);
            background-color: forestgreen;
        }
        .switch input:checked + .slide{
            box-shadow: 0 0 0 2px forestgreen,0 0 4px forestgreen;
            background-color: #81ff66;
        }
    </style>
</head>
<body style="background-color: antiquewhite">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
    <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
    </div>
    <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">تنظیمات</p>
    </div>
    <div class="col-lg-1 col-lg-push-9 col-md-2 col-md-push-5 col-sm-2 col-sm-push-5 col-xs-3 col-xs-push-3 text-center" id="home_div">
        <a href="../index/" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <img src="../../static/images/home(1).png" alt="not found" style="height: 30px;width: 30px;margin-top: 5px;">
        </a>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height:auto;margin-top: 20px;padding-top: 20px;padding-bottom: 20px;padding: 0px;">
    <form method="post">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;background-color: #1c2a39;padding: 0px;padding-top: 30px;padding-bottom: 30px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: antiquewhite;">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                        <input type="text" value="<?php if (isset($settings) && $settings != false){echo $settings['telegram_address'];}?>" class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 35px;margin-top: 7px;border: none;outline: none;font-family: 'B Yekan';font-size: 15px;" placeholder="آدرس تلگرام" name="telegram">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'B Yekan';font-size: 15px;color: black;">آدرس تلگرام</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 10px;background-color: antiquewhite;">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                        <input type="text" value="<?php if (isset($settings) && $settings != false){echo $settings['instagram_address'];}?>" class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 35px;margin-top: 7px;border: none;outline: none;font-family: 'B Yekan';font-size: 15px;" placeholder="آدرس اینستاگرام" name="instagram">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                        <p style="line-height: 50px;font-family: 'B Yekan';font-size: 15px;color: black;">آدرس اینستاگرام</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: antiquewhite;margin-top: 10px;padding:0px;">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 50px;padding-left: 20px;padding-right: 20px;user-select: none;-moz-user-select: none;-ms-user-select: none;-webkit-user-select: none;">
                        <div>
                            <label class="switch" for="like">
                                <input type="checkbox" name="like_sys" id="like" <?php if (isset($settings['like_sys']) && $settings['like_sys'] == 'on'){echo 'checked';}else{ echo '';}?> >
                                <span class="slide"></span>
                            </label>
                            <p style="float: right;font-family: 'B Yekan';line-height: 50px;font-size: 15px;">سیستم لایک</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: antiquewhite;margin-top: 10px;padding:0px;">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 50px;padding-left: 20px;padding-right: 20px;user-select: none;-moz-user-select: none;-ms-user-select: none;-webkit-user-select: none;">
                        <div>
                            <label class="switch" for="comment">
                                <input type="checkbox" name="comment_sys" id="comment"<?php if (isset($settings['comment_sys']) && $settings['comment_sys'] == 'on'){echo 'checked';}else{ echo '';}?>>
                                <span class="slide"></span>
                            </label>
                            <p style="float: right;font-family: 'B Yekan';line-height: 50px;font-size: 15px;">سیستم نظر دهی</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 10px;">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 50px;">
                        <input type="submit" value="تغییر دادن" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="change" name="change">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
