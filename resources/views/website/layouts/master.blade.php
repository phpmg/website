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
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Eventos</a>
                        </li>
                        <li>
                            <a href="#">Organizadores</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('assets/img/phpmg-logo.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="text-center">Próximos eventos</h2>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>
                                Evento
                            </td>
                            <td>
                                Data
                            </td>
                            <td>
                                Local
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>4o PHPMG Talks</b></td>
                                <td>29/04/2016</td>
                                <td>Take.net</td>
                                <td><a>+ Info</a></td>
                            </tr>
                            <tr>
                                <td><b>beer.php</b></td>
                                <td>02/05/2016</td>
                                <td>Rock Esporte Bar</td>
                                <td><a>+ Info</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @yield('content')

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
