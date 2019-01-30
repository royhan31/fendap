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
              <!-- modal tambah -->
              <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Edit Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('category.store')}}" method="post">
                      @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="cname">Nama</label>
                        <input class="form-control" name="name" type="text" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      <input type="submit" value="Simpan" class="btn btn-success">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- akhir modal tambah -->
              <!-- modal edit -->
              <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Tambah Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('category.update',$category)}}" method="post">
                      @csrf
                      {{ method_field('PATCH') }}
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="cname">Nama</label>
                        <input class="form-control" name="name" type="text" value="{{$category->name}}" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      <input type="submit" value="Edit" class="btn btn-success">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- akhir modal edit -->
              <!-- modal hapus -->
              <div class="modal fade" id="hapus{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Hapus Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('category.destroy',$category)}}" method="post">
                      @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="cname">Apakah anda yakin akan menghapus kategori {{$category->name}} ?</label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      <input type="submit" value="hapus" class="btn btn-danger">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- akhir modal hapus -->
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
