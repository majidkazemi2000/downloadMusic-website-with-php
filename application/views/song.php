<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>آهنگ ها</title>

    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script src="../../static/js/kamadatepicker.min.js"></script>
    <link rel="stylesheet" href="../../static/css/kamadatepicker.min.css">
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script>
        $(document).ready(function () {
            var heightt=$(window).height()
            $("#search_div").css('height',heightt)
            $("#show_detail_div").css('height',heightt)
            $("#load_div").css('height',heightt)
            $("#add_div").css('height',heightt)

            $("#add_icon").click(function () {
                $("#add_div").show('fade')
            })

            $("#close_add_div").click(function () {
                $("#add_div").hide('blind')
            })

            $("#search_icon").click(function () {
                $("#search_div").show('slide')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('blind')
            })
            $("#close_detail").click(function () {
                $("#show_detail_div").hide('blind')
            })

            var s=$("#search_item").val()
            if(s == "singer" || s == "name"){
                $("#text_search").show()
            }else{
                $("#"+s+"_search").show()
            }
            $("#search_item").change(function () {
                $("#text_search").hide()
                $("#status_search").hide()
                $("#date_search").hide()
                var i=$("#search_item").val()
                if(i == "singer" || i == "name"){
                    $("#text_search").show('blind')
                }else{
                    $("#"+i+"_search").show('blind')
                }
            })

            $(".show_detail").click(function () {
                $("#load_div").show()
                var id = $(this).attr("href")
                $.ajax({
                    type:'POST',
                    url:'../../ajax/getsong/',
                    data:{'id':id},
                    success:function (response) {
                        $("#load_div").hide()
                        if (response != false){
                            $("#show_detail_div").show('fade')
                            var s=response.split("%")
                            var number=s[0];
                            var txt=s[1];
                            var ana=s[2];
                            var img=s[3];
                            $("#song_number").text(id)
                            $("#text_show").text(txt)
                            $("#analyze_text_show").text(ana)
                            $("#img_show").attr("src",img)

                        }else{
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                            }, 2000);
                        }
                    }


                })

            })

            $("#add_song").click(function () {
                //$("#load_div").show()
                //$("#add_div").hide()
                var name=$("#name").val()
                var category=$("#category").val()
                var url=$("#url").val()
                var img=$("#img").val()
                var singer=$("#singer").val()
                var status=$("#status").val()
                var text=$("#text_err").val()
                var analyze_text=$("#analyze_text").val()


                $.ajax({
                    type: 'POST',
                    data: {'name':name,'category':category,'url':url,'img':img,'singer':singer,'status':status,'text':text,'analyze_text':analyze_text},
                    url:'../../ajax/addsong/',
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
        #add_song{
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
        #add_song:hover{
            color: antiquewhite;
            border-color: antiquewhite;
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
        #close_search_div:hover{
            cursor: pointer;
        }
        #search_news{
            height: 35px;
            font-family: 'B Yekan';
            border: none;
            background-color: transparent;
            border: solid 1px black;
            color: black;
            outline: none;
            transition: all .3s;
        }
        #search_news:hover{
            color: antiquewhite;
            border-color: antiquewhite;
        }
        #close_show_icon:hover{
            cursor: pointer;
        }
        #logout_div,#home_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
        }
        .example::-webkit-scrollbar {
            display: none;
        }

        .example {
            -ms-overflow-style: none;
        }
        .show_detail:hover{
            cursor: pointer;
        }
        #add_icon:hover{
            cursor: pointer;
        }
        #add_icon:hover{
            animation-name: rotate;
            animation-duration: .5s;
            animation-timing-function: ease-out;
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
<body style="background-color: antiquewhite">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
        <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
        </div>
        <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">اخبار</p>
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
                <img id="add_icon" src="../../static/images/plus.png" alt="not found" style="width: 30px;height: 30px;margin-top: 10px;cursor: pointer;">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;padding: 0px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">حذف</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نمایش</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">وضعیت</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">آدرس</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تعداد بازدید</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تعداد نظرات</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تعداد لایک ها</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">دسته بندی</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">خواننده</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">نام</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تاریخ</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                <?php
                    if (isset($song) && $song != false){
                        foreach ($song as $val):
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: white;padding: 0px;margin-top: 5px;margin-bottom: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);padding-top: 5px;">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: auto;padding: 0px;">
                        <a href="?delete=<?php echo $val['id'];?>" style="color: red;font-family: 'B Yekan';font-size: 12px;line-height: 60px;text-decoration: none;">حذف</a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p href="<?php echo $val['id'];?>" style="color: green;font-family: 'B Yekan';font-size: 12px;line-height: 60px;" class="show_detail">نمایش</p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <a href="?<?php if ($val['status'] == 'show'){echo 'hide';}else{echo 'show';}?>=<?php echo $val['id'];?>" style="color: lightgray;font-family: 'B Yekan';font-size: 12px;line-height: 60px;text-decoration: none;"><?php if ($val['status'] == 'show'){echo 'مخفی کردن';}else{echo 'نمایش دادن';}?></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 8px;line-height: 30px;"><?php echo $val['url'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['visit_count'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['comment_count'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: auto;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;direction: rtl;"><?php echo $val['like_count'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['category'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['singer'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['name'];?></p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['date'];?></p>
                    </div>
                </div>
                <?php
                        endforeach;
                    }else{
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding:0px;padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #ff646b;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top: 20px;padding-bottom: 20px;">
                            <p style="font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">آهنگی یافت نشد</p>
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
                        <select  id="search_item" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none; " name="search_item">
                            <option value="name">نام</option>
                            <option value="status">وضعیت</option>
                            <option value="singer">خواننده</option>
                            <option value="date">تاریخ</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding:0px;">
                        <p style="line-height: 50px;font-family: 'B Yekan';color: black;direction: rtl;color: antiquewhite;">جستجو بر اساس : </p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="status_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-sm-offset-3 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <select name="search_status" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;">
                            <option value="hide">مخفی</option>
                            <option value="show">نمایش</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="date_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-sm-offset-3 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="font-family: 'B Yekan';font-size: 15px;color: black;border: none;outline: none;height: 35px;background-color: antiquewhite" placeholder="تاریخ" id="date2" name="search_date">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;display: none;" id="text_search">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" placeholder="متن ..." style="height: 35px;font-family: 'B Yekan';color: black;border: none;background-color: antiquewhite;direction: rtl;" name="search_text">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 text-center" style="height: 40px;padding: 0px;margin-top: 5px;">
                        <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="submit" value="جستجو" id="search_news" name="search_song">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="show_detail_div" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position:fixed;top: 0px;display: none;overflow: scroll;">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center example" style="height: auto;background-color: #1c2a39;margin-top: 10px;padding-top: 20px;margin-bottom: 50px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 30px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;cursor: pointer;" id="close_detail">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                    <p style="direction: rtl;font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">آهنگ شماره <span id="song_number">14</span></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: antiquewhite;padding-top: 10px;padding-bottom: 10px;">
                    <p style="direction: rtl;font-family: 'B Yekan';" id="text_show"></p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: antiquewhite;padding-top: 10px;padding-bottom: 10px;margin-top: 10px;">
                    <p style="direction: rtl;font-family: 'B Yekan';" id="analyze_text_show"></p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;margin-top: 10px;">
                        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" src="../../static/images/not-found.png" alt="not found" id="img_show">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;overflow-y: scroll;display: none;" id="add_div">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 40px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;cursor:pointer;" id="close_add_div">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;border-bottom: solid 1px antiquewhite;">
                <p style="line-height: 50px;font-family: 'B Yekan';color: antiquewhite;font-size: 18px;">اضافه کردن آهنگ</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;direction: rtl;" placeholder="نام آهنگ" id="name">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;direction: rtl;" placeholder="آدرس تصویر" id="img">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;direction: rtl;" placeholder="آدرس آهنگ" id="url">
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
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                            <select class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;margin-top: 10px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" id="singer">
                                <?php
                                if (isset($singer) && $singer != false){
                                    foreach ($singer as $val):
                                        ?>
                                        <option value="<?php echo $val['name'];?>"><?php echo $val['name'];?></option>
                                    <?php
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;line-height: 50px;color: antiquewhite;">خواننده :</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                            <select class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;margin-top: 10px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" id="status">
                                <option value="show">نمایش دادن</option>
                                <option value="hide">مخفی کردن</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;line-height: 50px;color: antiquewhite;">وضعیت :</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 20px;margin-top: 20px;">متن آهنگ</p>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;background-color: lightcyan;border:none;border: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;direction: rtl;margin-top: 20px;margin-bottom: 20px;" placeholder="متن آهنگ" id="text_err"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 20px;margin-top: 20px;">تحلیل آهنگ</p>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;background-color: lightcyan;border:none;border: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;direction: rtl;margin-top: 20px;margin-bottom: 20px;" placeholder="تحلیل آهنگ" id="analyze_text"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_category">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input type="submit" value="افزودن" id="add_song" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>
                    </div>
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
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">آهنگ جدید اضافه شد</p>
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
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>
</html>
