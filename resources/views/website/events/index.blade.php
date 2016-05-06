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
                    @foreach($events as $event)
                        <tr>
                            <td><b>{{ $event->name }}</b></td>
                            <td>{{ $event->start_at->format('d/m/Y H:i') }}</td>
                            <td>{{ $event->venue->name }}</td>
                            <td><a href="{{ $event->meetup_url }}">+ Info</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
