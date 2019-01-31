@extends('templates.default')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form edit wisata</h4>
                <form class="forms-sample">
                  @csrf
              {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" value="{{$tour->title}}" placeholder="Enter title" value="It just dummy title">
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"
                              @if($category->id === $tour->category_id) selected @endif
                              >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" rows="8" placeholder="Enter description">{{$tour->title}}</textarea>
                    </div>
                    <div class="d-flex justify-content-start align-items-start mb-3">
                        <div class="col-4 form-group">
                            <img src="{{ asset('images/'.$tour->image) }}" alt="sample" class="rounded mw-100"/>
                            <p class="text-info mt-3">Gambar sebelumnya</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{route('tour')}}" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
