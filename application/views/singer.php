<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خوانندگان</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script>
        $(document).ready(function () {
            function just_persian(str) {
                var p = /^[\u0600-\u06FF\s]+$/;
                if (!p.test(str)) {
                    return false
                }
                return true;
            }
            var heightt = $(window).height()
            $("#search_div").css('height',heightt)
            $("#add_div").css('height',heightt)
            $("#load_div").css('height',heightt)
            $("#show_detail_div").css('height',heightt)
            $("#close_add_div").click(function () {
                $("#add_div").hide('blind')
            })
            $("#add_icon").click(function () {
                $("#add_div").show('slide')

            })
            $("#search_icon").click(function () {
                $("#search_div").show('slide')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('blind')
            })

            var s=$("#search_item").val()
            if(s == "name"){
                $("#text_search").show()
            }else{
                $("#"+s+"_search").show()
            }
            $("#search_item").change(function () {
                $("#text_search").hide()
                $("#category_search").hide()

                var i=$("#search_item").val()
                if(i == "number_phone"){
                    $("#text_search").show('blind')
                }
                if(i == "name"){
                    $("#text_search").show('blind')
                }else{
                    $("#"+i+"_search").show('blind')
                }
            })


            $("#add_singer").click(function () {
                $("#add_div").hide()
                $("#load_div").show()
                var name=$("#name").val()
                var category=$("#category").val()
                var about=$("#about").val()
                var img=$("#img").val()
                $.ajax({
                    url:'../../ajax/addsinger/',
                    type:'POST',
                    data:{'name':name,'category':category,'about':about,'img':img},
                    success:function (response) {
                        $("#load_div").hide()
                        if (response){
                            $("#success_add_category").animate({height:60},300);
                            setTimeout(function(){
                                window.location = window.location
                            }, 3000);
                        }else{
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                            }, 2000);
                        }
                    }
                })
            })

            $(".show").click(function () {
                var id=$(this).attr("href")

                $("#load_div").show()
                $.ajax({
                    type:'POST',
                    url:'../../ajax/getsinger/',
                    data:{'id':id},
                    success:function (response) {
                        $("#load_div").hide()
                        if (response != false){
                            $("#show_detail_div").show()
                            var s=response.split("%")
                            var about=s[0];
                            var number=s[1];
                            $("#song_number").text(number)
                            $("#text_show").text(about)
                        }else{
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                            }, 2000);
                        }
                    }


                })
            })

            $("#close_detail").click(function () {
                $("#show_detail_div").hide('fade')
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
            color: antiquewhite;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: antiquewhite;
        }

        ::-ms-input-placeholder {
            color: antiquewhite;
        }
        #close_add_div:hover{
            cursor: pointer;
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
        #add_icon:hover{
            cursor: pointer;
            animation-name: rotate;
            animation-duration: .5s;
            animation-timing-function: ease-out;
        }
        #search_item ~ option{
            font-family: "B Yekan";
            color: red;
            text-align: left;
        }
        #search_admin{
            height: 35px;
            font-family: 'B Yekan';
            border: none;
            background-color: transparent;
            border: solid 1px black;
            color: black;
            outline: none;
            transition: all .3s;
        }
        #search_admin:hover{
            color: antiquewhite;
            border-color: antiquewhite;
        }
        #add_singer{
            margin-top: 5px;
            border: none;
            outline: none;
            height: 40px;
            font-family: 'B Yekan';
            font-size: 15px;
            background-color: transparent;
            border: solid 1px black;
            transition: all .3s;
            color: black;
        }
        #add_singer:hover{
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
        @keyframes rotate {
            0%{transform: rotate(0deg);}
            100%{transform: rotate(360deg);}
        }
    </style>
