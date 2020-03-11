<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }



            h1{
                text-align: center;
                font-size: 40px;
            }
            form{
                text-align: center;
                margin: 0 auto;
                width: 500px;
            }
            input[type="number"]{
                padding: 5px;
                width: 200px;
                border-radius: 3px;
                border: 1px solid #868282;
            }
            .btn{

                background: #00a1ff;
                border: 0;
                padding: 5px 20px;
                border: 1px solid #3a84af;
                border-radius: 3px;
            }
            .text-center{
                text-align: center;
            }
        </style>
    </head>
    <body>

    <h1>Test Catfact</h1>
        <div class="flex-center position-ref full-height">

            <br>

            <div class="text-center">

                <?php
                if(isset($errors) && count($errors)){
                    echo '<p>'.$errors->first('number').'</p>';
                }

                ?>

            </div>

            <form action="{{route('getfact')}}" method="POST" role="form">
                {{ csrf_field()}}
                <input name="number" type="number" placeholder="Enter number of cat facts" required>

                <button class="btn">Get Facts</button>

            </form>
        </div>
    </body>
</html>
