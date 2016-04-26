@extends('website/layouts/master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
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
@stop