</head>
<body style="background-color: antiquewhite;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
        <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
        </div>
        <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">خوانندگان</p>
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
            <div class="col-lg-1 col-lg-push-9 col-md-1 col-md-push-9 col-sm-1 col-sm-push-9 col-xs-2 col-xs-push-6 text-center" style="height: 50px;padding: 0px;">
                <img id="add_icon" src="../../static/images/plus.png" alt="not found" style="width: 30px;height: 30px;margin-top: 10px;">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;padding: 0px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">حذف</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نمایش کامل</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">دسته بندی</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نام</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">عکس</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                <?php
                    if (isset($singer) && $singer != false){
                        foreach ($singer as $val):
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: white;padding: 0px;margin-top: 5px;margin-bottom: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                        <a href="?delete=<?php echo $val['id'];?>" style="color: red;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">حذف</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                        <p style="color: green;font-family: 'B Yekan';font-size: 15px;line-height: 60px;cursor: pointer" href="<?php echo $val['id'];?>" class="show">نمایش کامل</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['category'];?></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 15px;line-height: 60px;"><?php echo $val['name'];?></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                        <img src="<?php echo $val['img'];?>" style="height: 60px;width: 200px;border-radius: 50%;">
                    </div>
                </div>

                <?php
                        endforeach;
                    }else {
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding:0px;padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #ff646b;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top: 20px;padding-bottom: 20px;">
                            <p style="font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">خواننده ای یافت نشد</p>
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
                            <option value="name" style="direction: rtl;">نام</option>
                            <option value="category" style="direction: rtl;">دسته بندی</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding:0px;">
                        <p style="line-height: 50px;font-family: 'B Yekan';color: black;direction: rtl;">جستجو بر اساس : </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 10px;padding-top: 10px;padding-bottom: 10px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="text_search">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" placeholder="جستجو ..." style="height: 35px;font-family: 'B Yekan';color: black;border: none;background-color: antiquewhite;direction: rtl;" name="search_text">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="category_search">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                            <select  id="search_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" name="search_category">
                               <?php
                                    if (isset($category) && $category != false){
                                        foreach ($category as $val):
                               ?>
                                <option value="<?php echo $val['persian_name'];?>" style="direction: rtl;"><?php echo $val['persian_name'];?></option>
                                <?php
                                        endforeach;
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="submit" value="جستجو" id="search_admin" name="search_singer">
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;overflow-y: scroll;" id="add_div">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;margin-top: 50px;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 40px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;" id="close_add_div">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;border-bottom: solid 1px antiquewhite;">
                <p style="line-height: 50px;font-family: 'B Yekan';color: antiquewhite;font-size: 18px;">اضافه کردن خواننده</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="نام" id="name">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                            <select class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;margin-top: 10px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" id="category">

                                <?php
                                    if (isset($category) && $category != false){
                                        foreach ($category as $val):
                                ?>
                                <option value="<?php echo $val['persian_name'];?>"><?php echo $val['persian_name'];?></option>

                                <?php
                                        endforeach;
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;line-height: 50px;color: antiquewhite;">دسته بندی :</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 200px;background-color: transparent;border:none;border: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;margin-top: 20px;margin-bottom: 20px;" placeholder="درباره خواننده ..." id="about"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;margin-top: 10px;margin-bottom: 10px;" placeholder="آدرس تصویر" id="img">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input type="submit" value="افزودن" id="add_singer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="show_detail_div" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position:fixed;top: 0px;display: none;overflow: scroll;">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center example" style="height: auto;background-color: #1c2a39;margin-top: 50px;padding-top: 20px;margin-bottom: 50px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 30px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;cursor: pointer;" id="close_detail">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                    <p style="direction: rtl;font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">تعداد آهنگ های موجود :<span id="song_number" style="padding: 10px;background-color: #0f71ff;color: white;border-radius: 50%;margin-right: 10px;">14</span></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: antiquewhite;padding-top: 10px;padding-bottom: 10px;">
                    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: black;color: antiquewhite;font-family: 'B Yekan';line-height: 50px;font-size: 15px;padding: 0px;">درباره ی خواننده</p>
                    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="direction: rtl;font-family: 'B Yekan';background-color: black;color: antiquewhite;padding: 10px;font-size: 13px;" id="text_show"></p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;" id="load_div">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: auto;margin-top: 20%;padding-top: 50px;padding-bottom: 50px;">
            <img src="../../static/images/load.gif" alt="not found" style="height: 100px;width: 100px;">
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;" id="success_add_category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #13cb13;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">خواننده جدید اضافه شد</p>
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
</body>
</html>