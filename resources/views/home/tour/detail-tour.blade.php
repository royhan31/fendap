@extends('templates.default')

@section('content')
    <div class="card">
        <img class="card-img-top" src="{{ asset('asset/images/samples/1280x768/1.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor is for title</h4>
            <h6 class="card-text">Category</h6>
            <br>
            <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam deleniti</p>
        </div>
    </div>
@endsection