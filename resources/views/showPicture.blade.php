<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>提取成功</title>
        <style>
            body{
                margin: 0;
                overflow:hidden;
            }
            img {
                height: 100%;
                width: 100%;
            }
            .fullscreen{
                width: 100%;
            }

        </style>
    </head>
    <body>
    <div class="fullscreen" id="fullscreen">

        <img id="picture" src="uploads/{{ $path }}"/>
    </div>
    </body>
<script>
        document.getElementById('fullscreen').style.height=window.innerHeight+'px';
        window.onresize = function () {
            document.getElementById('fullscreen').style.height=window.innerHeight+'px';
        }
</script>
</html>
