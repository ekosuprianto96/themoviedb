@extends('layouts.menu')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($playing->results as $ply)
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 100%;">
                <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/{{ $ply->poster_path }}" class="im-fluid">
                <div class="card-body">
                    <h5 class="card-title">{{ $ply->title }}</h5>
                    <p class="card-text">{{ $ply->overview }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection