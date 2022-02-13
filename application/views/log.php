<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود و خروج</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script src="../../static/js/kamadatepicker.min.js"></script>
    <link rel="stylesheet" href="../../static/css/kamadatepicker.min.css">
    <script>
        $(document).ready(function () {
            var heightt = $(window).height()
            $("#search_div").css('height',heightt)
            $("#search_icon").click(function () {
                $("#search_div").show('slide')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('blind')
            })

            var s=$("#search_item").val()
            if(s == "user"){
                $("#text_search").show()
            }else{
                $("#"+s+"_search").show()
            }
            $("#search_item").change(function () {
                $("#text_search").hide()
                $("#operation_search").hide()
                $("#date_search").hide()
                $("#category_search").hide()

                var i=$("#search_item").val()
                if(i == "user"){
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
        #bd-main-date2{
            font-family: "B Nazanin";
            font-weight: bold;
            position: absolute;
            top: 40px;
            left: 30px;
            border-radius: 10px;
            padding: 10px;
            background-color: white;
            z-index: 200000;
        }
        #search_icon:hover{
            cursor: pointer;
        }
        #search_icon:hover{
            animation-name: scale;
            animation-duration: .3s;
            animation-timing-function: ease-in-out;
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
        #logout_div,#home_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
        }
        #close_search_div:hover{
            cursor: pointer;
        }
        #search_item {
            background-color: antiquewhite;
            height: 35px;
            border: none;
            outline: none;
            font-family: "B Yekan";
            text-align: center;
            text-align-last: center;
        }
        #search_item ~ option{
            font-family: "B Yekan";
            color: red;
            text-align: left;
        }
        #search_log{
            height: 35px;
            font-family: 'B Yekan';
            border: none;
            background-color: transparent;
            border: solid 1px black;
            color: black;
            outline: none;
            transition: all .3s;
        }
        #search_log:hover{
            color: antiquewhite;
            border-color: antiquewhite;
        }
        @keyframes scale {
            0%{transform: scale(1,1);}
            20%{transform: scale(.9,.9);}
            40%{transform: scale(.8,.8);}
            60%{transform: scale(.7,.7);}
            80%{transform: scale(.7,.7);}
            100%{transform: scale(1.3,1.3);}

        }
    </style>
</head>
<body style="background-color: antiquewhite;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
    <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
    </div>
    <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">ورود و خروج</p>
    </div>
    <div class="col-lg-1 col-lg-push-9 col-md-2 col-md-push-5 col-sm-2 col-sm-push-5 col-xs-3 col-xs-push-3 text-center" id="home_div">
        <a href="../index/" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <img src="../../static/images/home(1).png" alt="not found" style="height: 30px;width: 30px;margin-top: 5px;">
        </a>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height:auto;margin-top: 20px;padding-top: 20px;padding-bottom: 20px;padding: 0px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 70px;background-color: #1c2a39;padding-top: 10px;">
        <div class="col-lg-1 col-lg-push-11 col-md-1 col-md-push-11 col-sm-1 col-sm-push-11 col-xs-2 col-xs-push-10 text-center" style="height: 50px;padding: 0px;">
            <img id="search_icon" src="../../static/images/search2.png" alt="not found" style="width: 30px;height: 30px;margin-top: 10px;">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;padding: 0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">فعالیت</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">کاربر</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">زمان</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تاریخ</p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">

            <?php
                if (isset($log) && $log !=false){
                    foreach ($log as $val):
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: white;padding: 0px;margin-top: 5px;margin-bottom: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: <?php if ($val['operation'] == 'login'){echo 'green';}else{echo 'red';}?>;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php if ($val['operation'] == "login"){echo "ورود";}else{echo "خروج";}?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['ip'];?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['time'];?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['date'];?></p>
                </div>
            </div>

            <?php
                    endforeach;
                }else{
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding:0px;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #ff646b;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top: 20px;padding-bottom: 20px;">
                        <p style="font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">ورود و خروجی ثبت نشده است</p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>


<div id="search_div" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;">
    <form method="post" autocomplete="off">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;margin-top: 100px;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 40px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;" id="close_search_div">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center " style="height: 50px;padding: 0px;">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                    <select  id="search_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" name="search_item">
                        <option value="date" style="direction: rtl;">تاریخ</option>
                        <option value="operation" style="direction: rtl;">فعالیت</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding:0px;">
                    <p style="line-height: 50px;font-family: 'B Yekan';color: black;direction: rtl;color: antiquewhite;">جستجو بر اساس : </p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="date_search">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                    <input id="date2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" placeholder="تاریخ ورود" style="height: 35px;font-family: 'B Yekan';color: black;border: none;background-color: antiquewhite;direction: rtl;" name="search_date">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="operation_search">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                    <select  id="search_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" name="search_operation">
                        <option value="login" style="direction: rtl;">ورود</option>
                        <option value="logout" style="direction: rtl;">خروج</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                    <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="submit" value="جستجو" id="search_log" name="search_log">
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    kamaDatepicker('date1', { buttonsColor: "red" });

    var customOptions = {
        placeholder: "روز / ماه / سال"
        , twodigit: true
        , closeAfterSelect: true
        , nextButtonIcon: "fa fa-arrow-circle-right"
        , previousButtonIcon: "fa fa-arrow-circle-left"
        , buttonsColor: "blue"
        , forceFarsiDigits: true
        , markToday: true
        , markHolidays: true
        , highlightSelectedDay: true
        , sync: true
        , gotoToday: true
    }
    kamaDatepicker('date2', customOptions);

    kamaDatepicker('date3', {
        nextButtonIcon: "images/prev.png"
        , previousButtonIcon: "images/next1.png"
        , forceFarsiDigits: true
        , markToday: true
        , markHolidays: true
        , highlightSelectedDay: true
        , sync: true
        , pastYearsCount: 0
        , futureYearsCount: 0
        , swapNextPrev: true
    });

    $("#date2").val("1311/10/01");
</script>
</body>
</html>