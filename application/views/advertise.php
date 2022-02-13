<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تبلیغات</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <script>
        $(document).ready(function () {
            var heightt=$(window).height()
            $("#search_div").css('height',heightt)
            $("#add_div").css('height',heightt)
            $("#edit_div").css('height',heightt)
            $("#load_div").css('height',heightt)
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

            $("#close_edit_div").click(function () {
                $("#edit_div").hide('blind')
            })
            var i=$("#search_item").val()
            $("#"+i+"_div").show()
            $("#search_item").change(function () {
                $("#rate_div").hide()
                $("#page_div").hide()
                $("#date_div").hide()
                var i=$("#search_item").val()
                $("#"+i+"_div").show('blind')
            })

            $("#add_advertise").click(function () {
                $("#load_div").show()
                $("#add_div").hide()
                var title=$("#title").val()
                var url=$("#url").val()
                var img=$("#img").val()
                var status=$("#status_advertise").val()

                $.ajax({
                    type: 'POST',
                    data: {'title':title,'url':url,'img':img,'status':status},
                    url:'../../ajax/addadvertise/',
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


            var id;

            $(".edit").click(function () {
                $("#load_div").show()
                id = $(this).attr("href")
                $.ajax({
                    type:'POST',
                    url:'../../ajax/getadvertise/',
                    data:{'id':id},
                    success:function (response) {
                        $("#load_div").hide()
                        $("#edit_div").show('slide')
                        if (response){
                            var s=response.split("*")
                            var title=s[0]
                            var url=s[1]
                            var img=s[2]
                            var status=s[3]
                            $("#status_advertise_edit").val(status)
                            $("#title_edit").val(title)
                            $("#img_edit").val(img)
                            $("#url_edit").val(url)
                        }else{
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                            }, 2000);
                        }

                    }
                })
            })

            $("#edit_advertise").click(function () {
                $("#load_div").show()
                $("#edit_div").hide()
                var title=$("#title_edit").val()
                var url=$("#url_edit").val()
                var img=$("#img_edit").val()
                var status=$("#status_advertise_edit").val()

                $.ajax({
                    type: 'POST',
                    data: {'title':title,'url':url,'img':img,'status':status,'id':id},
                    url:'../../ajax/editadvertise/',
                    success:function (response) {
                        $("#load_div").hide()
                        if (response){
                            $("#success_edit_category").animate({height:60},300);
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
        #close_edit_div:hover{
            cursor: pointer;
        }
        #close_add_div:hover{
            cursor: pointer;
        }

        #add_icon:hover{
            cursor: pointer;
            animation-name: rotate;
            animation-duration: .5s;
            animation-timing-function: ease-out;
        }
        #add_advertise{
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
        #add_advertise:hover{
            color: antiquewhite;
            border-color: antiquewhite;
        }

        #edit_advertise{
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
        #edit_advertise:hover{
            color: antiquewhite;
            border-color: antiquewhite;
        }

        .item_add_advertise{
            height: 50px;
            margin-top: 10px;
            margin-bottom: 10px;
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
        #logout_div,#home_div{
            height: 40px;
            background-color: antiquewhite;
            margin-top: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
            padding: 0px;
            border-radius: 10px 0px 10px 0px;
        }
        .edit_advertise:hover{
            cursor: pointer;
        }
    </style>
</head>
<body style="background-color: antiquewhite">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
        <div class="col-lg-1 col-lg-push-0 col-md-2 col-md-push-0 col-sm-2 col-sm-push-0 col-xs-3 col-xs-push-0 text-center" id="logout_div">
            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="../logout/" id="logout">خروج</a>
        </div>
        <div class="col-lg-1 col-lg-push-5 col-md-3 col-md-push-3 col-sm-3 col-sm-push-3 col-xs-3 col-xs-push-2 text-center" style="height: 40px;margin-top: 10px;padding: 0px;">
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="admin_logo">تبلیغات</p>
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
                <img id="add_icon" src="../../static/images/plus.png" alt="not found" style="width: 30px;height: 30px;margin-top: 10px;">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;padding: 0px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #1c2a39;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">حذف</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">ویرایش</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">وضعیت</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">آدرس</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">عنوان</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تصویر</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;border-bottom: solid 1px antiquewhite;">
                    <p style="color: antiquewhite;font-family: 'B Yekan';font-size: 15px;line-height: 60px;">تاریخ</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 10px;padding-bottom: 10px;">
                <?php
                    if (isset($advertise) && $advertise != false){
                        foreach ($advertise as $val):
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: white;padding: 0px;margin-top: 5px;margin-bottom: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <a href="?delete=<?php echo $val['id'];?>" style="color: red;font-family: 'B Yekan';font-size: 12px;line-height: 60px;text-decoration: none;">حذف</a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <p class="edit" href="<?php echo $val['id'];?>" style="color: forestgreen;font-family: 'B Yekan';font-size: 12px;line-height: 60px;text-decoration: none;cursor: pointer;">ویرایش</p>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="height: 60px;padding: 0px;">
                        <a href="?<?php if ($val['status'] == 'show'){echo 'hide';}else{echo 'show';}?>=<?php echo $val['id'];?>" style="color: lightgray;font-family: 'B Yekan';font-size: 12px;line-height: 60px;text-decoration: none;"><?php if ($val['status'] == 'show'){echo 'مخفی کردن';}else{echo 'نمایش دادن';}?></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['url'];?></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
                        <p style="color: black;font-family: 'B Yekan';font-size: 12px;line-height: 60px;"><?php echo $val['title'];?></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center" style="height: 60px;padding: 0px;">
                        <img src="<?php echo $val['img'];?>" alt="not found" style="height: 60px;width: 200px;">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 60px;padding: 0px;">
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
                            <p style="font-family: 'B Yekan';font-size: 20px;color: antiquewhite;">تبلیغی یافت نشد</p>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;" id="add_div">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;margin-top: 50px;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 40px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;" id="close_add_div">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;border-bottom: solid 1px antiquewhite;">
                <p style="line-height: 50px;font-family: 'B Yekan';color: antiquewhite;font-size: 18px;">اضافه کردن تبلیغات</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="عنوان تبلیغ" id="title">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="آدرس تبلیغ" id="url">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="آدرس عکس" id="img">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                            <select class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;margin-top: 10px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" id="status_advertise">
                                <option value="show">نمایش دادن</option>
                                <option value="hide">مخفی کردن</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;line-height: 50px;color: antiquewhite;">وضعیت :</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input type="submit" value="افزودن" id="add_advertise" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;display: none;" id="edit_div">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: #1c2a39;margin-top: 50px;padding-top: 20px;padding-bottom: 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 40px;padding: 0px;">
                <img src="../../static/images/close.png" alt="not found" style="height: 30px;width: 30px;margin-top: -10px;" id="close_edit_div">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;border-bottom: solid 1px antiquewhite;">
                <p style="line-height: 50px;font-family: 'B Yekan';color: antiquewhite;font-size: 18px;">ویرایش کردن تبلیغات</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="عنوان تبلیغ" id="title_edit">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="آدرس تبلیغ" id="url_edit">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" type="text" style="height: 40px;background-color: transparent;border:none;border-bottom: solid 1px antiquewhite;font-family: 'B Yekan';outline: none;color: antiquewhite;font-size: 15px;" placeholder="آدرس عکس" id="img_edit">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8 text-center" style="height: 50px;">
                            <select class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: antiquewhite;height: 35px;border: none;outline: none;font-family: 'B Yekan';text-align: center; text-align-last: center;margin-top: 10px;background-image: none;-webkit-appearance: none;border: none; text-align: center;text-align-last: center;horiz-align: center;-ms-text-combine-horizontal: none;" id="status_advertise_edit">
                                <option value="show">نمایش دادن</option>
                                <option value="hide">مخفی کردن</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;">
                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;line-height: 50px;color: antiquewhite;">وضعیت :</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_add_advertise">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <input type="submit" value="ویرایش" id="edit_advertise" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
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
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">تبلیغ جدید اضافه شد</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;" id="success_edit_category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #13cb13;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">تبلیغ مورد نظر ویرایش شد</p>
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
