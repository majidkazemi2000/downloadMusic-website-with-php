<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>دانلود موزیک</title>
    <link rel="icon" href="../../static/images/title_icon.png">
    <script src="../../static/js/jquery.js"></script>
    <script src="../../static/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../static/css/jquery-ui.min.css">
    <script src="../../static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../static/css/maudio.css">
    <script src="../../static/js/maudio.js"></script>
    <style>
        *{
            user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            outline: none;
        }
        .btn1{
            position: relative;
            font-family: "B Nazanin";
            display: block;
            color: black;
            background-color: #00CCFF;
            text-decoration: none;
            outline: none;
            font-size: 14px;
            overflow: hidden;
            transition: all 1s ease;
            z-index: 1;
            border:solid 1px black;
        }
        .btn1::before{
            background-color: white;
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            transition: all .3s ease;
            width: 0;
            height: 100%;
            z-index: -1;
        }
        .btn1:hover::before{
            width: 100%;
        }
        .btn1:hover{
            color: black;
            border-color: white;
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
        #view_icon:hover{
            cursor: pointer;
        }
        #new_icon:hover{
            cursor: pointer;
        }
        #popular_icon:hover{
            cursor: pointer;
        }
        .list_item{
            background-color: lightgray;
            height: 220px;
            margin-top: 15px;
            padding: 0px;
            position: relative;
            transition: all .4s;
            overflow: hidden;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
        }
        .show_list{
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width:100%;
            background-color: rgba(255,255,255,.5);
            z-index: 100000;
            transition: all .4s;
        }
        .img_list{
            width: 100%;
            height: 100%;
            transition: all .4s;
        }
        li:hover .show_list{
            display: block;
            animation-name: show;
            animation-timing-function: linear;
            animation-duration: .2s;
        }
        li:hover .img_list{
            transform: scale(1.1,1.1);
        }
        .list_title,.list_singer{
            line-height: 40px;
            font-family: 'B Yekan';
            font-size: 15px;
            outline: none;
            color: black;
        }
        .list_link{
            line-height: 40px;
            font-family: 'B Yekan';
            font-size: 15px;
            outline: none;
            text-decoration: none;
            color: #00CCFF;
            transition: all .4s;
        }
        .list_link:hover{
            text-decoration: none;
            color: black;
            transform: scale(1.1,1.1);
        }
        .select_option{
            color: white;
            font-family: "B Yekan";
            font-size: 13px;
            line-height: 50px;
        }
        .item_side{
            text-decoration: none;
            color: black;
            transition: all .2s;
            padding: 0px;
        }
        .item_side:hover{
            text-decoration: none;
        }
        .item_side_main{
            height: auto;
            padding: 0px;
            padding-top: 10px;
            padding-bottom: 5px;
            background-color: white;
            margin-top: 2px;
            margin-bottom: 2px;
            border-radius: 5px;
            transition: all .4s;
            position: relative;
        }
        .item_side_main:hover{
            background-color: #00CCFF;
        }
        .item_side_main:hover p{
            color: white;
        }
        .category{
            font-family: "B Yekan";
            font-size: 15px;
            color: black;
            margin-top: 0px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .category:hover{
            text-decoration: none;
            color: white;
        }
        .download{
            padding: 0px;
            line-height: 40px;
            background-color: white;
            font-family: 'B Yekan';
            color: white;
            text-decoration: none;
            background-color: #00CCFF;
            border-radius: 5px;
            transition: all .4s;
        }
        .download:hover{
            background-color: white;
            color: #00CCFF;
            text-decoration: none;
        }
        #telegram_div,#instagram_div{
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            margin-top: 15px;
            transition: all .2s;
        }
        #telegram_div:hover {
            background-color: #47c5ff;
        }
        #instagram_div:hover{
            background: linear-gradient(to top,#ff6b78,#ff664d,#ff37ba);
        }
        #telegram_img{
            transition: all .2s;
        }
        #instagram_img{
            transition: all .2s;
        }
        #search_icon:hover{
            cursor: pointer;
        }
        #menu_icon:hover{
            cursor: pointer;
        }
        .menu_item{
            height: 50px;
            background-color: black;
            color: white;
            margin-top: 5px;
            margin-bottom: 5px;
            font-family: 'B Yekan';
            line-height: 50px;
            text-decoration: none;
            transition: all .3s;
        }
        .menu_item:hover{
            background-color: lightgray;
            color: black;
            text-decoration: none;
        }
        #analyis_icon:hover{
            cursor: pointer;
        }
        #text_icon:hover{
            cursor: pointer;
        }
        #download_icon:hover{
            cursor: pointer;
        }
        #like_button{
            border: solid 2px #d00941;
            text-decoration: none;
            height: 50px;
            border-radius: 5px;
            transition: all .3s;
            background-color: transparent;
        }
        .name:hover{
            background-color: #00CCFF;
            cursor: zoom-in;
        }
        #like_button img{
            width: 30px;
            height: 30px;
            padding: 0px;
            margin-top: 10px;
        }
        #like_button p{
            height: 50px;
            direction: rtl;
            line-height: 50px;
            font-family: 'B Yekan';
            color: #ad0123;
            padding: 0px;
            transition: all .3s;
        }
        #like_button:hover p{
            color: black;
        }
        #like_button:hover img{
            animation-duration: .5s;
            animation-name: bounce;
            animation-timing-function: ease-out;
        }
        #download_button{
            border: solid 2px #00CCFF;
            background-color: transparent;
            text-decoration: none;
            height: 50px;
            border-radius: 5px;
        }
        #download_button p{
            height: 50px;
            direction: rtl;
            line-height: 50px;
            font-family: 'B Yekan';
            color: #00CCFF;
            padding: 0px;
            transition: all .3s;
        }
        #download_button img{
            width: 30px;
            height: 25px;
            padding: 0px;
            margin-top: 12px;
            transition: all .3s;
        }
        #download_button:hover img{
            transform: rotate(360deg);
        }
        #download_button:hover p{
            color: black;
        }
        .anim{
            animation-name: add;
            animation-timing-function: ease;
            animation-duration: 700ms;
        }
        .animlike{
            animation-name: addd;
            animation-timing-function: ease;
            animation-duration: 700ms;
        }
        @keyframes add {
            0%{transform: scale(.5,.5);}
            50%{transform: scale(1.6,1.6);}
            100%{transform: scale(1,1);}
        }

        @keyframes addd {
            0%{transform: scale(.4,.4);}
            50%{transform: scale(1.2,1.2);}
            100%{transform: scale(1,1);}
        }

        @keyframes bounce {
            0%{
                transform: scale(.8,.8);
            }
            25%{
                transform: scale(.6,.6);
            }
            50%{
                transform: scale(.5,.5);
            }
            75%{
                transform: scale(1,1);
            }
            100%{
                transform: scale(1.2,1.2);
            }
        }
        @keyframes show {
            0%{
                transform: scale(.6,.6);
            }
            50%{
                transform: scale(.8,.8);
            }
            100%{
                transform: scale(1,1);
            }
        }
    </style>
