<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COP4834</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   {{ config('app.name') }}
                </div>
                <p><a href="http://roneaglin.online/COP4834/assignments/assignment-2-publishing-to-the-web/">Course Website</a></p>
              <p>
              </p>
                  built with:
              </p>
                <div class="links">
                    
                    <a href="https://codeanywhere.com/">IDE</a>
                    <a href="https://www.hostmonster.com/">Hosting</a>
                    <a href="https://www.vandyke.com/products/securecrt/">SSH-Client</a>
                    <a href="https://www.nginx.com/">Webserver</a>
                    <a href="https://www.mysql.com/">Database</a>
                    <a href="https://laravel.com/">Laravel</a>

                    <a href="https://github.com/qriz75/cop4834">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
