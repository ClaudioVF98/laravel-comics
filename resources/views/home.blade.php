@extends('templates.base')

@section('pageTitle', 'Homepage')

@section('mainBody')
    <main class="mainPage">
        <div class="cardsDiv">
            <div class="currentSeries">
                <h1>CURRENT SERIES</h1>
            </div>
            <div class="cards">
                @foreach ($comicsArr as $comic)
                    <a href="/{{$comic['id']}}">
                        <div class="card">
                            <div>
                                <img src="{{$comic['thumb']}}" alt="">
                            </div>
                            <p>{{$comic['title']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
