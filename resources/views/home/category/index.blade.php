@extends('templates.default')
@section('content')

@if(session()->has('success'))
<div class="alert alert-fill-success" role="alert">
  <i class="mdi mdi-alert-circle"></i>
  {{ session()->get('success') }}
</div>
@endif
@if ($errors->has('name'))
  <div class="alert alert-fill-danger" role="alert">
      <i class="mdi mdi-alert-circle"></i>
      Kategori gagal disimpan
    </div>
@endif
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Kategori</h4>
    <div class="text-right" style="margin-button:10px">
      <button class="btn btn-info" data-target="#tambah" data-toggle="modal">Tambah</button>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php($no = 1)
              @foreach($categories as $category)
              <tr>
                  <td width="10%">{{$no}}</td>
                  <td width="70%">{{$category->name}}</td>
                  <td width="12%">
                    <button data-toggle="modal" data-target="#edit{{$category->id}}" class="btn btn-primary"><i class="mdi mdi-tooltip-edit"></i></button>
                    <button data-toggle="modal" data-target="#hapus{{$category->id}}" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                  </td>
              </tr>
              @include('home.category.modal')
              @php($no++)
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
