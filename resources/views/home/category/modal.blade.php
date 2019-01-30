<!-- modal tambah -->
<!-- <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Kategori</h5>
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
</div> -->
<div class="modal fade" tabindex="-1" role="dialog" id="tambah">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="" action="" method="post">
            <div class="modal-body">
                <div class="form-group">
                  <h6><label>Are you sure delete category  ? </label></h6>
                </div>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                <input type="hidden" name="category" value="">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- akhir modal tambah -->
<!-- modal edit -->
<div class="modal fade" id="edit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Kategori</h5>
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
<div class="modal fade" id="hapus{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Kategori</h5>
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
