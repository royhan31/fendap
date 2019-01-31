@extends('templates.default')

@section('content')
    <div class="card">
        <img class="card-img-top" src="{{ asset('images/'.$tour->image) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{$tour->title}}</h4>
            <h6 class="card-text">{{$tour->category->name}}</h6>
            <br>
            <p class="card-description">{{$tour->description}}</p>
        </div>
    </div>
@endsection
