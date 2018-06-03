<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            h1, h2, h3, h4, h5, h6, p {
                margin: 0;
                padding: 0;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .container {
                width: 100%;
                max-width: 800px;
            }

            .Title {
                padding: 12px 0px;
            }

            .Group {
                border-top: 1px solid #ccc;
            }

            .Group__content {
                padding: 12px 0px 6px;
            }

            .Group__actions {
                padding: 6px 0px 12px;
            }

            .Client {
                border: 1px solid #ccc;
                margin-bottom: 12px;
                padding: 12px 12px 0px;
                border-radius: 12px;
            }

            .ClientAddress {
                
            }

            .Button {
                border: 0;
                border-radius: 12px;
                padding: 12px 24px;
                font-size: 18px;
                font-weight: 300;
                cursor: pointer;
            }
            .Button--edit {
                background: cyan;
            }
            .Button--save {
                background: green;
            }
        </style>
    </head>
    <body class="flex-center">
        <div id="app" class="container">
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
