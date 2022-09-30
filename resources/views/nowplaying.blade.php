<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Now Playing</title>
  </head>
  <body>
    
@extends('layouts.menu')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card" style="width: 100%;">
                <a href="{{ url('details', $playing->id) }}">
                    <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/{{ $playing->poster_path }}" class="" style="width: 100%;">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $playing->title }}</h5>
                    <p class="card-text">{{ $playing->overview }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection