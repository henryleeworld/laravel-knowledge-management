<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('panel.site_title') }}</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>

        @include('partials.nav')

        @if(!isset($exception))
            <div class="searchfield bg-hed-six">
                <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                    <div class="row text-center margin-bottom-20">
                        <h1 class="white">{{ trans('panel.site_title') }}</h1>
                        <span class="nested">檔案管理各項知識，歡迎瀏覽</span>
                    </div>
                </div>
            </div>
        @endif

        <div class="container featured-area-default padding-30">
            <div class="row">
                @yield('content')

                @if(!isset($exception))
                    @include('partials.sidebar')
                @endif
            </div>
        </div>

        @yield('about')

        @include('partials.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/okayNav/2.0.4/js/jquery.okayNav-min.js" integrity="sha512-jUfjw0FclnvQxIqS9mYI3pw5Z0gVK3rr4Vs/HLT4Y0y+t/Go77td4zqJ2/N610AjkDzm0J3yukcMT9rKsC/Qig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>