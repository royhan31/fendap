@extends('templates.default')
@section('content')
 <div class="row">
    @foreach($categories as $category)
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a style="text-decoration:none" href="#">
                <h4 class="card-title">{{$category->name}}</h4> </a>
                <div class="owl-carousel owl-theme full-width">
                  @foreach($tours as $tour)
                  @if($tour->category_id == $category->id)
                  <div class="item">
                    <div class="card text-white">
                      <img class="card-img" src="{{asset('images/'.$tour->image)}}" height="300rem" alt="Card image">
                      <div class="card-img-overlay d-flex">
                        <div class="mt-auto text-center w-100">
                          <h3>{{$tour->title}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
@endsection
