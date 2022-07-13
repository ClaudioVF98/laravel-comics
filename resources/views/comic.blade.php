@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('mainBody')
    <main class="singleComic">
        <div class="top-div">
            <div class="centered-div">
                <div class="img-div">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
            </div>
        </div>

        <div class="info centered-div">
            <h1>{{ $comic['title']}}</h1>
            <p>{{ $comic['description']}}</p>
        </div>

    </main>
@endsection
