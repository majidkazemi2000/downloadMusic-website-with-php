<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کاربران</title>
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
            $("#show_detail_div").css('height',heightt)
            $("#load_div").css('height',heightt)
            $("#search_icon").click(function () {
                $("#search_div").show('slide')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('blind')
            })
            var s=$("#search_item").val()
            if(s == "firstname" || s =="lastname"){
                $("#text_search").show()
            }else{
                $("#"+s+"_search").show()
            }
            $("#search_item").change(function () {
                $("#text_search").hide()
                $("#logindate_search").hide()
                $("#status_search").hide()

                var i=$("#search_item").val()
                if(i == "firstname" || i =="lastname"){
                    $("#text_search").show('blind')
                }else{
                    $("#"+i+"_search").show('blind')
                }
            })



            $("#close_detail").click(function () {
                $("#show_detail_div").hide('fade')
            })

            $(".detail").click(function () {
                var id=$(this).attr("href")

                $("#load_div").show()
                $.ajax({
                    type:'POST',
                    url:'../../ajax/getuserinfo/',
                    data:{'id':id},
                    success:function (response) {
                        $("#load_div").hide()
                        if (response != false){
                            $("#show_detail_div").show()
                            var s=response.split("%")
                            var like=s[0];
                            var comment=s[1];
                            var visit=s[2];
                            $("#comment_number").text(comment)
                            $("#visit_number").text(visit)
                            $("#like_number").text(like)
                        }else{
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                            }, 2000);
                        }
                    }


                })
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
            color: whitesmoke;
            font-size: 20px;
            padding: 0px;
        }
        #logout:hover{
            color: #ff002b;
        }
        #close_search_div:hover{
            cursor:pointer;
        }
        #search_user{
            height: 35px;
            font-family: 'B Yekan';
            border: none;
            background-color: transparent;
            border: solid 1px black;
            color: black;
            outline: none;
            transition: all .3s;
        }
        #search_user:hover{
            color: antiquewhite;
            border-color: antiquewhite;
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
        #logout_div,#home_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
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
<body style="background-color: antiquewhite">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
    <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
    </div>
    <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">کاربران</p>
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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;padding: 0px;padding-bottom: 10px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">اخراج</p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">وضعیت</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">فعالیت کاربر</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تاریخ ورود</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">شماره تلفن</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نام خانوادگی</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نام</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 7px;padding-bottom: 7px;">
            <?php
                if (isset($user) && $user != false){
                    foreach ($user as $val):
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: white;padding: 0px;margin-top: 3px;margin-bottom: 3px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                    <a href="?delete=<?php echo $val['id'];?>" style="color: red;font-family: 'B Yekan';font-size: 15px;line-height: 60px;text-decoration: none;">اخراج</a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                    <a href="?<?php if ($val['status'] == 'active'){echo 'inactive';}else{echo 'active';}?>=<?php echo $val['id'];?>" style="color: lightgray;font-family: 'B Yekan';font-size: 15px;line-height: 60px;text-decoration: none;"><?php if ($val['status'] == 'active'){echo 'غیرفعال کردن';}else{echo 'فعال کردن';}?></a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: blue;font-family: 'B Yekan';font-size: 15px;line-height: 60px;cursor: pointer;" class="detail" href="<?php echo $val['id'];?>">فعالیت کاربر</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['logindate'];?></p>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['numberphone'];?></p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['lastname'];?></p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                    <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['firstname'];?></p>
                </div>
            </div>

            <?php
                endforeach;
            }else{
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #ff646b;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top: 20px;padding-bottom: 20px;">
                        <p style="font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">کاربری یافت نشد</p>
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
                        <option value="firstname" style="direction: rtl;">نام</option>
                        <option value="lastname" style="direction: rtl;">نام خانوادگی</option>
                        <option value="status" style="direction: rtl;">وضعیت</option>
                        <option value="logindate" style="direction: rtl;">تاریخ ورود</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding:0px;">
                    <p style="line-height: 50px;font-family: 'B Yekan';color: black;direction: rtl;">جستجو بر اساس : </p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="text_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" placeholder="جستجو ..." style="height: 35px;font-family: 'B Yekan';color: black;border: none;background-color: antiquewhite;direction: rtl;" name="search_text">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="logindate_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <input id="date2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" placeholder="تاریخ ورود" style="height: 35px;font-family: 'B Yekan';color: black;border: none;background-color: antiquewhite;direction: rtl;" name="search_logindate">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="status_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <select  id="search_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" name="search_status">
                            <option value="active" style="direction: rtl;">فعال</option>
                            <option value="inactive" style="direction: rtl;">غیر فعال</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                    <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="submit" value="جستجو" id="search_user" name="search_user">
                </div>
            </div>

        </div>
    </form>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;" id="load_div">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: auto;margin-top: 20%;padding-top: 50px;padding-bottom: 50px;">
        <img src="../../static/images/load.gif" alt="not found" style="height: 100px;width: 100px;">
    </div>
</div>

<div id="show_detail_div" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position:fixed;top: 0px;display: none;overflow: scroll;">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center example" style="height: auto;background-color: #1c2a39;margin-top: 50px;padding-top: 20px;margin-bottom: 50px;padding-bottom: 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 30px;padding: 0px;">
            <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;cursor: pointer;" id="close_detail">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: auto;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                <p style="direction: rtl;font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">تعداد بازدیدها :<span id="visit_number" style="padding: 10px;background-color: #ffa8cb;color: #000000;border-radius: 50%;margin-right: 10px;">14</span></p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;margin-top: 20px;">
                <p style="direction: rtl;font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">تعداد نظرات :<span id="comment_number" style="padding: 10px;background-color: #62ffa6;color: #000000;border-radius: 50%;margin-right: 10px;">14</span></p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;margin-top: 20px;">
                <p style="direction: rtl;font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">تعداد لایک ها :<span id="like_number" style="padding: 10px;background-color: #8bf7ff;color: #000000;border-radius: 50%;margin-right: 10px;">14</span></p>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;" id="error_div">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #ff4532;">
            <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">خطایی رخ داده است</p>
        </div>
    </div>
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