</head>
<body style="margin: 0px;padding: 0px;background: linear-gradient(#ecf0f1,#bdc3c7,#95a5a6);">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding: 0px;">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-7 text-center" style="height: 60px;">
            <a href="//localhost/farsmusic/index/" style="color: black;">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-center" style="padding: 0px;">
                    <img src="../../static/images/title.png" alt="" style="height: 60px;width: 60px;">
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 text-left" style="padding: 0px;">
                    <p style="line-height: 60px;font-family: 'Dast Nevis';font-size: 16px;font-weight: bold;">فارس موزیک</p>
                </div>
            </a>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs text-center" style="height: 60px;"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5 text-center" style="height: 60px;">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right" style="height: 60px;">
                <a href="../../favorite/index/">
                    <img src="../../static/images/star(1).png" alt="" style="height: 30px;width: 30px;margin-top: 15px;" title="لیست علاقه مندی ها" id="star">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 60px;">
                <img src="../../static/images/search.png" alt="" style="height: 30px;width: 30px;margin-top: 15px;" title="جستجو" id="search_icon">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 60px;">
                <img src="../../static/images/menu.png" alt="" style="height: 30px;width: 30px;margin-top: 15px;" title="منوی کاربری" id="menu_icon">
            </div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: auto;z-index: 200000;position: absolute;top: 60px;padding: 0px;display: none;" id="menu_div">
        <div class="col-lg-2 col-lg-push-10 col-md-2 col-md-push-10 col-sm-3 col-sm-push-9 col-xs-5 col-xs-push-7 text-center" style="height: auto;background-color: #303952;">
            <a href="../../about/index/" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center menu_item">هنرمندان</a>
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center menu_item" style="cursor:pointer;" id="show_advertise">تبلیغات</p>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-top: 10px;padding-bottom: 10px;">
        <ul style="list-style-type: none;padding: 0px;">
            <?php
            if (isset($header_song) && $header_song != false){
                foreach ($header_song as $val):
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 250px;">
                        <div>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center list_item" style="background-image: url('static/images/not-found.png');background-size: cover;background-repeat: no-repeat;background-position: center;border-radius: 50px 0px 50px 0px;">
                                <img src="<?php echo $val['img'];?>" class="img_list">
                                <div class="show_list">
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="height: 40px;background-color: #00CCFF;margin-top: 40px;border-radius: 50px 0px 0px 0px;">
                                        <p class="list_title"><?php echo $val['name'];?></p>
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="height: 40px;background-color: #00CCFF;border-radius: 0px 0px 50px 0px;">
                                        <p class="list_singer"><?php echo $val['singer'];?></p>
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="height: 40px;margin-top: 20px;background: lightgray;">
                                        <a class="list_link" href="../../track/index/<?php echo $val['id'];?>">دانلود آهنگ</a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>

                <?php
                endforeach;
            }else{

            }
            ?>
        </ul>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-center" style="height: auto;padding: 0px;padding-top: 40px;padding-bottom: 80px;margin-bottom: 100px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: lightgray;padding: 0px;">
                <div id="view_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                    <p class="select_option">پربازدیدترین ها</p>
                </div>
                <div id="popular_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                    <p class="select_option">محبوبترین ها</p>
                </div>
                <div id="new_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: black;">
                    <p class="select_option">جدیدترین ها</p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 5px;padding-bottom: 5px;" id="new_div">
                    <?php
                    if (isset($new_song) && $new_song != false){
                        foreach ($new_song as $val):
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <img src="../../static/images/new.png" style="width: 35px;height: 33px;position: absolute;top: 0px;right: 0px;z-index: 100000;">
                                <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                    </div>
                                </a>
                            </div>
                        <?php
                        endforeach;
                    }else{
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                    <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ جدیدی یافت نشد</p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 5px;padding-bottom: 5px;display:none;" id="popular_div">
                    <?php
                    if (isset($like_song) && $like_song != false){
                        foreach ($like_song as $val):
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center" style="padding: 0px;margin-top: -2px;">
                                        <p style="display: inline;font-size: 12px;font-family: 'B Yekan';color: black;"><?php echo $val['like_count'];?></p>
                                        <img src="../../static/images/heart.png" style="width: 15px;height: 15px;display: inline;margin-top: 3px;">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                    </div>
                                </a>
                            </div>

                        <?php
                        endforeach;
                    }else{
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                    <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ پرطرفداری وجود ندارد</p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 5px;padding-bottom: 5px;display:none;" id="view_div">
                    <?php
                    if (isset($visit_song) && $visit_song != false){
                        foreach ($visit_song as $val):
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center" style="padding: 0px;margin-top: -2px;">
                                        <p style="display: inline;font-size: 12px;font-family: 'B Yekan';color: black;"><?php echo $val['visit_count'];?></p>
                                        <img src="../../static/images/view.png" style="width: 15px;height: 15px;display: inline;margin-top: 3px;">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                    </div>
                                </a>
                            </div>
                        <?php
                        endforeach;
                    }else{
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                    <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ پربازدیدی وجود ندارد</p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 30px;padding-bottom: 30px;margin-top: 30px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;box-shadow: 0 8px 16px 0px rgba(0,0,0,1);margin-bottom: 10px;margin-top: 10px;background:linear-gradient(gray,darkgray);">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;position: relative;margin-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: auto;padding: 0px;padding-left: 20px;">
                        <img src="../../static/images/event.png" style="width: 20px;height: 20px;display: inline;margin-top: -2px;">
                        <p style="font-family: 'B Yekan';font-size: 13px;line-height: 50px;color: black;display: inline;margin-left: 5px;"><?php if (isset($song) && $song != false){echo $song['date'];}?></p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: auto;margin-top: 10px;">
                        <p style="line-height: 50px;font-family: 'B Yekan';color: black;font-size: 20px;">دانلود آهنگ <span><?php if (isset($song) && $song != false){echo $song['name'];}?></span> / <span><?php if (isset($song) && $song != false){echo $song['singer'];}?></span> <span>( <?php if (isset($song) && $song != false){echo $song['category'];}?> )</span></p>
                    </div>

                    <p style="display: none" id="user_ip"><?php echo $_SERVER['REMOTE_ADDR'];?></p>
                    <div class="text-center favorite" style="width: 50px;height: 50px;position: absolute;top: 15px;right: 20px;z-index: 20000;border-radius: 5px;cursor: pointer;" href="<?php if (isset($song) && $song != false){echo $song['id'];}?>">
                        <img src="../../static/images/star(1).png" style="height: 40px;width: 40px;">
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8 text-center" style="height: 40px;padding: 0px;background-color: lightgray;border-radius: 0px 0px 20px 0px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 40px;padding: 0px;">
                            <p style="display: inline;font-family: 'B Yekan';color: black;line-height: 40px;"><?php if (isset($song) && $song != false){echo $song['comment_count'];}?></p>
                            <img src="../../static/images/comment1.png" style="height: 20px;width: 20px;display: inline;">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 40px;padding: 0px;">
                            <p style="display: inline;font-family: 'B Yekan';color: black;line-height: 40px;"><?php if (isset($song) && $song != false){echo $song['like_count'];}?></p>
                            <img src="../../static/images/heart1.png" style="height: 20px;width: 20px;display: inline;">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 40px;padding: 0px;">
                            <p style="display: inline;font-family: 'B Yekan';color: black;line-height: 40px;"><?php if (isset($song) && $song != false){echo $song['visit_count'];}?></p>
                            <img src="../../static/images/eye1.png" style="height: 20px;width: 20px;display: inline;">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top: 20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="border-bottom: solid 2px black;"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin-bottom: 20px;">
                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 text-center" style="height: 300px;padding: 0px;">
                        <img src="<?php if (isset($song) && $song != false){echo $song['img'];}?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 300px;width:300px;padding: 0px;border-radius: 50%;">
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-6 hidden-xs text-center" style="height: auto;margin-top: 0px;padding: 0px;padding-top: 10px;padding-bottom: 10px;margin-top: 90px;">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: 50px;margin-top: 5px;margin-bottom: 5px;padding: 0px;">
                            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center btn1" href="<?php if (isset($song) && $song != false){echo $song['url'];}?>" id="download_button" style="padding: 0px;padding-left: 5px;">
                                <img src="../../static/images/download_2.png" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right" style="">
                                <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center" style="padding: 0px;">دانلود آهنگ</p>
                            </a>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: 50px;margin-top: 5px;margin-bottom: 5px;padding: 0px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center likesong btn1" href="<?php if (isset($song) && $song != false){echo $song['id'];}?>" id="like_button" style="cursor: pointer;padding: 0px;padding-left: 5px;">
                                <img src="../../static/images/heart_2.png" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-left">
                                <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center" style="padding: 0px;">پسندیدن</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-lg-offset-2 col-sm-10 col-xs-12 text-center" style="height: auto;padding: 0px;border-right: solid 2px black;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;padding: 0px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;"><?php echo $song['date'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;">تاریخ انتشار</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;padding: 0px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;"><?php echo $song['singer'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;">نام خواننده</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;padding: 0px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;"><?php echo $song['name'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;">نام اثر</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;padding: 0px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;"><?php echo $song['category'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center" style="height: 50px;">
                                <p style="line-height: 50px;font-family: 'B Yekan';color: black;">دسته بندی</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding: 0px;margin-top: 20px;">
                    <div id="analyis_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 60px;padding: 0px;">
                        <img class="hidden-xs" src="../../static/images/analysis.png" style="width: 30px;height: 30px;display: inline;">
                        <p class="select_option" style="line-height: 60px;display: inline;margin-left: 5px;color: black;">بررسی آهنگ</p>
                    </div>
                    <div id="text_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 60px;padding: 0px;">
                        <img class="hidden-xs" src="../../static/images/text.png" style="width: 30px;height: 30px;display: inline;">
                        <p class="select_option" style="line-height: 60px;display: inline;margin-left: 5px;color: black;">متن آهنگ</p>
                    </div>
                    <div id="download_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 60px;padding: 0px;background-color: lightgray;">
                        <img class="hidden-xs" src="../../static/images/download.png" style="width: 30px;height: 30px;display: inline;">
                        <p class="select_option" style="line-height: 60px;display: inline;margin-left: 5px;color: black;">پخش</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 40px;padding-bottom: 40px;" id="download_div">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="height: 50px;background:linear-gradient(lightgray,darkgray);">
                        <audio src="<?php if (isset($song) && $song != false){echo $song['url'];}?>" controls="controls" style="height: 50px;"></audio>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 30px;padding-bottom: 30px;display: none;" id="text_div">
                    <p style="direction: rtl;font-family: 'B Yekan';color: black;font-size: 15px;"><?php if (isset($song) && $song != false){echo $song['text'];}?></p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 30px;padding-bottom: 30px;display: none;" id="analyis_div">
                    <p style="direction: rtl;font-family: 'B Yekan';color: black;font-size: 15px;"><?php if (isset($song) && $song != false){echo $song['analyze_text'];}?></p>
                </div>

                <div class="hidden-lg col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 0px;padding: 0px;background: lightgray;padding-top: 10px;padding-bottom: 10px;">
                    <div class="col-lg-5 col-md-6 col-sm-5 col-xs-12 text-center" style="height: auto;margin-top: 5px;margin-bottom: 5px;">
                        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" href="<?php if (isset($song) && $song != false){echo $song['url'];}?>" id="download_button">
                            <img src="../../static/images/download_2.png" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                            <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center">دانلود آهنگ</p>
                        </a>
                    </div>
                    <div class="col-lg-2 hidden-md col-sm-2 hidden-xs text-center" style="height: 50px;"></div>
                    <div class="col-lg-5 col-md-6 col-sm-5 col-xs-12 text-center" style="height: 50px;margin-top: 5px;margin-bottom: 5px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center likesong" href="<?php if (isset($song) && $song != false){echo $song['id'];}?>" id="like_button" style="cursor: pointer;">
                            <img src="../../static/images/heart_2.png" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-left">
                            <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center">پسندیدن</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding:0px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;margin-top: 20px;padding-top: 20px;margin-bottom: 20px;display: <?php if (isset($comment) && $comment == false){echo 'none';}else{echo '';}?>;">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right" style="height: 60px;padding: 0px;">
                            <img src="../../static/images/comment_2.png" style="height: 25px;width: 25px;margin-top: 18px;">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left" style="height: 60px;">
                            <p style="line-height: 60px;font-family: 'B Yekan';font-size: 18px;">دیدگاه کاربران</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="comments_div" style="padding: 0px;background-color: ;height: auto;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;margin-top: 10px;">

                                <?php
                                    if (isset($comment) && $comment != false){
                                        foreach ($comment as $val):
                                ?>

                                <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 5px;margin-bottom: 5px;padding: 0px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 40px;border-radius: 10px 10px 0px 0px;border-bottom: solid 2px black;">
                                        <p class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center" style="direction: rtl;font-family: 'B Yekan';color: black;font-size: 15px;line-height: 40px;"><?php echo $val['date'];?></p>
                                        <div class="col-lg-6 col-md-6 hidden-sm hidden-xs text-center"></div>
                                        <p class="col-lg-3 col-md-3 col-sm-8 col-xs-8 text-center" style="direction: rtl;font-family: 'B Yekan';color: black;font-size: 15px;line-height: 40px;"><?php echo $val['sender'];?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;border-radius: 0px 0px 10px 10px;padding: 0px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding:0px;margin-top: 10px;border-radius: 10px;padding-top: 10px;padding-bottom: 10px;">
                                            <p style="font-family: 'B Yekan';font-size: 15px;direction: rtl;"><?php echo $val['contain'];?></p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding:0px;padding-top: 10px;padding-bottom: 10px;">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center" style="padding-top: 5px;padding-bottom: 5px;border-radius: 5px;">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-right" style="padding: 0px;">
                                                    <img src="../../static/images/delete.png" alt="NOT FOUND!" width="25px" height="25px" class="rate_down" href="<?php echo $val['id'];?>" style="cursor: pointer;">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 text-center" style="">
                                                    <p style="color: black;font-family: 'W_arafat Bold Italic';font-weight: bold;font-size: 15px;" class="rate-<?php echo $val['id'];?>"><?php echo $val['rate'];?></p>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-left" style="padding: 0px;">
                                                    <img src="../../static/images/check.png" alt="NOT FOUND!" width="25px" height="25px" class="rate_up" href="<?php echo $val['id'];?>" style="cursor: pointer;">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs text-center"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                        endforeach;
                                    }else{
                                ?>

                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center" style="height: 60px;background-color: #00CCFF;box-shadow: 0 4px 8px 0 rgba(1,1,1,0.5);margin-bottom: 20px;">
                                    <p style="font-family: 'B Yekan';font-size: 18px;line-height: 60px;color: black;" class="first_comment">اولین نفری باشید که دیدگاه می دهید</p>
                                </div>

                                <?php
                                    }
                                ?>


                                <?php
                                    if (isset($setting) && $setting != false && $setting['comment_sys'] == 'on'){
                                ?>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-top: 20px;padding-bottom: 10px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 40px;">
                                        <p style="line-height: 40px;font-family: 'B Yekan';font-size: 15px;color: black;">افزودن دیدگاه شما</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-bottom: 10px;padding: 0px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-10 col-sm-offset-1 col-xs-12 text-center" style="padding-bottom: 20px;padding-top:20px;border-top: solid 2px black;">
                                                <input id="username" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="نام کاربری" style="direction: rtl;height: 35px;background-color: transparent;margin-top: 10px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
                                                <input id="password" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="password" placeholder="رمز عبور" style="direction: rtl;height: 35px;background-color: transparent;margin-top: 10px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
                                                <input id="contain" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text"  style="direction: rtl;height: 35px;background-color: transparent;margin-top: 10px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;height: 35px;max-lines: 5;outline: none;border-radius: 5px;" placeholder="دیدگاه شما ... (فارسی)">
                                                <button id="send_comment" class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-0 col-xs-8 col-xs-offset-0 text-center btn1" style="margin-top: 10px;font-family: 'B Yekan';font-size: 15px;height: 35px;outline: none;border-radius: 5px;">ارسال دیدگاه</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-top: 40px;padding-bottom: 40px;">
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-bottom: 80px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding: 0px;">
                    <div id="view_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                        <p class="select_option">پربازدیدترین ها</p>
                    </div>
                    <div id="popular_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                        <p class="select_option">محبوبترین ها</p>
                    </div>
                    <div id="new_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: black;">
                        <p class="select_option">جدیدترین ها</p>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 5px;padding-bottom: 5px;" id="new_div1">
                        <?php
                        if (isset($new_song) && $new_song != false){
                            foreach ($new_song as $val):
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                    <img src="../../static/images/new.png" style="width: 35px;height: 33px;position: absolute;top: 0px;right: 0px;z-index: 100000;">
                                    <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                            <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            endforeach;
                        }else{
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ جدیدی یافت نشد</p>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 5px;padding-bottom: 5px;display:none;" id="popular_div1">
                        <?php
                        if (isset($like_song) && $like_song != false){
                            foreach ($like_song as $val):
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                    <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center" style="padding: 0px;margin-top: -2px;">
                                            <p style="display: inline;font-size: 12px;font-family: 'B Yekan';color: black;"><?php echo $val['like_count'];?></p>
                                            <img src="../../static/images/heart.png" style="width: 15px;height: 15px;display: inline;margin-top: 3px;">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-center" style="padding: 0px;">
                                            <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                        </div>
                                    </a>
                                </div>

                            <?php
                            endforeach;
                        }else{
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ پرطرفداری وجود ندارد</p>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding-top: 5px;padding-bottom: 5px;display:none;" id="view_div1">
                        <?php
                        if (isset($visit_song) && $visit_song != false){
                            foreach ($visit_song as $val):
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                    <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center" style="padding: 0px;margin-top: -2px;">
                                            <p style="display: inline;font-size: 12px;font-family: 'B Yekan';color: black;"><?php echo $val['visit_count'];?></p>
                                            <img src="../../static/images/view.png" style="width: 15px;height: 15px;display: inline;margin-top: 3px;">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-center" style="padding: 0px;">
                                            <p style="font-family: 'B Yekan';font-size: 12px;"><?php echo $val['name'];?> -- <?php echo $val['singer'];?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            endforeach;
                        }else{
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding:0px;">
                                <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side" style="padding-top: 10px;padding-bottom: 0px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                                        <p style="font-family: 'B Yekan';font-size: 12px;">آهنگ پربازدیدی وجود ندارد</p>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: lightgray;padding: 0px;border-bottom: solid 2px black;">
                <p class="select_option" style="color: black;">خواننده ها بر اساس نام</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 10px;padding-bottom: 10px;">
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ا">ا</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ب">ب</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="پ">پ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ت">ت</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ث">ث</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ج">ج</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="چ">چ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ح">ح</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="خ">خ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="د">د</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ذ">ذ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ر">ر</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ز">ز</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ژ">ژ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="س">س</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ش">ش</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ص">ص</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ض">ض</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ط">ط</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ظ">ظ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ع">ع</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="غ">غ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ف">ف</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ق">ق</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ک">ک</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="گ">گ</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ل">ل</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="م">م</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ن">ن</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="و">و</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ه">ه</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 text-center" style="height: 20px;background-color: white;padding: 0px;margin-top: 2px;margin-bottom: 2px;border-radius: 5px;">
                    <p style="line-height: 20px;color: black;font-family: 'B Yekan';" class="name" href="ی">ی</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: lightgray;padding: 0px;margin-top: 20px;border-bottom: solid 2px black;">
                <p class="select_option" style="color: black;">دسته بندی ها</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 10px;padding-bottom: 10px;">

                <?php
                if (isset($category) && $category != false){
                    foreach ($category as $val):
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding: 0px;margin-top: 5px;margin-bottom: 5px;">
                            <a href="../../index/?cat=<?php echo $val['persian_name'];?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center category"><?php echo $val['persian_name'];?></a>
                        </div>
                    <?php
                    endforeach;
                }else{
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding: 0px;margin-top: 5px;margin-bottom: 5px;">
                        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center category">دسته بندی وجود ندارد</a>
                    </div>
                    <?php

                }
                ?>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: lightgray;padding: 0px;margin-top: 20px;border-bottom: solid 2px black;">
                <p class="select_option" style="color: black;">سایر آهنگ های این هنرمند</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: black;padding-top: 10px;padding-bottom: 10px;">

               <?php
                    if (isset($same_song) && $same_song != false){
                        foreach ($same_song as $val):
               ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding: 0px;margin-top: 5px;margin-bottom: 5px;padding-top: 5px;padding-bottom: 5px;">
                    <a href="../../track/index/<?php echo $val['id'];?>" class="col-lg-9 col-md-10 col-sm-10 col-xs-10 text-center category"><?php echo $val['name'];?></a>
                    <img src="<?php echo $val['img'];?>" alt="not found" class="col-lg-3 col-md-2 col-sm-2 col-xs-2 text-center" style="height: 40px;width: 40px;padding: 0px;border-radius: 50%;">
                </div>

                <?php
                        endforeach;
                    }else{
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center item_side_main" style="padding: 0px;margin-top: 5px;margin-bottom: 5px;">
                    <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center category">آهنگی وجود ندارد</a>
                </div>
                <?php
                    }
                ?>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding:0px;padding-top: 40px;padding-bottom: 20px;background-image: url('../../static/images/1.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
        <ul style="list-style-type: none;padding: 0px;">
            <?php
            if (isset($advertise) && $advertise != false){
                foreach ($advertise as $val):
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="height: 250px;">
                        <div>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center list_item" style="background-image: url('static/images/not-found.png');background-size: cover;background-repeat: no-repeat;background-position: center;">
                                <img src="<?php echo $val['img'];?>" class="img_list">
                                <div class="show_list">
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="height: 200px;margin-top: 10px;background: ;border: solid 2px black;">
                                        <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center list_link" href="//<?php echo $val['url'];?>" style="padding: 0px;line-height:200px;color: black;"><?php echo $val['title'];?></a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                <?php
                endforeach;
            }else{

                ?>
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" style="height: 250px;">
                    <div>
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center list_item" style="background-image: url('static/images/not-found.png');background-size: cover;background-repeat: no-repeat;background-position: center;">
                            <img src="../static/images/ad.jpg" class="img_list">
                            <div class="show_list">
                                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="height: 200px;margin-top: 10px;background: ;border: solid 2px black;">
                                    <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center list_link" style="padding: 0px;line-height:200px;color: black;">برای ثبت تبلیغات خود با شماره 09305243680 تماس حاصل فرمایید</a>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
                <?php
            }
            ?>
        </ul>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 70px;margin-top: 20px;">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" style="height: 60px;">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 text-right" style="height: 50px;padding: 0px;">
                <div class="text-center" id="telegram_div" style="padding: 0px;">
                    <a href="//<?php if (isset($setting) && $setting != false){echo $setting['telegram_address'];}else{echo '#';}?>">
                        <img src="../../static/images/telegram.png" style="height: 20px;width: 20px;margin-top: 10px;" id="telegram_img">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-6 text-center" style="height: 60px;padding: 0px;">
                <div class="text-center" id="instagram_div">
                    <a href="//<?php if (isset($setting) && $setting != false){echo $setting['instagram_address'];}else{echo '#';}?>">
                        <img src="../../static/images/instagram.png" style="height: 20px;width: 20px;margin-top: 10px;" id="instagram_img">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs text-center" style="height: 60px;"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center" style="height: 60px;padding: 0px;">
            <p style="direction: rtl;font-family: 'B Yekan';font-size: 13px;line-height: 60px;color: black;">طراحی سایت توسط مجید کاظمی ©</p>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;right: 0px;left: 0px;bottom: 0px;z-index: 30000000;display: none;" id="search_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: 40px;margin-top: 20px;">
            <img src="../../static/images/close.png" style="height: 40px;width: 40px;cursor: pointer;" id="close_search_div">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;margin-top: 50px;">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 50px;">
                <input autocomplete="off" type="text" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 text-center" style="height: 40px;margin-top: 5px;font-family: 'B Yekan';color: black;border: none;border-radius: 10px;font-size: 16px;" placeholder="جستجو در آهنگ ها" id="search_text">
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 20px;padding-bottom: 20px;" id="div_result_search">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: 100px;background-color: red;display: none;border-radius: 10px;" id="error_search">
                <p style="line-height: 100px;color: white;font-family: 'B Yekan';font-size: 20px;">نتیجه ای یافت نشد</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;right: 0px;left: 0px;bottom: 0px;z-index: 30000000;display: none;overflow-y: scroll;" id="name_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: 40px;margin-top: 20px;">
            <img src="../../static/images/close.png" style="height: 40px;width: 40px;cursor: pointer;" id="close_name_div">
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center" style="height: 100px;background-color: red;display: none;border-radius: 10px;margin-top: 100px;" id="error_search_singer">
            <p style="line-height: 100px;color: white;font-family: 'B Yekan';font-size: 20px;">خواننده ای یافت نشد</p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 40px;padding-top: 20px;padding-bottom: 20px;" id="singer_box">

        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: rgba(1,1,1,.9);position: fixed;top: 0px;right: 0px;left: 0px;bottom: 0px;z-index: 30000000;display: none;overflow-y: scroll;" id="advertise_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: 40px;margin-top: 20px;">
            <img src="../../static/images/close.png" style="height: 40px;width: 40px;cursor: pointer;" id="close_advertise_div">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 400px;background-color: lightgray;margin-top: 40px;padding-top: 40px;padding-bottom: 40px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;padding: 0px;border-bottom: solid 2px black;">
                    <p style="line-height: 50px;font-family: 'B Yekan';color: black;font-size: 20px;">تبلیغات در سایت ما</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: auto;padding-top: 20px;padding-bottom: 20px;">
                    <p style="direction: rtl;font-family: 'B Yekan';font-size: 18px;color: #4ba7ff;">برای ثبت تبلیغات خود با ما تماس بگیرید :</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100px;">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;background-color: lightgray">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                            <p style="font-family: 'B Yekan';font-size: 18px;color: #000000;line-height: 100px;display: inline;">majid_kz2</p>
                            <img src="../../static/images/telegam_3.png" style="width: 40px;height: 40px;display: inline;margin-left: 10px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;background-color: lightgray">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                            <p style="font-family: 'B Yekan';font-size: 18px;color: #000000;line-height: 100px;display: inline;">09305243680</p>
                            <img src="../../static/images/phone.png" style="width: 40px;height: 40px;display: inline;margin-left: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;z-index: 5000000;display: none;" id="success_add_favorite">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #4ccb5e;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">آهنگ مورد دیدگاه به لیست علاقه مندی ها اضافه شد</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;z-index: 5000000;display: none;" id="success_add_like">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-image: url('../../static/images/love.gif');background-position: center;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">ممنون از دیدگاه شما</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;z-index: 5000000;display: none;" id="success_add_comment">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-image: url('../../static/images/comment.gif');background-position: center;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;direction: rtl;">دیدگاه شما بعد از تایید نمایش داده می شود ...</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;z-index: 5000000;display: none;" id="success_register">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-image: url('../../static/images/signup.gif');background-position: center;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: #70cb90;direction: rtl;">شما با موفقیت در سایت ثبت نام کردید</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;display: none;" id="error_div">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: #ff4532;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">خطایی رخ داده است</p>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 0;position: fixed;bottom: 0px;padding: 0px;display: none;" id="error_much_comment">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 60px;padding:0px;background-color: transparent;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-image: url('../../static/images/error.gif');background-size: cover;background-position: center;">
                <p style="line-height: 60px;font-family: 'B Yekan';font-size: 20px;color: white;">تعداد دیدگاهات شما بیش از حد مجاز است</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="register" style="background-color: rgba(1,1,1,.95);display: none;position: fixed;top: 0;bottom: 0;left: 0;right: 0;z-index: 600000;overflow-y: scroll;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="height: 40px;margin-top: 20px;">
            <img src="../../static/images/close.png" style="height: 40px;width: 40px;cursor: pointer;" id="close_register">
        </div>

        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" style="height: auto;margin-top: 50px;padding-top: 50px;padding-bottom: 50px;position: relative;border-radius: 10px;border: solid 2px lightgray;background: linear-gradient(gray,darkgray);">
            <img class="hidden-xs" src="../../static/images/login.png" alt="not found" style="height: 100px;width: 100px;position:absolute;top: -50px;right: 50px;">
            <img class="hidden-lg hidden-md hidden-sm" src="../../static/images/login.png" alt="not found" style="height: 80px;width: 80px;position:absolute;top: -40px;right: 20px;">
            <p class="hidden-xs" style="padding: 10px 20px;background-color: lightgray;font-family: 'B Yekan';color: black;position: absolute;top: -20px;width: 200px;border-radius: 10px;left: 40%;">فرم ثبت نام</p>
            <p class="hidden-lg hidden-md hidden-sm" style="padding: 10px 20px;background-color: lightgray;font-family: 'B Yekan';color: black;position: absolute;top: -20px;width: 150px;border-radius: 10px;left: 50px;">فرم ثبت نام</p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="firstname_reg" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="نام" style="direction: rtl;height: 40px;background-color: lightgray;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="lastname_reg" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="نام خانوادگی" style="direction: rtl;height: 40px;background-color: lightgray;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="numberphone_reg" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="شماره تلفن" style="direction: rtl;height: 40px;background-color: lightgray;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="username_reg" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="نام کاربری (حداقل 4 و حداکثر 16 کارکتر شامل حروف انگلیسی و کارکتر های مجاز)" style="direction: rtl;height: 40px;background-color: lightgray;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="password_reg" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="text" placeholder="رمز عبور (حداقل 4 و حداکثر 16 کارکتر شامل حروف انگلیسی و کارکتر های مجاز)" style="direction: rtl;height: 40px;background-color: lightgray;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: black;outline: none;border-radius: 5px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;">
                <input id="btn_regirster" autocomplete="false" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center" type="submit" value="ثبت نام" style="direction: rtl;height: 40px;background-color: #00CCFF;margin-top: 5px;border: none;border: solid 2px black;text-align: center;font-family: 'B Yekan';font-size: 15px;color: white;outline: none;border-radius: 5px;">
            </div>
        </div>


    </div>

    <script>
        $(document).ready(function () {
            maudio({
                obj: 'audio' // or jQuery selector
            })

            $("#popular_icon1").click(function () {
                $("#new_div1").hide()
                $("#view_div1").hide()
                $("#popular_div1").show('fade')
                $("#new_icon1").css({"backgroundColor":"#1c2a39"})
                $("#view_icon1").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon1").css({"backgroundColor":"black"})
            })
            $("#new_icon1").click(function () {
                $("#view_div1").hide()
                $("#popular_div1").hide()
                $("#new_div1").show('fade')
                $("#view_icon1").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon1").css({"backgroundColor":"#1c2a39"})
                $("#new_icon1").css({"backgroundColor":"black"})
            })
            $("#view_icon1").click(function () {
                $("#new_div1").hide()
                $("#popular_div1").hide()
                $("#view_div1").show('fade')
                $("#new_icon1").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon1").css({"backgroundColor":"#1c2a39"})
                $("#view_icon1").css({"backgroundColor":"black"})
            })

            $("#close_register").click(function () {
                $("#register").hide('fade','slow')
            })
            $("#popular_icon").click(function () {
                $("#new_div").hide()
                $("#view_div").hide()
                $("#popular_div").show('fade')
                $("#new_icon").css({"backgroundColor":"#1c2a39"})
                $("#view_icon").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon").css({"backgroundColor":"black"})
            })
            $("#new_icon").click(function () {
                $("#view_div").hide()
                $("#popular_div").hide()
                $("#new_div").show('fade')
                $("#view_icon").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon").css({"backgroundColor":"#1c2a39"})
                $("#new_icon").css({"backgroundColor":"black"})
            })
            $("#view_icon").click(function () {
                $("#new_div").hide()
                $("#popular_div").hide()
                $("#view_div").show('fade')
                $("#new_icon").css({"backgroundColor":"#1c2a39"})
                $("#popular_icon").css({"backgroundColor":"#1c2a39"})
                $("#view_icon").css({"backgroundColor":"black"})
            })
            $("#telegram_div").hover(function () {
                $("#telegram_img").attr("src","../../static/images/telegram_2.png")
            },function () {
                $("#telegram_img").attr("src","../../static/images/telegram.png")
            })
            $("#instagram_div").hover(function () {
                $("#instagram_img").attr("src","../../static/images/instagram_2.png")
            },function () {
                $("#instagram_img").attr("src","../../static/images/instagram.png")
            })

            $("#search_icon").click(function () {
                $("#menu_div").hide()
                $("#search_div").show('fade')
            })
            $("#close_search_div").click(function () {
                $("#search_div").hide('fade')
            })
            $("#menu_icon").click(function () {
                $("#search_div").hide()

                var h=$("#menu_icon").attr("href")
                if (h == "isopen"){
                    $("#menu_icon").css({'transform':'rotate(180deg)'})
                    $("#menu_icon").attr("href","")
                }else{
                    $("#menu_icon").css({'transform':'rotateX(180deg)'})
                    $("#menu_icon").attr("href","isopen")
                }
                $("#menu_div").toggle('blind','fast')
            })
            $("#close_name_div").click(function () {
                $("#name_div").hide('fade')
            })
            $(".name").click(function () {
                $("#name_div").show('fade')
            })
            $("#text_icon").click(function () {
                $("#download_div").hide()
                $("#analyis_div").hide()
                $("#text_div").show()
                $("#text_icon").css({'backgroundColor':'lightgray'})
                $("#analyis_icon").css({'backgroundColor':''})
                $("#download_icon").css({'backgroundColor':''})
            })

            $("#analyis_icon").click(function () {
                $("#download_div").hide()
                $("#text_div").hide()
                $("#analyis_div").show()
                $("#analyis_icon").css({'backgroundColor':'lightgray'})
                $("#text_icon").css({'backgroundColor':''})
                $("#download_icon").css({'backgroundColor':''})
            })
            $("#download_icon").click(function () {
                $("#analyis_div").hide()
                $("#text_div").hide()
                $("#download_div").show()
                $("#download_icon").css({'backgroundColor':'lightgray'})
                $("#text_icon").css({'backgroundColor':''})
                $("#analyis_icon").css({'backgroundColor':''})
            })
            $("#close_advertise_div").click(function () {
                $("#advertise_div").hide('fade')
            })
            $("#show_advertise").click(function () {
                $("#advertise_div").show('fade')
            })

            $("#search_text").keyup(function () {
                var search=$("#search_text").val();
                search=search.replace("'","");
                $("#search_text").val(search);
                search=search.replace(" ","");

                if (search.length >=2){
                    $.ajax({
                        type:'POST',
                        url:'../../ajax/searchmusic2/',
                        data:{'searchtext':search},
                        success:function (response) {
                            if (response == false){
                                $("#div_result_search").html("")
                                $("#error_search").show('blind')
                            }else{
                                $("#div_result_search").show('blind')
                                $("#div_result_search").html(response)
                            }
                        }

                    })
                }else{
                    $("#div_result_search").html("")
                }
            })


            $(".name").click(function () {
                var name=$(this).attr("href")
                $.ajax({
                    type:'POST',
                    data:{'name':name},
                    url:'../../ajax/searchsinger2/',
                    success:function (response) {

                        if (response != false){
                            $("#error_search_singer").hide()
                            $("#name_div").show('fade')
                            $("#singer_box").html(response)
                        }else{
                            $("#name_div").show('fade')
                            $("#singer_box").html("")
                            $("#error_search_singer").show('blind')
                        }

                    }
                })
            })

            $(".favorite").click(function () {
                var id=$(this).attr("href");
                var ip=$("#user_ip").text();

                $.ajax({
                    type:'POST',
                    data:{'ip':ip,'id':id},
                    url:'../../ajax/addfavorite/',
                    success:function (response) {
                        if (response){
                            $("#success_add_favorite").css({display:''})
                            $("#success_add_favorite").animate({height:60},300);
                            setTimeout(function(){
                                $("#success_add_favorite").animate({height:0},300);
                                $("#success_add_favorite").css({display:'none'})

                            }, 2000);

                            $("#star").addClass("anim")
                            setTimeout(function(){
                                $("#star").removeClass("anim")
                            }, 1000);
                        }
                    }

                })

            })


            $(".likesong").click(function () {
                var id=$(this).attr("href");
                var ip=$("#user_ip").text();

                $.ajax({
                    type:'POST',
                    data:{'ip':ip,'id':id},
                    url:'../../ajax/likesong/',
                    success:function (response) {
                        if (response){
                            $("#success_add_like").css({display:''})
                            $("#success_add_like").animate({height:60},300);
                            setTimeout(function(){
                                $("#success_add_like").animate({height:0},300);
                                $("#success_add_like").css({display:'none'})

                            }, 2000);

                            $("#like_button").addClass("animlike")
                            setTimeout(function(){
                                $("#like_button").removeClass("animlike")
                            }, 1000);
                        }
                    }

                })

            })


            $(".rate_up").click(function () {

                var id=$(this).attr("href")
                var ip=$("#user_ip").text()
                var old=$(".rate-"+id).text()

                $(".rate-"+id).html("<img src='../../static/images/load.gif' style='width: 30px;height: 30px;margin-top: -5px;'>")

                $.ajax({
                    type:'POST',
                    data:{'ip':ip,'id':id},
                    url:'../../ajax/rateup/',
                    success:function (response) {
                       if (response != false){
                           var s=response.split("*")
                           var rate=s[0]
                           $(".rate-"+id).text(rate)
                       }else{
                           $(".rate-"+id).text(old)
                       }
                    }

                })


            })

            $(".rate_down").click(function () {

                var id=$(this).attr("href")
                var ip=$("#user_ip").text()
                var old=$(".rate-"+id).text()


                $(".rate-"+id).html("<img src='../../static/images/load.gif' style='width: 30px;height: 30px;margin-top: -5px;'>")

                $.ajax({
                    type:'POST',
                    data:{'ip':ip,'id':id},
                    url:'../../ajax/ratedown/',
                    success:function (response) {
                       if (response != false){
                           var s=response.split("*")
                           var rate=s[0]
                           $(".rate-"+id).text(rate)
                       }else{
                           $(".rate-"+id).text(old)
                       }
                    }

                })
            })


            $("#send_comment").prop("disabled",true)

            var one=false
            var two=false
            var three=false


            $("#username").keyup(function () {
                var username=$("#username").val();
                if (username.length >=4 && username.length <=16){
                    one=true
                    if (one && two && three){
                        $("#send_comment").prop("disabled",false)
                    }else{
                        $("#send_comment").prop("disabled",true)
                    }
                }else{
                    one=false
                    $("#send_comment").prop("disabled",true)

                }
            })

            $("#password").keyup(function () {
                var password=$("#password").val();
                if (password.length >=4 && password.length <=16){
                    two=true
                    if (one && two && three){
                        $("#send_comment").prop("disabled",false)
                    }else{
                        $("#send_comment").prop("disabled",true)
                    }
                }else{
                    two=false
                    $("#send_comment").prop("disabled",true)

                }


            })

            $("#contain").keyup(function () {
                var contain=$("#contain").val();
                if (contain.length >=3 && contain.length <=256){
                    three=true
                    if (one && two && three){
                        $("#send_comment").prop("disabled",false)
                    }else{
                        $("#send_comment").prop("disabled",true)
                    }
                }else{
                    three=false
                    $("#send_comment").prop("disabled",true)

                }
            })

            if (one && two && three){
                $("#send_comment").prop("disabled",false)
            }else{
                $("#send_comment").prop("disabled",true)
            }


            $("#send_comment").click(function () {

                one=false
                two=false
                three=false
                $("#send_comment").prop("disabled",true)


                $("#send_comment").html("<img src='../../static/images/load.gif' style='width: 30px;height: 30px;'>")
                var username=$("#username").val()
                var password=$("#password").val()
                var contain=$("#contain").val()
                var song_id=$(".likesong").attr("href")

                $.ajax({
                    type:'POST',
                    data:{'username':username,'password':password,'contain':contain,'song_id':song_id},
                    url:'../../ajax/sendcomment/',
                    success:function (response) {
                        $("#send_comment").text("ارسال دیدگاه")
                        $("#username").val("")
                        $("#password").val("")
                        $("#contain").val("")
                       if (response == "100"){
                           //success
                           $("#success_add_comment").css({display:''})
                           $("#success_add_comment").animate({height:60},300);
                           setTimeout(function(){
                               $("#success_add_comment").animate({height:0},300);
                               $("#success_add_comment").css({display:'none'})

                           }, 3000);

                       }else if (response == "101"){
                           //count comment is much
                           $("#error_much_comment").css({display:''})
                           $("#error_much_comment").animate({height:60},300);
                           setTimeout(function(){
                               $("#error_much_comment").animate({height:0},300);
                               $("#error_much_comment").css({display:'none'})
                           }, 3000);

                       }else{
                           //error for register
                           $("#register").show('fade','slow')
                       }
                    }
                })

            })
            function just_persian(str) {
                var p = /^[\u0600-\u06FF\s]+$/;
                if (!p.test(str)) {
                    return false
                }
                return true;
            }

            $("#btn_regirster").prop("disabled",true)

            var on=false
            var tw=false
            var thre=false
            var four=false
            var five=false

            $("#username_reg").keyup(function () {
                var username=$("#username_reg").val();
                if (username.length >=4 && username.length <=16 && !just_persian(username)){
                    on=true

                    if (on && tw && thre && four && five){
                        $("#btn_regirster").prop("disabled",false)
                    }else{
                        $("#btn_regirster").prop("disabled",true)
                    }

                }else{
                    on=false
                    $("#btn_regirster").prop("disabled",true)
                }
            })

            $("#password_reg").keyup(function () {
                var password=$("#password_reg").val();
                if (password.length >=4 && password.length <=16 && !just_persian(password)){
                    tw = true

                    if (on && tw && thre && four && five){
                        $("#btn_regirster").prop("disabled",false)
                    }else{
                        $("#btn_regirster").prop("disabled",true)
                    }

                }else{
                    tw = false
                    $("#btn_regirster").prop("disabled",true)
                }
            })

            $("#numberphone_reg").keyup(function () {
                var phonenumber = $("#numberphone_reg").val();
                if (phonenumber.length == 11 && !isNaN(phonenumber) && phonenumber.startsWith("09")){
                    thre = true

                    if (on && tw && thre && four && five){
                        $("#btn_regirster").prop("disabled",false)
                    }else{
                        $("#btn_regirster").prop("disabled",true)
                    }

                }else{
                    thre = false
                    $("#btn_regirster").prop("disabled",true)
                }
            })

            $("#firstname_reg").keyup(function () {
                var fname=$("#firstname_reg").val();
                if (fname.length >=2 && fname.length <=32){
                    four = true

                    if (on && tw && thre && four && five){
                        $("#btn_regirster").prop("disabled",false)
                    }else{
                        $("#btn_regirster").prop("disabled",true)
                    }

                }else{
                    four = false
                    $("#btn_regirster").prop("disabled",true)
                }
            })

            $("#lastname_reg").keyup(function () {
                var lname=$("#lastname_reg").val();
                if (lname.length >=2 && lname.length <=32){
                    five = true

                    if (on && tw && thre && four && five){
                        $("#btn_regirster").prop("disabled",false)
                    }else{
                        $("#btn_regirster").prop("disabled",true)
                    }

                }else{
                    five = false
                    $("#btn_regirster").prop("disabled",true)
                }
            })

            $("#btn_regirster").click(function () {
                var fname=$("#firstname_reg").val()
                var lname=$("#lastname_reg").val()
                var username=$("#username_reg").val()
                var password=$("#password_reg").val()
                var phone=$("#numberphone_reg").val()
                var user_ip=$("#user_ip").text()

                $("#btn_regirster").html("<img src='../../static/images/load.gif' style='width: 30px;height: 30px;'>")

                $.ajax({
                    type:'POST',
                    data:{'username':username,'password':password,'fname':fname,'lname':lname,'phone':phone,'user_ip':user_ip},
                    url:'../../ajax/register/',
                    success:function (response) {
                        $("#send_comment").text("ثبت نام")
                        $("#username_reg").val("")
                        $("#password_reg").val("")
                        $("#firstname_reg").val("")
                        $("#lastname_reg").val("")
                        $("#numberphone_reg").val("")

                        $("#register").hide('fade')
                        if (response){
                            $("#success_register").css({display:''})
                            $("#success_register").animate({height:60},300);
                            setTimeout(function(){
                                $("#success_register").animate({height:0},300);
                                $("#success_register").css({display:'none'})
                            }, 3000);

                        }else{
                            $("#error_div").css({display:''})
                            $("#error_div").animate({height:60},300);
                            setTimeout(function(){
                                $("#error_div").animate({height:0},300);
                                $("#error_div").css({display:'none'})
                            }, 3000);
                        }
                    }
                })

            })



        })
    </script>
</body>
</html>
