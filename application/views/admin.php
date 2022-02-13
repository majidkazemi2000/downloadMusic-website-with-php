<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ادمین</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <style>
        *{
            user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            outline: none;
        }
        .text_item{
            line-height: 48px;
            font-family: 'B Yekan';
            font-size: 20px;
            color: black;
            text-decoration: none;
            transition: all .3s;
        }
        .text_item_div{
            height: 50px;
            background-color: white;
            transition: all .3s;
        }
        .item_admin:hover div div div .text_item{
            color: white;
            text-decoration: none;
        }
        .item_admin:hover div div .text_item_div{
            background-color: #1c2a39;
            text-decoration: none;
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
        #logout:hover{
            color: #ff002b;
        }
        #logout_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
        }
    </style>
</head>
<body style="background-color: antiquewhite;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 text-center" id="logout_div">
        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
    <ul style="list-style-type: none;">
        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/settings.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../setting/" class="text_item">تنظیمات</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/advertise.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../advertise/" class="text_item">تبلیغات</a>
                    </div>
                </div>
            </div>
        </li>


        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/music.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../song/" class="text_item">آهنگ ها</a>
                    </div>
                </div>
            </div>
        </li>


        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/user3.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../user/" class="text_item">کاربران</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/comments.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../comment/" class="text_item">نظرات کاربران</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/logs.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../log/" class="text_item">ورود و خروج</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/microphone.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../singer/" class="text_item">خوانندگان</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="item_admin">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 200px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-bottom: 10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;padding: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 150px;background-color: white;border-bottom: solid 2px black;">
                        <img src="../../static/images/category.png" alt="not found" style="height: 100px;width: 100px;margin-top: 25px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text_item_div">
                        <a href="../category/" class="text_item">دسته بندی ها</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

</body>
</html>
