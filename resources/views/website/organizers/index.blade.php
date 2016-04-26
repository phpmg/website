@extends('website/layouts/master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Organizadores</h2>
            </div>
            @foreach($organizers as $organizer)
            <div class="col-sm-3 text-center">
                <h3>{{ $organizer->name }}</h3>
                <img class="img-rounded img-responsive" src="{{ $organizer->image }}">

                <div class="social-networks">
                    <a href="http://www.facebook.com/{{ $organizer->facebook }}">
                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.twitter.com/{{ $organizer->twitter }}">
                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.github.com/{{ $organizer->github }}">
                        <i class="fa fa-github-square fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
