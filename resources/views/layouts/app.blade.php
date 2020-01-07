<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if(Request::is('admin/*') || Request::is('login') || Request::is('home'))
        {{--<style>--}}
            {{--body {--}}
                {{--background: #E9EBEE !important;--}}
                {{--color: #000;--}}
            {{--}--}}
        {{--</style>--}}
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    @endif
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                        @if (! Auth::guest())
                            <ul class="nav navbar-nav mr-auto">
                                <li><a href="/admin/tour" class="nav-link">Tour Dates</a></li>
                                <li><a href="/admin/news" class="nav-link">News</a></li>
                                <li><a href="/admin/mailinglist" class="nav-link">Mailing List</a></li>
                                <li><a href="/admin/gallery" class="nav-link">Gallery</a></li>
                                <li><a href="/admin/video" class="nav-link">Videos</a></li>
                            </ul>
                        @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        @yield('scripts')
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'yy-mm-dd',
                timepicker: false
            });
        } );
    </script>
    <link rel="stylesheet" href="/redactor/redactor.css" />
    <script src="/redactor/redactor.min.js"></script>
    <script>
        $(document).ready(function() {
            // All textareas become redactor wysiwyg areas.
            $("#redactor").redactor({
                focus: true,
                imageUpload: '/redactorUpload',
                fileUpload: '/redactorUpload',
                minHeight: 500,
                buttons: ['html', 'bold', 'italic', 'lists', 'image', 'file', 'link', 'horizontalrule']
            });
        });
    </script>

    <script type="text/javascript" id="st_insights_js" src="https://w.sharethis.com/button/buttons.js?publisher=91911e10-879d-4366-acab-950866725672"></script>
    <script type="text/javascript">stLight.options({publisher: "91911e10-879d-4366-acab-950866725672", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-99600183-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
