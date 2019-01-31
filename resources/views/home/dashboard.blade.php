@extends('templates.default')
@section('content')
<div class="row">
  <div class="col-md-6 col-lg-3 grid-margin stretch-card">
    <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
      <div class="card-body">
        <h6 class="font-weight-normal">Total Pariwisata</h6>
        <h2 class="mb-0">2</h2>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 grid-margin stretch-card">
    <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
      <div class="card-body">
        <h6 class="font-weight-normal">Total Kategori</h6>
        <h2 class="mb-0">{{count($category)}}</h2>
      </div>
    </div>
  </div>
</div>
@endsection
