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
    <script src="../../static/js/audioplayer.js"></script>
    <link rel="stylesheet" href="../../static/css/audioplayer.css">
    <style>
        *{
            user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            outline: none;
        }
        .name:hover{
            cursor: zoom-in;
            background-color: #00CCFF;
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
            color: black;
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
            border: solid 1px white;
        }
        #instagram_div:hover{
            border: solid 1px white;
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
        .icon_info:hover{
            cursor: pointer;
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
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" style="height: 60px;">
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
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-center" style="height: 60px;">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right" style="height: 60px;">
                <a href="../../favorite/index/">
                    <img src="../../static/images/star(1).png" alt="" style="height: 30px;width: 30px;margin-top: 15px;" title="لیست علاقه مندی ها">
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

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right" style="height: 120px;z-index: 200000;position: absolute;top: 60px;padding: 0px;display: none;" id="menu_div">
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
                    <p class="select_option" style="color: white;">پربازدیدترین ها</p>
                </div>
                <div id="popular_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                    <p class="select_option" style="color: white;">محبوبترین ها</p>
                </div>
                <div id="new_icon" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: black;">
                    <p class="select_option" style="color: white;">جدیدترین ها</p>
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
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 text-center" style="height: auto;padding-top: 40px;padding-bottom: 40px;margin-top: 30px;">

            <?php
                if (isset($favorite_song) && $favorite_song != false){
                    foreach ($favorite_song as $val):
            ?>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-left: 10px;padding-right:10px;padding-top: 5px;padding-bottom: 5px;">
                <a href="../../track/index/<?php echo $val['id'];?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center icon_info" style="height: auto;margin-top: 5px;background-image: url('../../static/images/not-found.png');background-size: cover;background-position: top;background-repeat: no-repeat;padding: 0px;box-shadow: 0 8px 16px 0px rgba(0,0,0,1);background-color: black;">
                        <img src="<?php echo $val['img'];?>" style="width: 100%;height: 190px;z-index: 10000;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 50px;background-color: white;padding: 0px;">
                            <p style="line-height: 50px;font-family: 'B Yekan';color: black;"><span><?php echo $val['singer'];?></span> / <span><?php echo $val['name'];?></span></p>
                        </div>
                        <div style="width: 100%;height: auto;padding: 0px;">
                            <audio src="<?php echo $val['url'];?>" controls="controls" style="height: 50px;"></audio>
                        </div>
                    </div>
                </a>
            </div>

            <?php
                    endforeach;
                }else{

            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: wheat;padding-top: 40px;padding-bottom: 40px;margin-top: 20px;background-image: url('../../static/images/empty.png');box-shadow: 0 8px 16px 0px rgba(0,0,0,1);">
                <p style="font-family: 'B Yekan';font-size: 25px;color: black;padding-top: 20px;padding-bottom: 20px;">لیست علاقه مندی شما خالی است</p>
                <img src="../../static/images/star(1).png" alt="" style="height: 100px;width: 100px;">
            </div>
            <?php
                }
            ?>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-top: 40px;padding-bottom: 40px;">
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12 text-center" style="height: auto;padding: 0px;padding-bottom: 20px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: auto;background-color: lightgray;padding: 0px;">
                    <div id="view_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                        <p class="select_option" style="color: white;">پربازدیدترین ها</p>
                    </div>
                    <div id="popular_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: #1c2a39;">
                        <p class="select_option" style="color: white;">محبوبترین ها</p>
                    </div>
                    <div id="new_icon1" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="height: 50px;padding: 0px;background-color: black;">
                        <p class="select_option" style="color: white;">جدیدترین ها</p>
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
                <p class="select_option">خواننده ها بر اساس نام</p>
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
                <p class="select_option">دسته بندی ها</p>
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
                            <p style="font-family: 'B Yekan';font-size: 18px;color: black;line-height: 100px;display: inline;">majid_kz2</p>
                            <img src="../../static/images/telegam_3.png" style="width: 40px;height: 40px;display: inline;margin-left: 10px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" style="height: 100px;background-color: lightgray">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
                            <p style="font-family: 'B Yekan';font-size: 18px;color: black;line-height: 100px;display: inline;">09305243680</p>
                            <img src="../../static/images/phone.png" style="width: 40px;height: 40px;display: inline;margin-left: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
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
            $('audio').audioPlayer();
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
        })
    </script>
</body>
</html>

