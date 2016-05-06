<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home') - PHPMG</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li>
                            <a href="{{ URL::route('website.home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ URL::route('website.events') }}">Eventos</a>
                        </li>
                        <li>
                            <a href="{{ URL::route('website.organizers') }}">Organizadores</a>
                        </li>
                        <li>
                            <a href="{{ URL::route('website.contact') }}">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if(Request::route()->getName() == 'website.home')
                        <img src="{{ asset('assets/img/phpmg-logo.png') }}" />
                    @else
                        <img src="{{ asset('assets/img/phpmg.png') }}" />
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        @yield('content')
    </section>


    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    &copy; 2016 PHPMG
                </div>
            </div>
        </div>
    </section>

    @include('website/partials/analytics')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
