<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PS4自定义壁纸</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            input[type="text"]{
                height: 60px;
                width: 300px;
                font-size: 50px;
                text-align: center;
            }
            input[type="submit"]{
                font-size:40px
            }
            input[type="file"]{
                font-size:40px
            }
            hr{
                border: none;
                height: 1px;
                border-top:1px solid #ccc;
                margin-top: 22%;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .description{
                text-align: left;
                margin-left: 30%;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    PS4自定义壁纸
                </div>
                <div class="title m-b-md">
                </div>

                <div class="links">
                    <form method="get" action="showPicture">
                        <input type="text" name="code">
                        <input type="submit" value="提取"/>
                    </form>
                </div>
                <hr>
                <div class="description">
                    1、准备好与你的屏幕分辨率相等的壁纸（或同比例）；<br>
                    2、在下方上传；<br>
                    3、上传成功后，会显示6位提取码；<br>
                    4、在PS4上打开浏览器，输入本网站，全屏，输入提取码，截屏；<br>
                    5、PS4.5系统，设定-主题-定制，选择全部截图；<br>
                    6、本站不保证一直运营，想聊扯群主欢迎加入Q群：564039012
                    <br>

                </div>
                <div class="links">
                    <form method="POST" action="upload" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="file" name="file" accept="image/*"/>
                        <input type="submit" name="submit" value="上传"/>
                    </form>
                </div>

            </div>
        </div>
    </body>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93490918-1', 'auto');
        ga('send', 'pageview');

    </script>
</html>
