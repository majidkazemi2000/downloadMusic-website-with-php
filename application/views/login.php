<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script>
        $(document).ready(function () {
            $("#password_change").click(function () {
                if ($("#password").attr("type") === "password"){
                    $("#password").attr("type","text")
                    $("#password_change").attr("src","hide_pass.png")
                }else{
                    $("#password").attr("type","password")
                    $("#password_change").attr("src","show_pass.jpg")
                }
            })
        })
    </script>
    <style>
        *{
            user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
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
    </style>
</head>
<body style="background-color: #1c2a39;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 100px;">
        <form method="post" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: 300px;background-color: lightgray;padding-top: 60px;padding-bottom: 60px;border-radius: 10px;  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.7);position: relative;" autocomplete="off">
            <img src="../../static/images/login.png" style="position: absolute;top: 0px;right: 50px;height: 100px;width: 100px;margin-top: -50px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;">
                <input class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" type="text" style="height: 40px;outline: none;font-family: 'B Yekan';font-size: 15px;border: none;border-radius: 10px;border: solid 2px black;background-color: transparent;margin-top: 10px;" placeholder="نام کاربری" name="username">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="padding: 0px;position:relative;">
                    <input id="password" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="password" style="height: 40px;outline: none;font-family: 'B Yekan';font-size: 15px;border: none;border-radius: 10px;border: solid 2px black;background-color: transparent;margin-top: 10px;" placeholder="رمز عبور" name="password">
                    <img id="password_change" src="../../static/images/show_pass.jpg" style="width: 30px;height: 30px;position: absolute;top: 15px;right: 20px;cursor: pointer;">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;">
                <input class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center" type="submit" value="ورود" style="border: none;height: 40px;font-family: 'B Yekan';font-size: 15px;border-radius: 10px;margin-top: 10px;" name="login">
            </div>
        </form>
    </div>
</body>
</html>
