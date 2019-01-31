@extends('templates.default')
@section('content')
<div class="card">
  <div class="card-body">
    <h4>Pariwisata</h4>
    <div class="text-right" style="margin-button:10px">
      <a href="{{ route('tour.create') }}" class="btn btn-primary">Tambah</a>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="row portfolio-grid">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                <figure class="effect-text-in">
                  <img src="{{ asset('asset/images/samples/300x300/1.jpg')}}" alt="image"/>
                  <figcaption>
                    <h4>Photography</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
                  <div class="text-center">
                <button class="btn btn-success btn-sm" data-target="#tambah" data-toggle="modal">Detail</button>
                <button class="btn btn-info btn-sm" data-target="#tambah" data-toggle="modal">Edit</button>
                <button class="btn btn-danger btn-sm" data-target="#tambah" data-toggle="modal">Hapus</button>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
