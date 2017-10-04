<?php
#header("Location: /?404");
header("Content-Type:text/html; charset=utf-8");
?>
        <!DOCTYPE html>
<html>
<head>
    <title>Экспертная диагностика системы финансового управления</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="ITeam"/>
    <meta name="keywords" content="ITeam"/>

    <meta property="og:image" content="/images/logo.gif"/>
    <meta property="og:title" content="Разработка стратегии шаг за шагом"/>
    <meta property="og:description"
          content='Рекомендую бесплатный мастер-класс "Разработка стратегии шаг за шагом" консалтинговой компании iTeam'/>

    <link rel="shortcut icon" href="/favicon.ico"/>
    <style type="text/css">
        * {
            background-attachment: scroll;
            background-color: rgba(0, 0, 0, 0);
            background-position: 95% center;
            background-repeat: no-repeat;
            margin: 0;
            /*padding: 0;*/
        }

        body {
            background-color: #EFEFEF;
            color: #003366;
            font: 20px Times New Roman, serif;
            margin: 0;
            max-width: 1280px;
            min-height: 100%;
            min-width: 960px;
            padding: 0;
        }

        #body {
            width: 800px;
            overflow: hidden;
        }

        #header {
            position: relative;
            height: 96px;
            margin: 0;
            width: 100%;
        }

        #logo {
            height: 70px;
            margin: 0 auto;
            width: 140px;
        }

        .logo {
            width: 200px;
            height: 70px;
            background: url('data:image/png;base64,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') no-repeat scroll 0 -70px transparent;
            font: 70px/70px Arial, Verdana sans-serif;
            text-indent: 201px;
            display: block;
            overflow: hidden;
            border: 0 none;
            text-decoration: none;
            color: #202;
            letter-spacing: 35px;
        }

        .logo:hover {
            background: url('data:image/png;base64,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') no-repeat scroll 0 0 transparent;
        }

        #logo:hover {
            cursor: default;
        }

        a.logo:hover {
            cursor: pointer;
        }

        #wrapper {
            clear: both;
            float: none;
        }

        s {
            text-decoration: none;
        }

        #page {
            background-color: #FFFFFF;
            margin: 40px auto;
            padding: 40px;
            width: 800px;
        }

        p {
            padding: 0 0 16px;
        }

        p big {
            color: rgb(204, 0, 0);
            font-size: 22px;
            line-height: 26px;
            margin: 0 0 32px;
            display: block;
        }

        #main .button_block {
            display: block;
            padding: 20px 0;
            position: relative;
        }

        #main .button_block a {
            background-color: rgb(221, 0, 17);
            border-radius: 8px;
            color: rgb(255, 255, 255);
            display: block;
            font: 18px/1 sans-serif;
            margin: 0 auto;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            width: 250px;
        }

        #main .button_block a:hover {
            background-color: rgb(221, 0, 0);
        }

        .more h1, .more h2 {
            color: rgb(204, 0, 0);
            line-height: 1.4;
        }

        #modal_form {
            width: 700px;
            height: 500px;
            border-radius: 5px;
            border: 3px #000 solid;
            background: #fff;
            position: fixed;
            top: 45%;
            left: 50%;
            margin-top: -300px;
            margin-left: -360px;
            display: none;
            opacity: 0;
            z-index: 5;
            padding: 20px 10px;
        }

        #modal_form #modal_close {
            width: 21px;
            height: 21px;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            display: block;
        }

        #overlay {
            z-index: 3;
            position: fixed;
            background-color: #000;
            opacity: 0.8;
            -moz-opacity: 0.8;
            filter: alpha(opacity=80);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            cursor: pointer;
            display: none;
        }

        #modal_promotion {
            width: 700px;
            height: 500px;
            border-radius: 5px;
            border: 3px #000 solid;
            background: #fff;
            position: fixed;
            top: 45%;
            left: 50%;
            margin-top: -300px;
            margin-left: -360px;
            display: none;
            opacity: 0;
            z-index: 5;
            padding: 20px 10px;
        }

    </style>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
</head>
<body>
<div id="page" style="text-align: center">
    <div id="body">
        <div id="header">

            <div id="logo">
                <a class="logo" href="/">ITeam</a>
            </div>

        </div>
        <div id="wrapper">
            <div>
                <h1>Материалы к мастер-классу</h1>
                <h1>&laquo;Разработка планов и бюджетов компании на 2018 год&raquo;</h1>
                <div style="width: 400px; height: 250px; border: 1px solid blueviolet; padding: 15px; margin-top: 50px; margin-bottom: 50px">
                    <h1>тут будет видео</h1>
                </div>
            </div>
            <div>
                <h2>Чтобы получить дополнительные материалы,<br>оставте пожалуйста комментарий о компании iteam</h2>
            </div>
            <div id="modal_form">
                <span id="modal_close">x</span>
                <div>
                        <span>
                            Спасибо за интерес проявленный к нашим материалам!<br>
                        Чтобы скачать презентацию, пожалуйста, оставте отзыв:<br>
                        </span>
                    <form id="forma" method="post" action="{{ route('emailTest.EmailSend.sendComm') }}" enctype="multipart/form-data">
                        {{--<form method="post" action="{{ route('emailTest.EmailSend.sendEmail') }}">--}}

                        <textarea
                                style="border:1px dotted #FF0000; width:100%; height: 100px; overflow:auto; margin-top: 50px" name="commend" required>Ваш отзыв*</textarea>
                        <input style="border:1px dotted #FF0000; width:100%; height: 30px;  margin-top: 15px"
                               type="text" name="userName" value="ФИО*" required><br>
                        <input style="border:1px dotted #FF0000; width:100%; height: 30px; margin-top: 15px" type="text"
                               name="organization" value="Представляете организацию*" required><br>
                        <input style="text-align: left" type="file" name="image"><br>
                        <input type="submit" name="sbmt">
                    </form>
                    <br>
                    Не знаете, что написать? Расскажите нам:
                    <ul style="text-align: left">
                        <li>Что показалось самым интересным материалом портала ITEAM?</li>
                        <li>Что уже применили на практике</li>
                        <li>Самый интересный вебинар который Вы запомнили</li>
                    </ul>
                </div>
            </div>
            <div id="overlay"></div>
            <div id="modal_promotion">
                <span id="modal_close">x</span>

            </div>

            <a href="#" class="modal">ОСТАВИТЬ КОММЕНТАРИЙ</a>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function () {

        $('.modal').click(function (event) {
            event.preventDefault();
            $('#overlay').fadeIn(400, // анимируем показ обложки
                function () { // далее показываем мод. окно
                    $('#modal_form')
                        .css('display', 'block')
                        .animate({opacity: 1, top: '50%'}, 200);
                });
        });

        // закрытие модального окна
        $('#modal_close, #overlay').click(function () {
            $('#modal_form')
                .animate({opacity: 0, top: '45%'}, 200,  // уменьшаем прозрачность
                    function () { // пoсле aнимaции
                        $(this).css('display', 'none'); // скрываем окно
                        $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                    }
                );
        });

    });


    //    $(window).load(function (e) {
    //        setTimeout(function () {
    //            $('#comercia').css('display', 'none');
    //            $('#main').css('display', 'block')
    //
    //        }, 3000); // in milliseconds
    //    });


</script>